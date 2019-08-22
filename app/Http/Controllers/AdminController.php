<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicine;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }
    public function Medicine()
    {
      $medicines=medicine::get()->toArray();
      return view('Medicine',['medicines'=>$medicines]);
    }

    public function medicineSubmit(Request $request)
    {
       $data=$request->all();
      if (!empty($data)) {
      try{
        // DB::table('users')->insert(['pname'=>$data['pname'],'pemail'=>$data['email'],'pcontact'=>$data['mob_no'],'ppassword'=>$data['password']]);
           $medicine=new medicine();
           $medicine->mname=$data['mname'];
           $medicine->mcompany=$data['mcompany'];
           $medicine->mprice=$data['mprice'];
           $medicine->mquantity=$data['mquantity'];
           $medicine->mtype=$data['mtype'];
           $medicine->save();

           //$doctor=new doctor();
          // $doctor->doctor=$data[]
          // User::create(['pname'=>$data['pname'],'pemail'=>$data['email'],'pcontact'=>$data['mob_no'],'ppassword'=>$data['password']]);

       }catch(Exception $e)
       {
         $request->session()->flash('alert-danger', 'Insertion failed!');
         return redirect()->back();
       }
       $medicine=medicine::get()->toArray();
       $request->session()->flash('alert-success', 'Data added successfully!');

       return redirect()->back();
      }
      else {
           return redirect()->back();
      }
    }
}
