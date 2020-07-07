@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card p-5">
    <h2 class="card-title">{{$student->name}}'s Data</h2>
    <div class="row">
      <div class="col">
          <b> Address: </b> {{$student->address}}  
      </div>
      <div class="col">
          <b>University Roll No: </b> {{$student->registration_number_university}}   
      </div>
      <div class="col">
          <b>College Roll No: </b> {{$student->registration_number_college }}  
      </div>
    </div>
    <div class="row pt-4">
      <div class="col">
       <h5> <b>COURSES:</b> </h5>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <b>Semester 1</b>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <b>Subject 1:</b> {{$student->semester_one_subject_one}} 
      </div>
      <div class="col">
        <b>Subject 2:</b> {{$student->semester_one_subject_two}} 
      </div>
      <div class="col">
        <b>Subject 3:</b> {{$student->semester_one_subject_three}}
      </div>
      <div class="col">
        <b>Subject 4:</b> {{$student->semester_one_subject_four}}  
      </div>   
    </div>

    <div class="row mt-2">
      <div class="col">
        <b>Semester 2</b>
      </div>
    </div>

    <div class="row">
          <div class="col">
              <b>Subject 1:</b> {{$student->semester_two_subject_one}}
          </div>
          <div class="col">
              <b>Subject 2:</b> {{$student->semester_two_subject_two}} 
          </div>
          <div class="col">
              <b>Subject 3:</b> {{$student->semester_two_subject_three}}
          </div>
          <div class="col">
              <b>Subject 4:</b> {{$student->semester_two_subject_four}} 
          </div>
    </div>

    <div class="row mt-2">
      <div class="col">
        <b>Semester 3</b>
      </div>
    </div>

    <div class="row">
          <div class="col">
              <b>Subject 1:</b> {{$student->semester_three_subject_one}}
          </div>
          <div class="col">
              <b>Subject 2:</b> {{$student->semester_three_subject_two}} 
          </div>
          <div class="col">
              <b>Subject 3:</b> {{$student->semester_three_subject_three}}
          </div>
          <div class="col">
              <b>Subject 4:</b> {{$student->semester_three_subject_four}} 
          </div>
    </div>
     <a href='/student/{{$student->id}}/edit' class="btn btn-primary btn-block mt-4">EDIT</a>

  </div>
</div>
     
  
@endsection