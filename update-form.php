<?php
include('update-script.php');
?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP CRUD Operations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c4387bc5af.js" crossorigin="anonymous"></script>
  <style>
    body {
      overflow-x: hidden;
    }

    * {
      box-sizing: border-box;
    }

    .user-detail {
      width: 65%;
      margin: auto;
    }

    .user-detail form {
      height: auto;
      padding: 16px;
      background-color: white;
      border: 3px solid #000000;
      border-radius: 10px;
      /* width: 65%; */
    }

    input {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
      border-radius: 10px;
    }

    select {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
      border-radius: 10px;
    }

    /* input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    } */

    button[type=submit] {
      background-color: #434140;
      color: #ffffff;
      padding: 10px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-size: 20px;
      border-radius: 10px;
    }

    .add-btn {
      background-color: #434140;
      color: #ffffff;
      padding: 10px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-size: 20px;
      /* border: 3px solid #434140; */
      border-radius: 10px;
    }

    .add-btn:hover {
      /* border: 3px solid black; */
      background-color: #0A58CA;
      color: #ffffff;
    }

    .add-btn-a {
      text-decoration: none;
      color: #ffffff;
    }

    label {
      font-size: 18px;
      ;
    }

    button[type=submit]:hover {
      background-color: #0A58CA;
    }

    .card {
      border: none;
    }

    .form-title a,
    .form-title h2 {
      display: inline-block;
    }

    .form-title a {
      text-decoration: none;
      font-size: 20px;
      background-color: green;
      color: honeydew;
      padding: 2px 10px;
    }
  </style>
</head>

<body>
  <!--====form section start====-->

  <div class="user-detail">

    <div class="form-title text-center pt-5">
      <h2>UPDATE USER</h2>
    </div>

    <p style="color:red">
      <?php if (!empty($msg)) {
        echo $msg;
      } ?>
    </p>

    <!-- <a class="add-btn-a" href="user-table.php"><button class="add-btn" type="button">Back</button></a> -->
    <form method="post" action="">
      <!-- Update Form  -->
      <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
          <div class="card h-100">
            <label>Student Name *</label>
            <input value="<?php echo isset($editData) ? $editData['student_name'] : '' ?>" type="text" placeholder="Enter Name" name="student_name" required>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Student Name Bangla *</label>
            <input value="<?php echo isset($editData) ? $editData['student_name_bn'] : '' ?>" type="text" placeholder="Enter Name Bangla" name="student_name_bn" required>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Student Roll</label>
            <input value="<?php echo isset($editData) ? $editData['student_roll'] : '' ?>" type="number" placeholder="Enter Roll" name="student_roll">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Student Email</label>
            <input value="<?php echo isset($editData) ? $editData['email'] : '' ?>" type="email" placeholder="Enter Email" name="email">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Date of Birth</label>
            <input value="<?php echo isset($editData) ? $editData['date_of_birth'] : '' ?>" type="date" placeholder="Enter Date of Birth" name="date_of_birth">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Student Phone</label>
            <input value="<?php echo isset($editData) ? $editData['student_phone'] : '' ?>" type="number" placeholder="Enter Phone" name="student_phone">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Home Address</label>
            <input value="<?php echo isset($editData) ? $editData['home_address'] : '' ?>" type="text" placeholder="Enter Address" name="home_address">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Guardian Name</label>
            <input value="<?php echo isset($editData) ? $editData['guardian_name'] : '' ?>" type="text" placeholder="Enter Guardian Name" name="guardian_name">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Guardian Phone</label>
            <input value="<?php echo isset($editData) ? $editData['guardian_phone'] : '' ?>" type="number" placeholder="Enter Guardian Phone" name="guardian_phone">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Father Name</label>
            <input value="<?php echo isset($editData) ? $editData['father_name'] : '' ?>" type="text" placeholder="Enter Father Name" name="father_name">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Father Phone</label>
            <input value="<?php echo isset($editData) ? $editData['father_phone'] : '' ?>" type="number" placeholder="Enter Father Phone" name="father_phone">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Father Occupation</label>
            <input value="<?php echo isset($editData) ? $editData['father_occupation'] : '' ?>" type="text" placeholder="Enter Father Occupation" name="father_occupation">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Mother Name</label>
            <input value="<?php echo isset($editData) ? $editData['mother_name'] : '' ?>" type="text" placeholder="Enter Mother Name" name="mother_name">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Mother Phone</label>
            <input value="<?php echo isset($editData) ? $editData['mother_phone'] : '' ?>" type="number" placeholder="Enter Mother Phone" name="mother_phone">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Mother Occupation</label>
            <input value="<?php echo isset($editData) ? $editData['mother_occupation'] : '' ?>" type="text" placeholder="Enter Mother Occupation" name="mother_occupation">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>SSC Year</label>
            <input value="<?php echo isset($editData) ? $editData['ssc_year'] : '' ?>" type="number" placeholder="Enter SSC Year" name="ssc_year">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>SSC Board</label>
            <input value="<?php echo isset($editData) ? $editData['ssc_board'] : '' ?>" type="text" placeholder="Enter SSC Board" name="ssc_board">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>SSC Institute </label>
            <input value="<?php echo isset($editData) ? $editData['ssc_institute_name'] : '' ?>" type="text" placeholder="Enter SSC Institute" name="ssc_institute_name">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>HSC Year</label>
            <input value="<?php echo isset($editData) ? $editData['hsc_year'] : '' ?>" type="number" placeholder="Enter HSC Year" name="hsc_year">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>HSC Board</label>
            <input value="<?php echo isset($editData) ? $editData['hsc_board'] : '' ?>" type="text" placeholder="Enter HSC Board" name="hsc_board">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>HSC Institute</label>
            <input value="<?php echo isset($editData) ? $editData['hsc_institute_name'] : '' ?>" type="text" placeholder="Enter HSC Institute" name="hsc_institute_name">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Permanent Address Village</label>
            <input value="<?php echo isset($editData) ? $editData['permanent_address_village'] : '' ?>" type="text" placeholder="Enter Village" name="permanent_address_village">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Permanent Address Thana</label>
            <input value="<?php echo isset($editData) ? $editData['permanent_address_thana'] : '' ?>" type="text" placeholder="Enter Thana" name="permanent_address_thana">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Permanent Address District</label>
            <input value="<?php echo isset($editData) ? $editData['permanent_address_district'] : '' ?>" type="text" placeholder="Enter District" name="permanent_address_district">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Blood Group</label>
            <input value="<?php echo isset($editData) ? $editData['blood_group'] : '' ?>" type="text" placeholder="Enter Blood Group" name="blood_group">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Student Photo</label>
            <input value="<?php echo isset($editData) ? $editData['student_photo'] : '' ?>" type="file" id="avatar" name="student_photo" accept="image/png, image/jpeg">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Verified</label>
            <select name="verified">
              <option>Select Option</option>
              <option value="<?php echo isset($editData) ? $editData['verified'] : '' ?>">Yes</option>
              <option value="<?php echo isset($editData) ? $editData['verified'] : '' ?>">No</option>
            </select>
          </div>
        </div>

      </div>

      <div class="d-flex">
        <button class="me-1" type="submit" name="update">Submit</button>
        <!-- <button class="ms-1" type="submit" name="create">Back</button> -->
        <a class="add-btn-a" href="user-table.php"><button class="add-btn" type="button">BACK</button></a>
      </div>

    </form>

  </div>
  </div>
  <!--====form section start====-->


</body>

</html>