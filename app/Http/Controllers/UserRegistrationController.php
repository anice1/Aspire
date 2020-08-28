<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolAdmin;
use App\Teacher;
use App\Student;
use App\Role;
class UserRegistrationController extends Controller
{


    public function create_admin(Request $request){
        
        $user = new SchoolAdmin;
        $user->role_id = 1;
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->othernames = $request->onames;
        $user->gender = $request->gender;
        $user->school_name = $request->school_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = $request->password;
        return redirect('register/store');
        
    }

    public function create_teacher(Request $request){
        
        $user = new Teacher;
        $user->role_id = 2;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->blood_group = $request->blood_group;
        $user->religion = $request->religion;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->tclass = $request->class;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $request->bio = $request->bio;
        $user->file = $request->file;
        $user->save();
        // if($file){
        //     $name = $file->getClientOriginalName();
        // }
        return redirect('frontend.teachers.create');
    }

    public function create_student(Request $request){
        
         
        $user = new Student;
        $user->role_id = 3;
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->othernames = $request->onames;
        $user->class_id = $request->stdclass;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = $request->password;
        
        return redirect('admin.students');
    }
}
