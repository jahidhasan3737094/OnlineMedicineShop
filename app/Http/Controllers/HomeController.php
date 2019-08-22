<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $users=User::get()->toArray();
        return view('home',['users'=>$users]);
    }

    public function editInfo($id)
    {
     // echo $id; die;
      // code...
      $userdata=User::where('id',$id)->first()->toArray();


      //$id=convert_uudecode(base64_decode($id));
     // $userdata=DB::table('patients')->where('pid',$id)->first();
      //$userdata=json_decode(json_encode($userdata),true);
      return view('editInfo',['userdata'=>$userdata]);
    }
    public function updateUser(Request $request)
     {
        $data=$request->all();
        //echo "<pre>";
        //print_r($data);
        //die;

   try{
          User::where('id',$data['id'])->update(['name'=>$data['name'],'email'=>$data['email'],'contact'=>$data['contact']]);
       // DB::table('patients')->where('id',$data['pid'])->update(['pname'=>$data['pname'],'pemail'=>$data['email'],'pcontact'=>$data['mob_no']]);
        $request->session()->flash('alert-success','User info updated successfully!');
      }catch(\Exception $e)
      {
        $request->session()->flash('alert-danger','failed');
      }
      return redirect()->to('/home');

     }

}
