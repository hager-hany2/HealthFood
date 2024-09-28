<?php

namespace App\Http\Controllers\web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\web\Admin\ServicesFormRequest;
use App\Http\Requests\web\ContactFromRequest;
use App\Models\Contact;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.AddServices');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesFormRequest $request)
    {
        // create in table save data
        $service = Services::query()->create($request->validated());
//        end create in table
        return redirect()->back()->with('success', ' Add Services success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
