<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User as Users;

class UserController extends Controller
{

//GetLogin 
public function getLogin(){

  if (Auth::check()) {
    return redirect()->route('users');
  }else{
   return view('login');
  }
}


// Register 
    
public function register(Request $request){

   $this->validate($request, [
     'email' => 'required|email|unique:users',
     'firstName' => 'required|max:120',
     'lastName' => 'required|max:120',
     'password' => 'required|confirmed'
   ]);

    
    $user = new Users();
  
    $user->firstName = $request['firstName'];
    $user->lastName = $request['lastName'];
    $user->email = $request['email'];
    $user->password =bcrypt($request['password']); 


    if($user->save()){
        $message ="New User Registered";
        return redirect()->route('register')->with(['message'=>$message]);
    } else{
        $error = "Somthing went wrong";
        return redirect()->route('register')->with(['error'=>$error]);
    }


    }

// Login
  
  public function login(Request $request ){

    $this->validate($request,[
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if(Auth::attempt(['email' => $request['email'], 'password'=> $request['password'] ])){
      return redirect()->route('users');
   
    } else{
      $error ="Please Check your Username and Password";
      return redirect()->back()->with(['error'=>$error]);
    }
      
  }

  //Update User view
  function updateUser($id){
    if(isset($id)){
        $users =  Users::find($id);
        return view('updateUser', array('users'=>$users));
    }
  }


  //Post Update User 
  function postUpdateUser(Request $request){

    $this->validate($request,[
      'email' => 'required|email',
      'firstName' => 'required|max:120',
      'lastName' => 'required|max:120'
    ]);

    $id = $request['id'];
    $user = Users::find($id);

    $user->firstName = $request['firstName'];
    $user->lastName = $request['lastName'];
    $user->email = $request['email'];

    if($user->update()){
        $message ="User Updated";
        return redirect()->back()->with(['message'=>$message]);
    }else{
      $error ="Somthing went wrong!";
      return redirect()->back()->with(['error'=>$error]);
    }

  }


  // Get Users 

  public function getUsers(Request $request){
        $users =  Users::all();
        return view('users', array('users'=>$users));
    }


  public function getLogout(){
      Auth::logout();
      $message ="Thank you..! Come Again.";
      return view('login')->with(['message'=>$message]);
    }

}
