<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class profile_Controller extends Controller
{
    // Create index
    public function index(){
        $data['profiles'] = profile::orderBy('id', 'desc')->paginate(5);
        return view('profiles.index', $data);
    }

    // Create resource
    public function create(){
        return view('profiles.create');
    }

    //store resource
    public function store(Request $REQUEST){
        $REQUEST->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $profile = new Profile;
        $profile->firstname = $REQUEST->firstname; 
        $profile->lastname = $REQUEST->lastname; 
        $profile->email = $REQUEST->email; 
        $profile->phone = $REQUEST->phone;
        $profile->save();
        return redirect()->route('home')->with('success', 'profile has been saved success');

    }
}
