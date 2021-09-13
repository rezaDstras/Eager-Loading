<?php

namespace App\Http\Controllers;

use App\Http\Resources\NoteResource;
use App\Models\Note;

class NoteController extends Controller
{
    public function allNotes()
    {
        return NoteResource::collection(Note::allNotes());
    }

    public function show(Note $note)
    {
        return new NoteResource($note);
    }
}
