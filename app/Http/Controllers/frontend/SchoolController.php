<?php

namespace App\Http\Controllers\frontend;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

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
        $schools = School::latest()->paginate(5);

        return view('frontend.schools.index',compact('schools'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.schools.create');

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
            'othernames' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'class' => 'required',
            'section' => 'required',

        ]);


        School::create($request->all());


        return redirect()->route('schools.index')

            ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return view('frontend.schools.index',compact('school'));

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
