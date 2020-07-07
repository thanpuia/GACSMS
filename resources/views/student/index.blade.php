

@extends('layouts.app')

@section('content')

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
</table>


@endsection