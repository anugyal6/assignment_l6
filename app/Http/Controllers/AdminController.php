<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}  
     