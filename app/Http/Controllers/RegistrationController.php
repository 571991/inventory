<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller {

    public function registration() {
        return view('pages.registration');
    }
    
    public function store(Request $request) {
        $name=$request->get('name');
        $mobile=$request->get('mobile');
         $email=$request->get('email');
        $address=$request->get('address');
        $image=$request->get('image');
        $type=$request->get('type');
        $password=$request->get('password');
        $confirmpass=$request->get('confirmpass');
        $errors=array();
        
        if (empty($name)) {
            $errors[] = "Name is required";
        }
        if (empty($mobile)) {
            $errors[] = "Mobile number is required";
        }else{
            if (strlen($mobile) != 11) {
                return redirect()->back()->with('error', 'Phone number length must be 11');
            } else if (!is_numeric($mobile)) {
                return redirect()->back()->with('error', 'Phone number length must be 11');
            }
            
        }
        
        if (empty($email)) {
            $errors[] = "Email is required";
        }else{
            
                if (!filter_var($email,FILTER_VALIDATE_EMAIL) === true) {
                    return redirect()->back()->with('error', 'Email format is incorrect');
                } else {
                    $checkExistsEmail = User::where('email',$email )->exists();
                    if ($checkExistsEmail) {
                        return redirect()->back()->with('error', 'Email already exists');
                    }
                }
            
        }
        
        if (empty($type)) {
            $errors[] = "Type is required";
        }
        
        if (empty($password)) {
            $errors[] = "Password is required";
        }
        
        if (empty($confirmpass)) {
            $errors[] = "Confirm password is required";
        }
        
        if(strlen($password) > 6){ 
            $errors[] = "Password must be at least 6 character";
        }
        
        if($password != $confirmpass){ 
            $errors[] = "Password does not match";
          }
          
        if(count($errors) > 0){
           return redirect()->back()->withErrors($errors)->with('errorArray', 'Array Error Occured');
        }
        
        
    }

}
