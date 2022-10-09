<?php
include('database.php');


if (isset($_GET['edit'])) {

  $id = $_GET['edit'];
  $editData = edit_data($connection, $id);
}

if (isset($_POST['update']) && isset($_GET['edit'])) {

  $id = $_GET['edit'];
  update_data($connection, $id);
}
function edit_data($connection, $id)
{
  $query = "SELECT * FROM tbl_student WHERE id= $id";
  $exec = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($exec);
  return $row;
}

// update data query
function update_data($connection, $id)
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
  // Update Image
  $student_photo = legal_input($_POST['student_photo']);

  $query = "UPDATE tbl_student SET
                student_name= '$student_name',
                student_name_bn= '$student_name_bn',
                student_roll= '$student_roll',
                email= '$email',
                date_of_birth= '$date_of_birth',
                student_phone= '$student_phone',
                home_address= '$home_address',
                guardian_name= '$guardian_name',
                guardian_phone= '$guardian_phone',
                father_name= '$father_name',
                father_phone= '$father_phone',
                father_occupation= '$father_occupation',
                mother_name= '$mother_name',
                mother_phone= '$mother_phone',
                mother_occupation= '$mother_occupation',
                ssc_year= '$ssc_year',
                ssc_board= '$ssc_board',
                ssc_institute_name= '$ssc_institute_name',
                hsc_year= '$hsc_year',
                hsc_board= '$hsc_board',
                hsc_institute_name= '$hsc_institute_name',
                permanent_address_village= '$permanent_address_village',
                permanent_address_thana= '$permanent_address_thana',
                permanent_address_district= '$permanent_address_district',
                blood_group= '$blood_group',
                student_photo= '$student_photo',
                
                WHERE id=$id";

  $exec = mysqli_query($connection, $query);

  if ($exec) {
    header('location:user-table.php');
  } else {
    $msg = "Error: " . $query . "<br>" . mysqli_error($connection);
    echo $msg;
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
