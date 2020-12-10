<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use ImageUploadAndResizer;

class UserController extends Controller
{

    public function index()
    {
        return view ('user.register');
    }


    public function view($id)
    {
        $user = User::find($id);
        $user->get();

        return view('user.view_user')->with(compact('user'));
    }


    public function store(Request $request)
    {

        $social = implode("-",$request->input('social'));
        //dd($social);
        $fileNameToDatabase = '//via.placeholder.com/250x250';
        if($request->hasFile('img')){
            $uploader = new ImageUploadAndResizer($request->file('img', '/images/photo'));
            $uploader->width = 350;
            $uploader->height = 350;
            $fileNameToDatabase = $uploader->execute();
        }

        $user = new User;
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->img = $fileNameToDatabase;
        $user->sex = $request->input('sex');
        $user->social = $social;
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();


       return redirect('user/list_user');
    }


    public function show()
    {
        $user = new User;
        $user =$user->get();


        return view('user.user_list')->with(compact('user'));


    }


    public function login(Request $request)
    {
        return view ('user.login');
    }


    public function login_user(Request $request)
    {
        $user_email = User::where('email', $request->email)->first();
        $user_pass = User::where('password', $request->password)->first();
        if(!empty($user_email) && !empty($user_pass)){
            return view ('user.welcome');
        }{
        return view ('user.logout');
    }
    }


    public function destroy($id)
    {
        //
    }
}
