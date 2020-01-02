<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Memory;
use \App\User;
use \Morilog\Jalali\Jalalian;
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
        $memories = auth()->user()->memories;
        foreach ($memories  as $key=>$memory) {
            $date=$memory->created_at;
            $date = Jalalian::forge($date)->format('Y-m-d');
            $memories[$key]['jalali']=$date;
        }
        return view('memories.showMemories')->with(('memories'), $memories);
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
    }

    public function show(Memory $memory)
    {
        if ($memory->user_id != auth()->user()->id) {
            $this->authorize('show',  $memory->user_id);
        }
        return view('memories.show', compact('memory'));
    }

    public function edit(Memory $memory)
    {
        if ($memory->user_id != auth()->user()->id) {
            $this->authorize('update',  $memory->user_id);
        }
        
        return view('memories.edit', compact('memory'));
    }

    public function update(Memory $memory)
    {

        if ($memory->user_id != auth()->user()->id) {
            $this->authorize('update',  $memory->user_id);
        }
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
        if ($memory->user_id != auth()->user()->id) {
            $this->authorize('destroy',  $memory->user_id);
        }
        $memoryInfo = Memory::findOrFail($memory->id);
        $memoryInfo->delete($memoryInfo->id);
        return redirect('/m');


        //dd(auth()->user()->memories()->$memoryInfo);
        //auth()->user()->memories()->$memoryInfo->delete($memoryInfo->id);
    }
}
