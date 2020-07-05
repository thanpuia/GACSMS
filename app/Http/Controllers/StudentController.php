<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\CourseTaken;

class StudentController extends Controller
{
    
    public function index()
    {
      $students = Student::all();
      return view('student.index',compact('students'));
    }

    public function create()
    {
        $subjects = Course::all();

        return view ('student.create', compact('subjects') );
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student = createOrUpdate($student, $request,$id);


        $student->save();  
        
        //return redirect()->route('student', [$student->id]);      
        return "Create success";
    }

    public function show($id)
    {
         $student = Student::find($id);
       //  $courseTaken = CourseTaken ::where ('student_id','=',$id)->get();
        //dd($courseTaken);
                     
        return view ('student.show', compact('student'));
        
    }

    public function edit($id)
    {
        $student = Student::find($id);
       // $courseTaken = CourseTaken ::where ('student_id','=',$id)->get();
        $subjects = Course::all();

        return view('student.edit',compact('student','subjects'));
    }

    public function update(Request $request, $id)
    {

        $student = Student::find($id);

        $student = $this->createOrUpdate($student, $request, $id);

        $student->save();  
    

       // return redirect()->route('student', [ $id]);   
       return "Update success";
    }

    public function destroy($id)
    {
        //
    }

    public function createOrUpdate(Student $student,Request $request,$id){


        $student->registration_number_college = $request['registration_number_college'];
        $student->registration_number_university = $request['registration_number_university'];
        $student->address = $request['address'];
        $student->name = $request['name'];

        //YEAR 1
        $student->semester_one_subject_one = $request['sem1_sub1'];
        $student->semester_one_subject_two = $request['sem1_sub2'];
        $student->semester_one_subject_three = $request['sem1_sub3'];
        $student->semester_one_subject_four = $request['sem1_sub4'];
        $student->semester_one_subject_five = $request['sem1_sub5'];
        $student->semester_one_subject_six = $request['sem1_sub6'];

        $student->semester_two_subject_one = $request['sem2_sub1'];
        $student->semester_two_subject_two = $request['sem2_sub2'];
        $student->semester_two_subject_three = $request['sem2_sub3'];
        $student->semester_two_subject_four = $request['sem2_sub4'];
        $student->semester_two_subject_five = $request['sem2_sub5'];
        $student->semester_two_subject_six = $request['sem2_sub6'];

        //YEAR 2
        $student->semester_three_subject_one = $request['sem3_sub1'];
        $student->semester_three_subject_two = $request['sem3_sub2'];
        $student->semester_three_subject_three = $request['sem3_sub3'];
        $student->semester_three_subject_four = $request['sem3_sub4'];
        $student->semester_three_subject_five = $request['sem3_sub5'];
        $student->semester_three_subject_six = $request['sem3_sub6'];

        $student->semester_four_subject_one = $request['sem4_sub1'];
        $student->semester_four_subject_two = $request['sem4_sub2'];
        $student->semester_four_subject_three = $request['sem4_sub3'];
        $student->semester_four_subject_four = $request['sem4_sub4'];
        $student->semester_four_subject_five = $request['sem4_sub5'];
        $student->semester_four_subject_six = $request['sem4_sub6'];

        //YEAR 3
        $student->semester_five_subject_one = $request['sem5_sub1'];
        $student->semester_five_subject_two = $request['sem5_sub2'];
        $student->semester_five_subject_three = $request['sem5_sub3'];
        $student->semester_five_subject_four = $request['sem5_sub4'];
        $student->semester_five_subject_five = $request['sem5_sub5'];
        $student->semester_five_subject_six = $request['sem5_sub6'];

        $student->semester_six_subject_one = $request['sem6_sub1'];
        $student->semester_six_subject_two = $request['sem6_sub2'];
        $student->semester_six_subject_three = $request['sem6_sub3'];
        $student->semester_six_subject_four = $request['sem6_sub4'];
        $student->semester_six_subject_five = $request['sem6_sub5'];
        $student->semester_six_subject_six = $request['sem6_sub6'];

        return $student;
    }
}
