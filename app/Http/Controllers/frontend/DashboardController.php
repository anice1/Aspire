<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all()->count();

        if(Auth::user()->hasRole('school')){
            return view('frontend.schooladmin.welcome');
        }elseif(Auth::user()->hasRole('student')){
            return view('frontend.student.index');
        }elseif(Auth::user()->hasRole('teacher')){
            return view('frontend.Teacher.index');
        }else{
            return "i Dont understand the logic bro";
        }
    }
}
