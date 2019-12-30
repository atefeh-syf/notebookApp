<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class ProfilesController extends Controller
{
    //
    public function show($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.show', compact('user'));
    }
}
