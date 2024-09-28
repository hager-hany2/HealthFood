<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\user;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        $users = user::query()->with('image')->orderBy('id', 'DESC')->paginate(4);
        $data = UserResource::collection($users);
        return view('Admin.ShowUsers')->with(['data' => $users]);
    }
}
