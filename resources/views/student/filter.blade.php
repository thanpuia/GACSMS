@extends('layouts.app')
@section('content')

<table class="table table-dark">
<tr>
    <th>Name </th>
    <th>College ROll no</th>
    <th>Uni Roll no</th>
    <th>Address</th>
    
    <th>View</th>
</tr>

@foreach($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->mzu_registration}}</td>
    <td>{{$student->college_registration}}</td>
    <td>{{$student->sex}}</td>
   
    <td><a href='/student/{{$student->id}}' class="btn btn-info">show</a>   </td>
</tr>
@endforeach
</table>
@endsection