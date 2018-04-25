<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller {

    public function registration() {
        return view('pages.registration');
    }

    public function checkMobile(Request $request) {
        $mobile = $request->get('mobile');
        return $mobile;
        
        $isExists = User::where('mobile', $mobile)->exists();
        if ($isExists) {
            $response = array("output" => "exists");
            return response()->json($response);
        } else {
            $response = array("output" => "available");
            return response()->json($response);
        }
    }

    public function checkEmail(Request $request) {
        $email = $request->get('email');
        $isExists = User::where('email', $email)->exists();
        if ($isExists) {
            $response = array('output' => 'exists');
            return response()->json($response);
        } else {
            $response = array('output' => 'available');
            return response()->json($response);
        }
    }

    public function store(Request $request) {
        $name = $request->get('name');
        $mobile = $request->get('mobile');
        $email = $request->get('email');
        $address = $request->get('address');
        $image = $request->file('image');
        $type = $request->get('type');
 
        $password = $request->get('password');
        $confirmpass = $request->get('confirmpass');
        $errors = array();
        
        /*
             * Checking user moble number validation 
             */
            $number = ['011', '015', '016', '017', '018', '019'];
            $mobleNumber = str_split($mobile, 3);
            $mobleNumber[0];

            if (!in_array($mobleNumber[0], $number)) {
                $errors[] = "Mobile number format is incorrect";
                
            }
            

        if (empty($name)) {
            $errors[] = "Name is required";
        }
        if (empty($mobile)) {
            $errors[] = "Mobile number is required";
        } else {
            if (strlen($mobile) != 11) {
                $errors[] = "Mobile number length must be 11 digit";
//                return redirect()->back()->with('error', 'Phone number length must be 11 digit');
            } else if (!is_numeric($mobile)) {
                $errors[] = "Mobile number  must be numeric";
//                return redirect()->back()->with('error', 'Phone number  must be numeric');
            } 
             else {
                $checkExistsMobile = User::where('mobile', $mobile)->exists();
                if ($checkExistsMobile) {
                    $errors[] = "Mobile already exists";
                }
            }
        }

        if (empty($email)) {
            $errors[] = "Email is required";
        } else {

            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true) {
                $errors[] = "Email format is incorrect";
//                    return redirect()->back()->with('error', 'Email format is incorrect');
            } else {
                $checkExistsEmail = User::where('email', $email)->exists();
                if ($checkExistsEmail) {
                    $errors[] = "Email already exists";
//                        return redirect()->back()->with('error', 'Email already exists');
                }
            }
        }

        //image validation start
        if ($_FILES['image']['name']) {
            /*
             * check file type
             */
            $allowed = array('jpeg', 'png', 'jpg', 'gif', 'JPEG', 'PNG', 'JPG', 'GIF');
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
                $errors[] = "File extension must be jpeg,jpg,png";
//                        return redirect()->back()->withInput()->with('error', 'File extension must be jpeg,jpg,png');
            } else {
                $requestImage = $request->file('image');
                $img_size = filesize($requestImage) / 1024;
                if ($img_size > 5000) {
                    $errors[] = "Image Size must be less than 5MB";
                } else {
                    $imageName = date('YmdHis') . '.' . $request->image->getClientOriginalExtension();
                    $request->image->move(('images/image'), $imageName);
//                        $obj->image = $imageName;
                }
            }
        }


        //image validation end

        if (empty($type)) {
            $errors[] = "Type is required";
        }

        if (empty($password)) {
            $errors[] = "Password is required";
        } elseif (strlen($password) < 6) {
            $errors[] = "Password must be at least 6 character";
        }

        if (empty($confirmpass)) {
            $errors[] = "Confirm password is required";
        }



        if ($password != $confirmpass) {
            $errors[] = "Password does not match";
        }

        if (count($errors) > 0) {
            return redirect()->back()->withInput()->withErrors($errors)->with('errorArray', 'Array Error Occured');
        } else {
            $dataList = new User();
            $dataList->name = $name;
            $dataList->mobile = $mobile;
            $dataList->email = $email;
            $dataList->address = $address;
            $dataList->image = $image;
            $dataList->type = $type;
            $dataList->password = bcrypt($password);
            $dataList->save();
            return redirect('registration')->with('success', 'Information save successfully');
        }
    }

}
