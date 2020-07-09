@extends('layouts.app')

@section('content')

{!! Form::open(['url' => "/student/{$student->id}",'method'=>'put']) !!}

<label for="name">Name</label><br>
<input type="text" id="name" name="name" value={{$student->name}}><br>

<label for="registration_number_college">Registration Number College</label><br>
<input type="text" id="registration_number_college" name="registration_number_college" value={{$student->registration_number_college}}><br>

<label for="registration_number_university">Registration Number University</label><br>
<input type="text" id="registration_number_university" name="registration_number_university" value={{$student->registration_number_university}}><br>

<label for="address">Address</label><br>
<input type="text" id="address" name="address" value={{$student->address}}><br>

<b>Semester I</b>
    <select name="sem1_sub1">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->name }}" {{$subject->name==$student->semester_one_subject_one ?  'selected':''}} >{{ $subject->name}}</option>
        @endforeach
    </select>
   <select name="sem1_sub2">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->name }}" {{$subject->name==$student->semester_one_subject_two ?  'selected':''}} >{{ $subject->name}}</option>
    @endforeach
    </select>
    <select name="sem1_sub3">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->name }}" {{$subject->name==$student->semester_one_subject_three ?  'selected':''}} >{{ $subject->name}}</option>
    @endforeach
    </select>
    <select name="sem1_sub4">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->name }}" {{$subject->name==$student->semester_one_subject_four ?  'selected':''}}  >{{ $subject->name}}</option>
    @endforeach
    </select>
    <select name="sem1_sub5">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->name }}" {{$subject->name==$student->semester_one_subject_five ?  'selected':''}} >{{ $subject->name}}</option>
    @endforeach
    </select>
   
    <select name="sem1_sub6">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->name }}" {{$subject->name==$student->semester_one_subject_six ?  'selected':''}} >{{ $subject->name}}</option>
        @endforeach
    </select>

    <br>
    <b>Semester II</b>
    <select name="sem2_sub1">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->name }}" {{$subject->name==$student->semester_two_subject_one ?  'selected':''}} >{{ $subject->name}}</option>
        @endforeach
    </select>
   <select name="sem2_sub2">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->name }}" {{$subject->name==$student->semester_two_subject_two ?  'selected':''}} >{{ $subject->name}}</option>
    @endforeach
    </select>
    <select name="sem2_sub3">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->name }}" {{$subject->name==$student->semester_two_subject_three ?  'selected':''}} >{{ $subject->name}}</option>
    @endforeach
    </select>
    <select name="sem2_sub4">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->name }}" {{$subject->name==$student->semester_two_subject_four ?  'selected':''}} >{{ $subject->name}}</option>
        @endforeach
    </select>

    <br>
    <b>Semester III</b>
    <select name="sem3_sub1">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->name }}" {{$subject->name==$student->semester_three_subject_one ?  'selected':''}} >{{ $subject->name}}</option>
        @endforeach
    </select>
   <select name="sem3_sub2">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->name }}" {{$subject->name==$student->semester_three_subject_two ?  'selected':''}} >{{ $subject->name}}</option>
    @endforeach
    </select>
    <select name="sem3_sub3">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->name }}" {{$subject->name==$student->semester_three_subject_two ?  'selected':''}} >{{ $subject->name}}</option>
    @endforeach
    </select>
    <select name="sem3_sub4">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->name }}" {{$subject->name==$student->semester_three_subject_two ?  'selected':''}} >{{ $subject->name}}</option>
        @endforeach
    </select>


    <br>

<input type="submit" value="submit">

{!! Form::close() !!}


@endsection