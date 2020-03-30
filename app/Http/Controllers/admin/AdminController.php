<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Gender;

class AdminController extends Controller
{
    protected $User;
    protected $Gender;

    public function __construct(
        User $user,
        Gender $gender
    ){
        $this->user = $user;
        $this->gender = $gender;
    }

    public function index(){
        return view('admin.layout.admin');
    }

    public function login(){
        return view('admin.login');
    }

    public function postlogin(Request $req){
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function signup(){
        return view('admin.signup');
    }

    public function postsignup(Request $request){

        user::create([
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'first_name'    => $request->firstname,
            'last_name'     => $request->lastname,
            'gender_id'     => $request->sex,
            'address'       => $request->address,
            'tel'           => $request->tel
        ]);
        return redirect()->route('admin.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
