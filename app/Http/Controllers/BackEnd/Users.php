<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Users extends BackEndController
{
    public function index()
        {
            $users = User::paginate(4);
            return view('back-end.users.index', compact('users'));
        }
    public function create()
        {
            return view('back-end.users.create');
       
        }
    
    public function store()
    {

    }

    public function edit()
        {
            return view('back-end.users.edit');
       
        }

    public function update()
    {

    }

    public function delete()
    {

    }
}
