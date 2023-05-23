<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardView(){
        return view('backend.dashboard.dashboard');
    }
    public function profileView(){
        return view('backend.profile.profile');
    }
}
