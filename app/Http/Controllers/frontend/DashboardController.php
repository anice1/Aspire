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

        if(Auth::user()->hasRole('school'))
        {
            return view('frontend.schooladmin.welcome');

        }elseif(Auth::user()->hasRole('student'))
        {
            return view('frontend.student.index');

        }elseif(Auth::user()->hasRole('teacher'))
        {

            return view('frontend.Teacher.index');

        }elseif(Auth::user()->hasRole('admin'))
        {

            return view('frontend.superadmin.welcome');

        }else
        {
            return "Remember those walls I built
                    Well, baby, they're tumbling down
And they didn't even put up a fight
They didn't even make a sound
I found a way to let you win
But I never really had a doubt
Standing in the light of your halo
I got my angel now";
        }
    }
}
