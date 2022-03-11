<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->get();
        return view("sales.profiles.index", ['profiles' => $profiles]);
    }

    public function create()
    {
        return view("sales.profiles.create");
    }

    public function product_details()
    {
        return view("sales.profiles.profile_details");
    }

    public function uploadImage($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        Image::make($file)
            ->resize(200, 200)
            ->save(storage_path() . '/app/public/images/' . $fileName);
        return $fileName;
    }
    public function store(Request $request)
    {



        try {

            $imageValidationRule = 'image|mimes:png,jpg,jpeg,gif|max:10000';
            // dd($request->isMethod('post'));
            if ($request->isMethod('post')) {
                $imageValidationRule = 'required|' . $imageValidationRule;
            }
            $request->validate([
                'user_name' => 'required',
                'user_phone' => 'required',

                
            ]);

            Profile::create([
                'user_name' => $request->user_name,
                'user_email' => $request->user_email,
                'user_phone' => $request->user_phone,
                'user_address' => $request->user_address,
                'user_id'=> $request->user_id,
                // 'user_' => $request->box_quantity,
                'user_picture' => $this->uploadImage(request()->file('user_picture')),
            ]);

            // $request->session()->flash('message', 'Task was successful!');
            return redirect()->route('profiles.index')->withMessage('Successfully Created!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
            // dd($e->getMessage());
        }
    }

    public function show(profile $profile)
    {
        return view('sales.profile.show', [
            'profile' => $profile
        ]);
    }

    public function edit(Profile $profile)
    {
        // $profile = profile::find($id);
        return view('sales.profile.edit', [
            'profile' => $profile
        ]);
    }

    public function update(Request $request, profile $profile)
    {
        try {
            $request->validate([
                'user_name' => 'required',
                'user_phone' => 'required',
                
                
                

            ]);

            $requestData = [
                'user_name' => $request->user_name,
                'user_email' => $request->user_email,
                'user_phone' => $request->user_phone,
                'user_address' => $request->user_address,
                'user_picture' => $request->user_picture,
                
                
            ];

            if ($request->hasFile('user_picture')) {
                $requestData['user_picture'] = $this->uploadImage(request()->file('user_picture'));
            }

            $profile->update($requestData);

            // $request->session()->flash('message', 'Task was successful!');
            return redirect()->route('profiles.show', ['profile' => $profile->id])->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
            // dd($e->getMessage());
        }
    }

    public function destroy(Profile $profile)
    {
        // $profile = profile::find($id);
        $profile->delete();
        return redirect()->route('profiles.index')->withMessage('Successfully Deleted!');
    }

    public function search(Request $request)
    {
        $profiles = profile::where('name', 'like', '%' . $request->search . '%')->get();
        return view('sales.profiles.index', [
            'profiles' => $profiles
        ]);
    }



}
