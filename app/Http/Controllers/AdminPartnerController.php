<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPartner;

class AdminPartnerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $partners = EventPartner::when($search, function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })->get();

        return view('admin.partner-management', compact('partners'));
    }

    public function store(Request $request)
    {
        EventPartner::create([
            'name' => $request->name,
            'logo_url' => $request->logo_url
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $partner = EventPartner::findOrFail($id);

        $partner->update([
            'name' => $request->name,
            'logo_url' => $request->logo_url
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        EventPartner::findOrFail($id)->delete();

        return redirect()->back();
    }
}