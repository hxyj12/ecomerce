<?php

namespace App\Http\Controllers;

use App\Mail\email\welcome;
use App\Mail\welcome as MailWelcome;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //

     public function create(){
        return view("register");
    }

  public function register(Request $request){
    $formField=$request->validate([
      'name'=>['required','min:3'],
      'email'=>['required','email' ,Rule::unique('users','email')],
      'password'=>'required|confirmed|min:6'
    ]);

  $otp=rand(100000,999999); 
  $formField['password']=bcrypt($formField['password']);
  $formField['otp']=$otp ;
  $table = User::create($formField);
  Mail::to($table->email)->send(new MailWelcome($table));
  return redirect('/verify')->with('message','User created and logged in');
  }

  public function verifyForm(){
    return view('verify'); // 确保这个视图包含了提交 OTP 的表单
}


  public function verify(Request $request){
    $formField=$request->validate([
      'otp'=>['required'],
    ]);

    $otp = User::where("otp","=",$request->otp)->first();

    $date = new DateTime();

    if($otp){
      $otp->update([
        'email_verified_at' => $date->format('Y-m-d H:i:s')
      ]);
      //dd($otp);
      return redirect('/login')->with('message','User verified');
    }

    return redirect('/verify')->withErrors(['otp' => '无效的 OTP']);
  }

  public function loginpage(){
    return view('home');
  }

  public function login(Request $request){
    $formField=$request->validate([
      'email'=>['required','email'],
      'password'=>'required'
    ]);

    $user=Auth::attempt($formField);
    if ($user) {
      return redirect('/')->with('message','User logged in');
    }else{
      return redirect('/login')->with('message','Invalid credentials');
    } 
    
       
  }
}
