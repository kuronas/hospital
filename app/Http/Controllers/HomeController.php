<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;

class HomeController extends Controller
{
   public function redirect ()
   {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();

                return view('user.home',compact('doctor'));
            }

            else
            {
                return view('admin.home');
            }
        }
        else{
                return redirect()->back();
        }
   }

   public function mydoctor()
   {
    $doctor = doctor::all();

    return view('user.my_doctor',compact('doctor'));
   }

   public function mycontact()
   {
    $doctor = doctor::all();

    return view('user.my_contact',compact('doctor'));

   }

   public function index()
   {

    if(Auth::id())
    {
         return redirect('home');
    }
    else

    {
    $doctor = doctor::all();

    return view('user.home',compact('doctor'));
    }
   }


   public function appointment(Request $request) 
   {

    $data = new appointment;

    $data->name=$request->name;

    $data->email=$request->email;

    $data->date=$request->date;

    $data->phone=$request->number;

    $data->doctor=$request->doctor;

    $data->message=$request->message;

    $data->status='In Progress';

    if(Auth::id())
{
    $data->user_id=Auth::user()->id;

}
else{
    return redirect()->back()->with('message','Please Login To Make An Appointment');
}
    $data->save();

    return redirect()->back()->with('message','Appointment Request Successfully .
    We will contact with you soon');

 
   }


   public function myappointment()
   {

    if(Auth::id())
    {
            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();

        return view('user.my_appointment',compact('appoint'));
    }
    else{
        return redirect()->back();
    }

   

   }

   public function cancel_appoint($id)
   {

    $data=appointment::find($id);

    $data->delete();

    return redirect()->back();

   }


   public function myservice()
   {

    return view('user.my_service');

   }


   public function myabout()
   {

    return view('user.my_about');

   }







}

