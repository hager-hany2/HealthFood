<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServicesResource;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesAdminController extends Controller
{
    public function service()
    {
        $services = Services::query()->orderBy('id', 'DESC')->paginate(4);
        $data = ServicesResource::collection($services);
        return view('Admin.ShowServices')->with(['data' => $services]);

    }
}
