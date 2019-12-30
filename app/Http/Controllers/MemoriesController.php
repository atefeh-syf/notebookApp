<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Memory;
use \App\User;

class MemoriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('memories.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        auth()->user()->memories()->create($data);
        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(Memory $memory)
    {
        return view('memories.show', compact('memory'));
    }

    public function edit(Memory $memory)
    {
        $this->authorize('update', $memory->user_id->user());
        return view('memories.edit', compact('memory'));
    }

    public function update(Memory $memory)
    {

        $this->authorize('update', $memory->user_id->user());

        $data = request()->validate(
            [
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $memory->update($data);
        
        return redirect('/profile/' . auth()->user()->id);
    }
}
