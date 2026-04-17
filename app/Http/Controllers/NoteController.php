<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::where("user_id", Auth::id())->get();

        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation basique à compléter
        // $validated = $request->validate([
            
        // ]);

        $note = new Note($validated);
        $note->user()->associate(Auth::user());
        $note->save();


        return redirect()
            ->route('notes.index')
            ->with('status', 'Note créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        // Validation basique à compléter
        // $validated = $request->validate([
            
        // ]);

        $note->update($validated);

        return redirect()
            ->route('notes.index')
            ->with('status', 'Note mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()
            ->route('notes.index')
            ->with('status', 'Note supprimée avec succès.');
    }
}
