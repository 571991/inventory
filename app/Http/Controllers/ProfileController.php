<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ProfileController extends Controller
{
    public function profile(){
        return view('pages.profile');
    }
    
    public function updateProfile(){
        return view('pages.update_profile');
    }
    
    public function changePassword(){
        return view('pages.change_password');
    }
}
