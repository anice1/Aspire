<?php

namespace App\Http\Controllers\controls\superadmin;
use App\Http\Controllers\controls\Controller;


use App\School;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class SchoolController extends Controller
{

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
        $schools = School::latest()->paginate(10);
        return view('frontend.superadmin.schools.index',compact('schools'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.superadmin.schools.create');

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

            'school_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'password' => 'required|min:8|same:cpass',
            'school_address' => 'required|max:255',
            'owner_address' => 'required|max:255',
            'bio' => 'required|max:255',

        ]);

        // User data seeding
        
        $user = User::create(['username'=>$request->school_name,
                            'email'=>$request->email,
                            'password'=>Hash::make($request->password)
                            ]);
                            
        $user->assignRole('school');
        $user->save();

        $school = new School;
        $school->user_id = $user->id;
        $school->school_name = $request->school_name;
        $school->firstname = $request->firstname;
        $school->lastname = $request->lastname;
        $school->phone = $request->phone;
        $school->dob = $request->dob;
        $school->gender = $request->gender;
        $school->school_address = $request->school_address;
        $school->owner_address = $request->owner_address;
        $school->bio = $request->bio;
        $school->save();

        return redirect()->back()

            ->with('success','School created successfully.');
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    

    public function show($id)
    {
        $school = School::findOrfail($id);
        return view('frontend.superadmin.schools.view',compact('school'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('frontend.schools.edit',compact('school'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
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


        $school->update($request->all());


        return redirect()->route('frontend.schools.index')

            ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
