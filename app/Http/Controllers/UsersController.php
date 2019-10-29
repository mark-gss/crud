<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show()
    {
        $data = User::all();
        return response()->json(['data' => $data]);
    }

    public function index()
    {
        $data = User::all();
        return view('users_folder.users')->with(["data"=>$data]);
    }
}
