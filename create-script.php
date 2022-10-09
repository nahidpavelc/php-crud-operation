<?php
include('database.php');

if (isset($_POST['create'])) {
  $msg = insert_data($connection);
}

// insert query
function insert_data($connection)
{
  $student_name = legal_input($_POST['student_name']);
  $student_name_bn = legal_input($_POST['student_name_bn']);
  $student_roll = legal_input($_POST['student_roll']);
  $email = legal_input($_POST['email']);
  $date_of_birth = legal_input($_POST['date_of_birth']);
  $student_phone = legal_input($_POST['student_phone']);
  $home_address = legal_input($_POST['home_address']);
  $guardian_name = legal_input($_POST['guardian_name']);
  $guardian_phone = legal_input($_POST['guardian_phone']);
  $father_name = legal_input($_POST['father_name']);
  $father_phone = legal_input($_POST['father_phone']);
  $father_occupation = legal_input($_POST['father_occupation']);
  $mother_name = legal_input($_POST['mother_name']);
  $mother_phone = legal_input($_POST['mother_phone']);
  $mother_occupation = legal_input($_POST['mother_occupation']);
  $ssc_year = legal_input($_POST['ssc_year']);
  $ssc_board = legal_input($_POST['ssc_board']);
  $ssc_institute_name = legal_input($_POST['ssc_institute_name']);
  $hsc_year = legal_input($_POST['hsc_year']);
  $hsc_board = legal_input($_POST['hsc_board']);
  $hsc_institute_name = legal_input($_POST['hsc_institute_name']);
  $permanent_address_village = legal_input($_POST['permanent_address_village']);
  $permanent_address_thana = legal_input($_POST['permanent_address_thana']);
  $permanent_address_district = legal_input($_POST['permanent_address_district']);
  $blood_group = legal_input($_POST['blood_group']);

  // insert Image 
  $student_photo = legal_input($_POST['student_photo']);
  // $imgContent = addslashes(file_get_contents($student_photo));

  $verified = legal_input($_POST['verified']);

  $time = date('Y-d-m H:i:s', time());

  $query = "INSERT INTO tbl_student (student_name,student_name_bn,student_roll,email,date_of_birth, student_phone,home_address,guardian_name,guardian_phone,father_name,father_phone,father_occupation, mother_name,mother_phone,mother_occupation,ssc_year,ssc_board,ssc_institute_name,hsc_year,hsc_board, hsc_institute_name,permanent_address_village,permanent_address_thana,permanent_address_district,blood_group,student_photo,verified,insert_time) 
  VALUES ('$student_name','$student_name_bn','$student_roll','$email','$date_of_birth','$student_phone','$home_address','$guardian_name','$guardian_phone','$father_name','$father_phone','$father_occupation','$mother_name','$mother_phone','$mother_occupation','$ssc_year','$ssc_board','$ssc_institute_name','$hsc_year','$hsc_board','$hsc_institute_name','$permanent_address_village','$permanent_address_thana','$permanent_address_district','$blood_group','$student_photo','$verified','$time')";
  $exec = mysqli_query($connection, $query);

  if ($exec) {
    $msg = "Data was created sucessfully";
    return $msg;
  } else {
    $msg = "Error: " . $query . "<br>" . mysqli_error($connection);
  }
}

// convert illegal input to legal input
function legal_input($value)
{
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
