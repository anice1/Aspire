<?php

namespace App\Http\Controllers\controls\schools;
use App\Http\Controllers\controls\Controller;


use App\Teacher;
use App\User;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**

     * Display a listing of the res ource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {
        $this->middleware('auth');
        $this->middleware('schooladmin');

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        
        $teachers = User::find(auth()->user()->id)->school->teachers;

        return view('frontend.schooladmin.teachers.all-teachers',compact('teachers'));

            // ->with('i', (request()->input('page', 1) - 1) * 5);

    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('frontend.schooladmin.teachers.create');

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        request()->validate([
            
            'firstname' => 'required',
            'lastname'  => 'required',
            'gender'    => 'required',
            'email'     =>  'required',
            'address'   =>  'required',
            'bio'       =>  'required',
            'password'  => 'required|min:8',
            'dob'       => 'required',
            'phone'     => 'required',        
        ]);

        // User data seeding
        
        $user = User::create(['username'=>$request->firstname.' '.$request->lastname,
        'email'=>$request->email, 'password'=>Hash::make($request->password)]);
        $user->assignRole('teacher');
        $user->save();
    
       
        // Teacher data seeding

        $teacher = new Teacher(['user_id'=>$user->id,
                                'gender'=>$request->gender,
                                'firstname'=>$request->firstname,
                                'lastname'=> $request->lastname,
                                'dob'=> $request->dob,
                                'blood_group'=>$request->blood_group,
                                'religion'=>$request->religion,
                                'class'=> $request->class,
                                'address'=>$request->address,
                                'phone'=>$request->phone,
                                'bio'=> $request->bio,
                                ]);
        
                                    $emp = User::findOrfail(auth()->user()->id)->school;
                                    $emp->teachers()->save($teacher);

        return redirect()->back()->with('success','Teacher created successfully.');

    }


    /**

     * Display the specified resource.

     *

     * @param  \App\Teacher  $teacher

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {
        $teacher = Teacher::findOrfail($id);
        return view('frontend.Teacher.profile',compact('teacher'));
    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Teacher  $teacher

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {
        $teacher = Teacher::find($id);
        return view('frontend.schooladmin.teachers.edit',compact('teacher'));

    }


    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Teacher  $teacher

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {
        request()->validate([
            'dob'       => 'required',
            'firstname' => 'required',
            'lastname'  => 'required',
            'phone'     => 'required',        
        ]);

        $teacher = Teacher::findOrfail($id);
        $teacher->update([
                'gender'=>$request->gender, 
                'dob'=> $request->dob,
                'blood_group'=>$request->blood_group,
                'religion'=> $request->religion,
                'class'=> $request->class,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'bio'=>$request->bio,
                'firstname'=>$request->firstname,
                'lastname'=>$request->lastname
            ]);

        return redirect()->back()->with('success','Record updated successfully.');

                
    }

    public function destroy(Request $request, $id)

    {

        $teacher = Teacher::findOrfail($id);
        $teacher->user->delete();
        $teacher->delete();
        return redirect()->back()->with('success','Teacher deleted successfully');

    }

}

