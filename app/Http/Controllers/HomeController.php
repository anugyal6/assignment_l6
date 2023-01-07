<?php

namespace App\Http\Controllers;

use App\Models\consult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;
use App\Models\worker;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id())
        {
if(Auth:: user()->usertype=='0'){
    $worker= worker::all();
    return view('user.home',compact('worker'));
}
else{
    return view('admin.home');
}
        }

        else{
            return redirect()-> back();
        }
    }
    public function index(Request $request)
    {
      
        if(Auth::id())
        {
return redirect('home'); //admin lai dashboard mai rakhxa 
        }else{
        $worker= worker::all();
        return view ('user.home', compact('worker'));

   
    }
$data= compact('workers','data');
}
public function  appointment(){
   if(Auth::id())
   {
    $userid =Auth::user()->id;
    $appoint=consult::where('user_id', $userid)->get();

    return view ('user.appointment', compact('appoint'));
} 

else
{

    return redirect()->back();
}


} //end appo
}
