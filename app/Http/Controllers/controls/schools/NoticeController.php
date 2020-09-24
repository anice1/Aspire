<?php

namespace App\Http\Controllers\controls\schools;

use App\User;
use App\School;
use App\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\Messages;
use Auth;

class NoticeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('schooladmin');
    }
    public $notice;


    public function index(){
        $notices = Auth::user()->notices;
        return view('frontend.schooladmin.notice.index', compact('notices'));
    }

    public function create(){
        return view('frontend.schooladmin.notice.create');
    }

    public function store(Request $request){

        request()->validate([
            'title'     => 'required|max:80',
            'postedby'  => 'required|max:30',
            'message'   => 'required|max:2048',
        ]);
        $notice = new Notice(['title'=>$request->title,
                                'message'=>$request->message,
                                'postedBy'=>$request->postedby]);
        
                                $user = User::find(auth()->user()->id);
                                $user->notices()->save($notice);
        $students = Auth::user()->school->students;
        foreach($students as $student){
            $student->user->notify(new Messages($notice));
        }
        return redirect()->back()->with('success','Notice created successfully');
    }

    public function show($id){

    }

    public function edit(Request $request, $id){

    }

    public function destroy($id){

    }

}
