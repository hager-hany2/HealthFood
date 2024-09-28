<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\web\ContactFromRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contactus');
    }

    public function save(ContactFromRequest $request)
    {
//        create in table save data
        Contact::query()->create($request->validated());
//        end create in table
        return redirect()->back()->with('success', ' message sent success');
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
    public function store(Request $request)
    {
        //
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
