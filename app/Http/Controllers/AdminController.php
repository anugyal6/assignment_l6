<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function uploadview(){
    return view ('admin.add_worker');
 }
}
