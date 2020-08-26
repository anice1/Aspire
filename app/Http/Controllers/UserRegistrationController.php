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
        return redirect('admin.login');
        
    }

    public function create_teacher(Request $request){
        
        $user = new Teacher;
        $user->role_id = 2;
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->othernames = $request->onames;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->qualification = $request->qualification;
        $user->tclass = $request->tclass;
        $user->email = $request->email;
        $user->password = $request->password;
        return redirect('admin.teachers');
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
