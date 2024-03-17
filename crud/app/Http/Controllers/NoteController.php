<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NoteRequest;



class NoteController extends Controller
{
    
    public function index(): View{
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create():View{
        return view('note.create');
    }

    public function store(NoteRequest $request): RedirectResponse {
       
        // VALIDACIONES
            // Peor porque le das al controlador la responsabilidad 
            // de hacer comprobaciones, que no es su rol y ademas engrodas el codigo, 
            // en laravel se hace con requests peersonalizadas
            // $request->validate([
            //     'title' => 'required|max:255|min:3',
            //     'description' => 'required|max:255|min:3'
            // ]);

        // $note = new Note();
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        // Forma mas corta de hacerlo
        // Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        // Forma aun mas corta de hacerlo si los names coinciden con los campos de la bd
        Note::create($request->all());

        return redirect()->route('note.index')->with('success', 'Note created');
    }

    public function edit(Note $note): View{
        return view('note.edit', compact('note'));
    }


    public function updated(NoteRequest $request, Note $note):RedirectResponse  {
       
        $note->update($request->all());

        return redirect()->route('note.index')->with('success', 'Note updated');
    }

    public function show(Note $note):View{
       
        return view('note.show', compact('note'));
    }

    public function delete(Note $note):RedirectResponse{
       
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted');
    }


}
