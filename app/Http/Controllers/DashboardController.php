<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard', [
            'title'=>'Dashboard',
            'user' => user::get()
        ]);
    }

    public function user(){
        return view('user.dashboard', [
            'title'=>'Dashboard',
            'user' => user::get()
        ]);
    }
}
