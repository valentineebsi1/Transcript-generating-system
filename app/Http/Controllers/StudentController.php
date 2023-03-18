<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\students;

class StudentController extends Controller
{
    // index page student
    public function student()
    {
        return view('student.student');
    }

    // index page student grid
    public function studentGrid()
    {
        return view('student.student-grid');
    }

    // student add page
    public function studentAdd()
    {
        return view('student.add-student');
    }

    function DataInsert(Request $request) {

        // $user_id       = $request->user_id;
        // $name         = $request->name;
        // $email        = $request->email;
        // $role_name    = $request->role_name;
        // $position     = $request->position;
        // $phone        = $request->phone_number;
        // $department   = $request->department;
        // $status       = $request->status;

         $name = $request->input('first_name');
         $last_name = $request->input('last_name');
         $class = $request->input('class');
         $date_of_birth = $request->input('DOB');
         $Parent_Name = $request->input('Parent_Name');
         $phone_number = $request->input('phone_number');
         $address = $request->input('address');

         $isInsertSuccress = students::insert(['student_f_name'->$name,'student_l_name'->$last_name,'class'->$class,'date_of_birth'->$date_of_birth,'parent_name'->$Parent_Name,'Phone_number'->$phone_number,'address'->$address]);
    
         if($isInsertSuccress) echo '<h1>Insert Success</h1>';
         else echo '<h1>Insert Failed</h1>';
        }

    // Student edit page


    // public function studentEdit(){
    //     return view('student.Edit-student')
    // }
}
