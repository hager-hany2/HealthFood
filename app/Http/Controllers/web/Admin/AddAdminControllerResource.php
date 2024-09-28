<?php

namespace App\Http\Controllers\web\Admin;

use App\Actions\ImageModelSave;
use App\Http\Controllers\Controller;
use App\Http\Requests\web\Admin\AddAdminFromRequest;
use App\Models\Contact;

//use App\Services\Admin\SaveAdminInfoServices;
use App\Services\Admin\SaveAdminInfoServices;
use App\Services\Admin\SaveProductInfoServices;
use App\Services\users\SaveUserInfoServices;
use App\traits\upload_images;


use App\Models\user;
use Illuminate\Http\Request;

class AddAdminControllerResource extends Controller
{

    use upload_images;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Admin.AddAdmin');
    }

    public function save(AddAdminFromRequest $request)
    {
        $data = $request->validated();
        $data['type'] = 'admin';
        $file = request()->file('image');
        if ($file == null) {
            $image_name = 'default.svg.png';
        } else {
            $image_name = $this->upload($file, 'users');//return folder and name
        }

        $user = SaveUserInfoServices::save($data);
        ImageModelSave::make($user->id, 'user', $image_name);
        // dd($data);


        return redirect()->back()->with('success', ' Add Admin success');
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
