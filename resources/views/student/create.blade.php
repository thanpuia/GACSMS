@extends('layouts.app')
@section('content')

<div class="container">
    <div class="form p-5">
    
        <h3 class="card-title">Student Data Enter</h3>
        {!! Form::open(['url' => '/student','method'=>'post']) !!}

        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="registration_number_college">Registration Number College</label><br>
            <input type="text"  class="form-control" id="registration_number_college" name="registration_number_college">
        </div>
        <div class="form-group">
            <label for="registration_number_university">Registration Number University</label><br>
            <input type="text" class="form-control" id="registration_number_university" name="registration_number_university">
        </div>
        <div class="form-group">
            <label for="address">Address</label><br>
            <input type="text" class="form-control" id="address" name="address">
        </div>
    
        <br> <b>Semester I</b> <br>
        <div class="form-group form-check-inline">
          
                <select name="sem1_sub1" class="form-control mr-3" >
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                    @endforeach
                </select>
            <select name="sem1_sub2" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                @endforeach
                </select>
                <select name="sem1_sub3" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                @endforeach
                </select>
                <select name="sem1_sub4" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                @endforeach
                </select>
                <select name="sem1_sub5" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                @endforeach
                </select>
                <select name="sem1_sub6" class="form-control mr-3">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                    @endforeach
                </select>
        </div>

        <br> <b>Semester II</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem2_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                @endforeach
            </select>
            <select name="sem2_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
            @endforeach
            </select>
            <select name="sem2_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
            @endforeach
            </select>
            <select name="sem2_sub4" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                @endforeach
            </select>
        </div>

    <br> <b>Semester III</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem3_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                @endforeach
            </select>
            <select name="sem3_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
            @endforeach
            </select>
            <select name="sem3_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
            @endforeach
            </select>
            <select name="sem3_sub4" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
                @endforeach
            </select>
        </div>
    <br>
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">

    {!! Form::close() !!}


    </div>

</div>
@endsection