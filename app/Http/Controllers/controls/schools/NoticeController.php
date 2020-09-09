<?php

namespace App\Http\Controllers\controls\schools;

use App\User;
use App\School;
use App\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
        $this->middleware('schooladmin');
    }


    public function index(){
        $notices = User::find(auth()->user()->id)->school->notice;
        return view('frontend.schooladmin.notice.index', compact('notices'));
    }

    public function create(){
        return view('frontend.schooladmin.notice.create');
    }

    public function store(Request $request){
        $notice = new Notice(['title'=>$request->title,
                                'message'=>$request->message,
                                'postedBy'=>$request->postedby]);
        
                                $school = User::find(auth()->user()->id)->school;
                                $school->notice()->save($notice);
        return redirect()->back()->with('success','Notice Posted Successfully');
    }

    public function show($id){

    }

    public function edit(Request $request, $id){

    }

    public function destroy($id){

    }

}
