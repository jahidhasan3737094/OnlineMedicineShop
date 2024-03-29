<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:admin');
  }
    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:6'
      ]);
      //attempt to log user in
      if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
      {
         //if successfull ,then redirect to their intended openssl_get_cert_locations
         return redirect()->intended(route('admin.dashboard'));
      }
       return redirect()->back()->withInput($request->only('email','remember'));

    }
}
