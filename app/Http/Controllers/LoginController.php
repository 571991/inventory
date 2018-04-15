<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('pages.index');
    }
    
    //this method is used for authentication
     public function authenticate(Request $request){
        $email=$request->get('email');
        $password=$request->get('password');
        $errors=array();
        if (empty($email)) {
            $errors[] = "Email is required";
        }
        if (empty($password)) {
            $errors[] = "Password is required";
        }
        if(count($errors) > 0){
           return redirect()->back()->withErrors($errors)->with('errorArray', 'Array Error Occured');
        }else{
             if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'),'status' => 'Active'])) {
                 return view('pages.dashboard');
             }else{
                 $errors[] = "Invalid user email or password ";
                  return redirect()->back()->withErrors($errors)->with('errorArray', 'Array Error Occured');
             }
        }
         
        
    }
    
}
