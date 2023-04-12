<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests;
use App\User;


class UsersController extends Controller
// {


{
  public function __construct()
  {
      $this->middleware('guest');
  }

  public function users ()
  {
      $this->middleware('auth');
  }

    public function index(){
      $title = "Users";
      $User_list = User::all();
      return view('Users.index', compact('title', 'User_list'));
    }

    public function create()
    {

      $title = "Add Users";
      return view('Users.create', compact('title'));
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:5|confirmed',
      ]);

      $users = new \App\User;
      $users->name = $request->name;
      $users->email = $request->email;
      $users->password = $request->password;
      $users->remember_token = str_random(60);



      $users->save();
      return redirect ('Users');
    }


    public function destroy($id)
    {
        $users = User::find($id);

        $users->delete();
        return redirect('Users');
    }

    public function edit($id)
    {
      $title = "Edit Data User";
      $users = User::findOrFail($id);
      return view('Users.edit', compact('title','users'));
    }

    public function update($id, Request $request)
    {

      $users = User::findOrFail($id);



      $input = $request->all();




      $users->update($input);
      return redirect('Users');
    }

}
