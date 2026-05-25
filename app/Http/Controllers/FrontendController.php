<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Models\EventPartner;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = EventCategory::all();
        $partners = EventPartner::all();

        return view('welcome', compact('categories', 'partners'));
    }
}