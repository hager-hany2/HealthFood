<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user()->load('image');

        return view('Profile', compact('user'));
    }

}
