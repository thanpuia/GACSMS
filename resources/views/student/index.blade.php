@extends('layouts.app')
@section('content')

<a href='/student/function1/'>Mimal detail </a>
<a href='/student/function2/'>DUKE detail </a>



{!! Form::open(['url' => '/student/searchbyname','method'=>'post']) !!}
<label for="name">Search by Name</label>
<input type="text" id="name" name="name">
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!} 


{!! Form::open(['url' => '/student/searchbysubject','method'=>'post']) !!}
<label for="name">Search by subject</label>
<select name="subject">
    @foreach($subjects as $subject)
        <option value="{{ $subject->name}}">{{$subject->name}} </option>
    @endforeach
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!} 

{!! Form::open(['url' => '/student/searchbyreligion','method'=>'post']) !!}
<label for="religion">Search by Religion</label>
<input type="text" name="religion" id="religion">
    
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!} 

<a href='/'>1.	Mimal  Details/information kimchang enna (Get Student Info) </a> <br>
<a href='/'>2.	Hming inang ho zawnna(Search by Name)</a><br>
<a href='/'>3.	Subject in ang ho zawng lakchhuahna (A hming list leh a zat hriat nan)(Search by Subject)</a><br>
<a href='/'>4.	Core Subject inang ho zawng lakchuahna (Hming leh a zat) </a><br>
<a href='/'>5.	Sakhua (Religion) inang ho zawnchhuahna, Semester WiseA (Search By Religion)(Filter by semester)</a><br>
<a href='/'>6.	Semester Wise Community inang ho zawng zawn chhuahna b (a zat leh an hming list)(Search by community)</a><br>
<a href='/'>7.	Semester Wise a zirlai awm zat te, Mipa leh Hmeichhia zat a hrang a enna.(Search by semsester)(FilterbyGender)</a><br>
<a href='/'>8.	Semester tin a Pass leh Fail enna. A pumpui leh Core wise/Paper Wise (Search by result)</a><br>
<a href='/'>9.	Roll No. in dawtin- Hming, Pa Hming, Registration No., Aadhaar No. leh Community leh Subject lak thlan chhuah te hian Excel-ah a Export theih a ngem? (List all)</a><br>
<a href='/'>10. Urban leh Rural zat semester Wise (Search by rural or urban) </a><br>
<a href='/'>11. Disabled zat hriatna/list (Search by Disable) </a><br>

<!-- 
<table class="table table-dark">
<tr>
    <th>Name </th>
    <th>College ROll no</th>
    <th>Uni Roll no</th>
    <th>Address</th>
    <th>Sem 1 Subj 1</th>
    <th>Sem 1 Subj 2</th>
    <th>Sem 2 Subj 1</th>
    <th>Sem 2 Subj 2</th>
    <th>View</th>
</tr>

@foreach($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->registration_number_college}}</td>
    <td>{{$student->registration_number_university}}</td>
    <td>{{$student->address}}</td>
    <td>{{$student->semester_one_subject_one}}</td>
    <td>{{$student->semester_one_subject_two}}</td>
    <td>{{$student->semester_two_subject_one}}</td>
    <td>{{$student->semester_two_subject_two}}</td>
    <td><a href='/student/{{$student->id}}' class="btn btn-info">show</a>   </td>
</tr>
@endforeach
</table> -->


@endsection