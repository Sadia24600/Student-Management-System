<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Create Student Form
    public function createStudentForm(Request $request)
    {
     Student::create($request->only([
        'name',
        'email',
        'age',
        'course'
        ]));
     return redirect('studenttable')->with('success','Student Addedd Successfully');   
    }

    //Show Student Table
    public function studentTable()
    {
        $students = Student::all();
        return view('students_information.studentTable',compact('students'));
    }

    //Show Student Edit Form
    public function studentUpdate($id)
    {
        $std= Student::findOrFail($id);
        return view('students_information.updateStudentForm',compact('std'));
    }

    //Update Student Form
    public function updateStudentForm(Request $request)
    {
        $std= Student::findOrFail($request->id);
        $std->update($request->only([
            'name',
            'email',
            'age',
            'course'
        ]));
        return redirect('studenttable')->with('success','Student Updated Successfully');
    }

    //Delete Student
    public function deleteStudent($id)
    {
        $std= Student::findOrFail($id);
        $std->delete();
        return redirect('studenttable')->with('success','Student Deleted Successfully');
    }
}
