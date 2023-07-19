<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donorform;
use App\Models\Requests;

class AdminController extends Controller
{
    public function Index()
    {
        return view('backend.admin.dashboard');
    }
   
    public function  Donor()
    {
        $donors = Donorform::all();
        return view('backend.admin.donor',  compact('donors'));     
    }
    public function  Request()
    {
        $requests = Requests::all();
        return view('backend.admin.requestlist',  compact('requests'));      
    }

}
