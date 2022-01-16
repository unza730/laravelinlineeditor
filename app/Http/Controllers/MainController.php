<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    //
    function login() {
        return view('auth.login');
    }
     function register() {
        return view('auth.register');
    }
     function save(Request $request) {
          // return $request->input();
         //validate requests
        $request->validate([
            'fname'=>'required',
             'lname'=>'required',
              'email'=>'required|email|unique:admins',
              'password'=>'required|min:5|max:20',
        ]);
        //insert data into database
        $admin = new Admin;
        $admin->fname = $request->fname;
        $admin->lname = $request->lname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
         return back()->with('success', "New User has been Added Successfully!");
        }else{
            return back()->with('fail', 'something went wrong, try again later');
        }
        
    }
     function check(Request $request) {
        //   return $request->input()
        //validate request;
          $request->validate([
              'email'=>'required|email|',
              'password'=>'required|min:5|max:20',
        ]);
        $userInfo = Admin::where('email', '=', $request->email)->first();
          if(!$userInfo){
               return back()->with('fail', 'We do not recognize Your Email Address');
         }else{
             if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
             }else{
                 return back()->with('fail', "!Incorrect Password");
             }
            // return back()->with('success', "!");
       
        }
     }
     function dashboard(){
         return view('admin.dashboard');
     }
}

