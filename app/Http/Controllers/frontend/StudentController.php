<?php

namespace App\Http\Controllers\frontend;

use App\User;
use App\Student;

use Request;


class StudentController extends Controller
{
    /**

     * Display a listing of the res ource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

        $this->middleware('permission:student-list');

        $this->middleware('permission:student-create', ['only' => ['create','store']]);

        $this->middleware('permission:student-edit', ['only' => ['edit','update']]);

        $this->middleware('permission:student-delete', ['only' => ['destroy']]);

    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $students = Student::latest()->paginate(14);

        return view('frontend.schooladmin.students.allstudents',compact('students'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('frontend.schooladmin.students.create');

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
            'lastname' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'password' => 'required|same:confirm-password',
            'class' => 'required',
            'phone' => 'required',
            'guardian' => 'required',
            'guardian_phone' => 'required',
            'guardian_email' => 'required',
            'guardian_occupation' => 'required',

        ]);


        $user = User::create(Request::only('firstname', 'lastname' , 'email', 'password'));
        $user->assignRole('student');

        $user->Student()->create(Request::only('dob', 'gender', 'class', 'phone', 'guardian', 'guardian_phone', 'guardian_email', 'guardian_occupation'));


        return redirect()->route('frontend.schooladmin.students.allstudents')

            ->with('success','Student created successfully.');

    }


    /**

     * Display the specified resource.

     *

     * @param  \App\Student  $student

     * @return \Illuminate\Http\Response

     */

    public function show($student)

    {
        $student = Student::find($student);
//        return $student;
        return view('frontend.student.profile',compact('student'));

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

