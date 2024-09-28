<?php

namespace App\Http\Controllers;


use App\Http\Resources\ContactResource;

use App\Http\Resources\ServicesResource;
use App\Http\Resources\UserResource;
use App\Models\product;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Contact;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Auth;


class ServicesAboutController extends Controller
{
    public function services()
    {
        $services = Services::query()->orderBy('id', 'DESC')->paginate(4);
        $data = ServicesResource::collection($services);
        return view('About')->with(['data' => $services]);

    }


}
