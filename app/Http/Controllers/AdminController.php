<?php

namespace App\Http\Controllers;
use  App\Models\consult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



use App\Models\worker;


class AdminController extends Controller
{
 public function uploadview(){
    return view ('admin.add_worker');
 }
 public function upload(Request $request)
 {
$worker   = new worker;
$image =$request-> file; //get image file 

$imagename=time().'.'.$image->getClientOriginalExtension(); //whenerver we upload image it will have diff name depending on this time function
$request->file->move('imageworker',$imagename); //it will save image in the folder
$worker->image=$imagename; // we are calling image name in doctor table equal to image name 
   
$worker->name=$request->name;
   $worker->phoneno=$request->number;
   $worker->specialist = $request->specialist;
   $worker-> save();
   return redirect()->back()->with('message','Hello! admin you have added Sucessfully');
}
public function consult(Request $request){
   $data= new consult;
   $data->name=$request->name;
   $data->email=$request->email;
   $data->date=$request->date;
   $data->phone=$request->number;
   $data->specialist=$request->departement;
   $data->message=$request->message;
   $data->status='In Progress';

   if(Auth::id())
   {

    $data->user_id=Auth::user()->id ;
   }
   $data->save();
   return redirect()->back()->with('message','Congratulations!!! For appointment');
 }
public function showcancel(){
   $data=consult::all();
   return view ('admin.showapp',compact('data'));
}
public function confirm($id){
   $data = consult::find($id);
   $data->status='confirm';
   $data->save();
   return redirect()->back();
}
}  
     