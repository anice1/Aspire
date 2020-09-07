<?php

namespace App\Http\Controllers\controls\schools;
use App\Http\Controllers\controls\Controller;

use App\User;
use App\Student;
use App\traits\UploadTrait;
use Request;
use Str;
use Hash;

class StudentController extends Controller
{
    use UploadTrait;
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
        
        $this->middleware('schooladmin');

        $this->middleware('auth');


    }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $students = User::find(auth()->user()->id)->school->students;

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
            'address' => 'required',
            'bio' => 'required',
            'phone' => 'required',
            'guardian' => 'required',
            'guardian_phone' => 'required',
            'guardian_email' => 'required',
            'guardian_occupation' => 'required',
            'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);
        $username = Request::input('firstname').' '.Request::input('lastname');
        $user = User::create(['username'=>$username, 'email'=>Request::input('email'), 'password' =>Hash::make(Request::input('password'))]);
        $user->assignRole('student');

        if ($request::has('profile_image')) {
            // Get image file
            $image = $request::file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request::input('lastname')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->student()->profile_image = $filePath;
        }


        $student = new Student(['user_id'=>$user->id,
                                'dob'=>Request::input('dob'), 
                                'gender'=>Request::input('gender'),
                                'firstname'=>Request::input('firstname'),
                                'lastname'=>Request::input('lastname'), 
                                'class'=>Request::input('class'),
                                'address'=>Request::input('address'), 
                                'bio'=>Request::input('bio'), 
                                'phone'=>Request::input('phone'), 
                                'guardian'=>Request::input('guardian'), 
                                'guardian_phone'=>Request::input('guardian_phone'), 
                                'guardian_email'=>Request::input('guardian_email'), 
                                'guardian_occupation'=>Request::input('guardian_occupation')
                                
                                ]);

        $school = User::findOrfail(auth()->user()->id)->school;
        $school->students()->save($student);

        return redirect()->route('school.students.index')

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
     * @param Request $request
     * @param Student $student
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $student)

    {

        request()->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'class' => 'required',
            'address' => 'required',
            'bio' => 'required',
            'phone' => 'required',
            'guardian' => 'required',
            'guardian_phone' => 'required',
            'guardian_email' => 'required',
            'guardian_occupation' => 'required',

        ]);

        $user = Student::find($student)->user;
        $student = Student::find($student);
       // return $student
        $user->update(Request::only('firstname', 'lastname' , 'email', 'password'));
        $student->update(Request::only('dob', 'gender', 'class', 'address', 'bio','phone', 'guardian', 'guardian_phone', 'guardian_email', 'guardian_occupation'));


        return redirect()->route('students.index')

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

