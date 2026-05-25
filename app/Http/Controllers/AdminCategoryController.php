<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;

class AdminCategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $categories = EventCategory::when($search, function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })->get();

        return view('admin.category-management', compact('categories'));
    }

    public function store(Request $request)
    {
        EventCategory::create([
            'name' => $request->name
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $category = EventCategory::findOrFail($id);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        EventCategory::findOrFail($id)->delete();

        return redirect()->back();
    }
}