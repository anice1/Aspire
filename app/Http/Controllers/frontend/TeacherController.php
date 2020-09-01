<?php

namespace App\Http\Controllers\frontend;

use App\Teacher;
use App\User;
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
    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        
        // return User::all();
        $teachers = Teacher::latest()->paginate(14);

        return view('frontend.schooladmin.teachers.all-teachers',compact('teachers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

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

        // User data seeding
        
        $user = User::create(['firstname'=>$request->firstname,'lastname'=>$request->lastname,
        'email'=>$request->email, 'password'=>Hash::make($request->password)]);
        $user->assignRole('teacher');
        $user->save();
    
        
        // Teacher data seeding

        $teacher = new Teacher;
        $teacher->user_id = $user->id;
        $teacher->gender = $request->gender;
        $teacher->dob = $request->dob;
        $teacher->blood_group = $request->blood_group;
        $teacher->religion = $request->religion;
        $teacher->class = $request->class;
        $teacher->address = $request->address;
        $teacher->phone = $request->phone;
        $teacher->bio = $request->bio;
        $teacher->save();
        
        return redirect()->back()->with('success','Teacher created successfully.');

    }


    /**

     * Display the specified resource.

     *

     * @param  \App\Student  $student

     * @return \Illuminate\Http\Response

     */

    public function show(Student $student)

    {

        return view('frontend.schooladmin.students.index',compact('student'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Student  $student

     * @return \Illuminate\Http\Response

     */

    public function edit(Student $student)

    {

        return view('frontend.schooladmin.students.edit',compact('student'));

    }


    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Student  $student

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Student $student)

    {

        request()->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'othernames' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'class' => 'required',
            'section' => 'required',

        ]);


        $student->update($request->all());


        return redirect()->route('frontend.schooladmin.students.index')

            ->with('success','Student updated successfully');

    }


    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Student  $student

     * @return \Illuminate\Http\Response

     */

    public function destroy(Student $student)

    {

        $student->delete();


        return redirect()->route('frontend.schooladmin.students.index')

            ->with('success','Student deleted successfully');

    }

}

