<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('category')->latest()->get();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.events.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'date' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'nullable',
            'location' => 'nullable',
        ]);

        $posterPath = null;

        if ($request->hasFile('poster')) {

            $posterPath = $request
                ->file('poster')
                ->store('posters', 'public');
        }

        Event::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'price' => $request->price,
            'stock' => $request->stock,
            'poster_path' => $posterPath,
        ]);

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Event berhasil ditambahkan.');
    }

    public function edit(Event $event)
    {
        $categories = Category::all();

        return view('admin.events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'date' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        $posterPath = $event->poster_path;

        if ($request->hasFile('poster')) {

            if ($event->poster_path) {

                Storage::disk('public')
                    ->delete($event->poster_path);
            }

            $posterPath = $request
                ->file('poster')
                ->store('posters', 'public');
        }

        $event->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'price' => $request->price,
            'stock' => $request->stock,
            'poster_path' => $posterPath,
        ]);

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Event berhasil diupdate.');
    }

    public function destroy(Event $event)
    {
        if ($event->poster_path) {

            Storage::disk('public')
                ->delete($event->poster_path);
        }

        $event->delete();

        return redirect()
            ->route('admin.events.index')
            ->with('success', 'Event berhasil dihapus.');
    }
}