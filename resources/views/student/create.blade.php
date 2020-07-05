<html>
<head>
</head>
<body>

{!! Form::open(['url' => '/student','method'=>'post']) !!}

<label for="name">Name</label><br>
<input type="text" id="name" name="name"><br>

<label for="registration_number_college">Registration Number College</label><br>
<input type="text" id="registration_number_college" name="registration_number_college"><br>

<label for="registration_number_university">Registration Number University</label><br>
<input type="text" id="registration_number_university" name="registration_number_university"><br>

<label for="address">Address</label><br>
<input type="text" id="address" name="address"><br>


<b>Semester I</b>
    <select name="sem1_sub1">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
        @endforeach
    </select>
   <select name="sem1_sub2">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
    @endforeach
    </select>
    <select name="sem1_sub3">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
    @endforeach
    </select>
    <select name="sem1_sub4">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
    @endforeach
    </select>
    <select name="sem1_sub5">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
    @endforeach
    </select>
   
    <select name="sem1_sub6">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
        @endforeach
    </select>

    <br>
    <b>Semester II</b>
    <select name="sem2_sub1">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
        @endforeach
    </select>
   <select name="sem2_sub2">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
    @endforeach
    </select>
    <select name="sem2_sub3">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
    @endforeach
    </select>
    <select name="sem2_sub4">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
        @endforeach
    </select>

    <br>
    <b>Semester III</b>
    <select name="sem3_sub1">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
        @endforeach
    </select>
   <select name="sem3_sub2">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
    @endforeach
    </select>
    <select name="sem3_sub3">
    @foreach ($subjects as $subject)
        <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
    @endforeach
    </select>
    <select name="sem3_sub4">
        @foreach ($subjects as $subject)
            <option value="{{ $subject->course_offering_name }}">{{ $subject->course_offering_name}}</option>
        @endforeach
    </select>
<br>
<input type="submit" value="submit">

{!! Form::close() !!}

</body>
</html>