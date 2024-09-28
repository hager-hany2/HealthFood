<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $users = Contact::query()->orderBy('id', 'DESC')->paginate(3);
        $data = ContactResource::collection($users);
        return view('Admin.ShowContact')->with(['data' => $users]);
    }
}
