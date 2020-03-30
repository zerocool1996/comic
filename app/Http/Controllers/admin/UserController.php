<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use App\Gender;

class UserController extends Controller
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

    public function show(){
        $users = $this->user->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function destroy($id){
        $user = $this->user->findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success_msg', 'Delete Success !');
    }

    public function add(){
        return view('admin.user.add');
    }
    public function create(UserRequest $request){
        user::create([
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'first_name'    => $request->firstname,
            'last_name'     => $request->lastname,
            'gender_id'     => $request->gender,
            'address'       => $request->address,
            'tel'           => $request->tel
        ]);
        return redirect()->back()->withInput($request->flash())->with('success_msg', 'Add User Success !');
    }

    public function edit($id){
        $user = $this->user->findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserRequest $request, $id){
        $user = $this->user->findOrFail($id);
        $user->update([
            'email'         => $request->email,
            'first_name'    => $request->firstname,
            'last_name'     => $request->lastname,
            'gender_id'     => $request->gender,
            'address'       => $request->address,
            'tel'           => $request->tel
        ]);
        return redirect()->back()->withInput($request->flash())->with('success_msg', 'Update User Success !');
    }
}
