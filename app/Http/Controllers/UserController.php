<?php

namespace App\Http\Controllers;

use App\PersonalInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function register(Request $request) {

        $check_username = User::where('username',$request->username)->first();
        $check_email = User::where('email',$request->email)->first();
        if (!empty($check_username)) {
            return response()->json(['status' => false,'msg' => "Sorry, it looks like
                            <strong>".$request->username."</strong> belongs to an existing account"]);
        }
        elseif (!empty($check_email)) {
            return response()->json(['status' => false,'msg' => "Sorry, it looks like
                            <strong>".$request->email."</strong> belongs to an existing account"]);
        }
        else
        {
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->username = $request->username;
            $user->gender = $request->gender;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->privacy_agree = $request->privacy_agree;
            $save_data = $user->save();
            if ($save_data) {
               $this->login($request->email,$request->password);
            }
        }
    }
    public function login($email,$password) {

//        return $password = bcrypt($request->password);

        if (Auth::attempt(['email' => $email,'password' => $password])) {
            return response()->json([
                'msg' => 'You are logged in',
                'status' => true
            ]);
        }else {
            return response()->json([
                'msg' => 'Incorrect Login Detail',
                'status' => false
            ]);
        }
    }
    public function update_user(Request $request) {
        $user_id = Auth::user()->id;
        $user = new PersonalInfo();
        $user->user_id = $user_id;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->hometown = $request->hometown;
        $user->work_title = $request->work_title;
        $user->work_place = $request->work_place;
        $user->work_url = $request->work_url;
        $user->edu_major = $request->edu_major;
        $user->edu_school = $request->edu_school;
        $user->edu_class = $request->edu_class;
        $user->save();
        return redirect('login_user');
    }
    public function users_list() {
        $users = User::get();
        return view('admin.users_list', ["users" => $users]);
    }

    public function edit_user(Request $request) {
        return $request->all();
        $users = User::get();
        return view('admin.users_list', ["users" => $users]);
    }

    public function delete_user() {
        $users = User::get();
        return view('admin.users_list', ["users" => $users]);
    }

}
