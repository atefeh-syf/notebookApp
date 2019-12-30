<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Memory;
use \App\User;
use PhpParser\Builder\Use_;

class MemoriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $memories = Memory::all();
        return view('memories.showMemories')->with(('memories'),  auth()->user()->memories);

        // $user = auth()->user()->memories()->index();
        // return view('memories.showMemories', compact('user'));
        // $user = User::findOrFail($user);
        // return view('memory.showMemories', compact('user'));
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
        return redirect('/m');

        //return redirect('/profile/' . auth()->user()->id);
    }

    public function show(Memory $memory)
    {
        return view('memories.show', compact('memory'));
        
    }

    public function edit(Memory $memory)
    {
        //$this->authorize('update', $memory->user_id->user());
        return view('memories.edit', compact('memory'));
    }

    public function update(Memory $memory)
    {

        $user = User::findOrFail($memory->user_id);
        //$this->authorize('update', $memory->user_id == $user_>id );

        $data = request()->validate(
            [
                'title' => 'required',
                'description' => 'required',
            ]
        );
        $memory->update($data);

        return redirect('/m');
    }

    public function destroy(Memory $memory)
    {
        $memoryInfo = Memory::findOrFail($memory->id);
        //dd(auth()->user()->memories()->$memoryInfo);
        //auth()->user()->memories()->$memoryInfo->delete($memoryInfo->id);
        $memoryInfo->delete($memoryInfo->id);
        return redirect('/m');  
    }
}
