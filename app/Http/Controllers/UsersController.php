<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
       $user = User::find($id);
        return $user-name;
    }

    public function index()
    {
//        return "hello";
        return view('users.index');
    }

}
