<?php

namespace App\Http\Controllers\frontend;

use App\User;
use App\Student;
use App\traits\UploadTrait;
use Request;
use Str;


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
            'address' => 'required',
            'bio' => 'required',
            'phone' => 'required',
            'guardian' => 'required',
            'guardian_phone' => 'required',
            'guardian_email' => 'required',
            'guardian_occupation' => 'required',
            'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);


        $user = User::create(Request::only('firstname', 'lastname' , 'email', 'password'));
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
        $user->student()->create(Request::only('dob', 'gender', 'class', 'address', 'bio','phone', 'guardian', 'guardian_phone', 'guardian_email', 'guardian_occupation', 'profile_image'));

        return redirect()->route('students.index')

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
//        return $student;

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

