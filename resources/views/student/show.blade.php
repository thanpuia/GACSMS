<html>
<head>
</head>
<body>

   <b>Name:</b> {{$student->name}} <br>
   <b> Address:</b> {{$student->address}}<br>
   <b>University Roll No :</b> {{$student->registration_number_university}}<br>
   <b>College Roll No :</b> {{$student->registration_number_college }}<br>
   <b>COURSES:</b> <br>
    
     Sem1:
  <b>Subject 1:</b> {{$student->semester_one_subject_one}} <br>
  <b>Subject 2:</b> {{$student->semester_one_subject_two}} <br>
  <b>Subject 3:</b> {{$student->semester_one_subject_three}} <br>
  <b>Subject 4:</b> {{$student->semester_one_subject_four}} <br>
<br>
  Sem2:
  <b>Subject 1:</b> {{$student->semester_two_subject_one}} <br>
  <b>Subject 2:</b> {{$student->semester_two_subject_two}} <br>
  <b>Subject 3:</b> {{$student->semester_two_subject_three}} <br>
  <b>Subject 4:</b> {{$student->semester_two_subject_four}} <br>
  <br>
  Sem3:
  <b>Subject 1:</b> {{$student->semester_three_subject_one}} <br>
  <b>Subject 2:</b> {{$student->semester_three_subject_two}} <br>
  <b>Subject 3:</b> {{$student->semester_three_subject_three}} <br>
  <b>Subject 4:</b> {{$student->semester_three_subject_four}} <br>


<br>
     <a href='/student/{{$student->id}}/edit'>EDIT</a>  
   
</body>
</html>