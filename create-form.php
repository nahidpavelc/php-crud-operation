<?php
include('create-script.php');
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
      width: 80%;
      margin: auto;
    }

    .user-detail form {
      height: auto;
      border: 3px solid #000000;
      border-radius: 10px;
      padding: 16px;
      background-color: white;
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
      border-radius: 10px;
    }

    .add-btn:hover {
      background-color: #0A58CA;
      color: #ffffff;
    }

    .add-btn-a {
      text-decoration: none;
      color: #ffffff;
    }

    label {
      font-size: 18px;
    }

    button[type=submit]:hover {
      background-color: #0A58CA;
    }

    .form-title a,
    .form-title h2 {
      display: inline-block;

    }

    .card {
      border: none;
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
      <h2 style="color: green;">Create Form</h2>
    </div>
    <h2 style="color:green"><?php if (!empty($msg)) {
                              echo $msg;
                            } ?></h2>

    <!-- <a class="add-btn-a" href="user-table.php"><button class="add-btn" type="button">BACK</button></a> -->

    <form method="post" action="">

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <label>Student Name *</label>
            <input type="text" placeholder="Enter Name" name="student_name" required>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Student Name Bangla *</label>
            <input type="text" placeholder="Enter Name Bangla" name="student_name_bn" required>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Student Roll</label>
            <input type="number" placeholder="Enter Roll" name="student_roll">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Student Email</label>
            <input type="email" placeholder="Enter Email" name="email">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Date of Birth</label>
            <input type="date" placeholder="Enter Date of Birth" name="date_of_birth">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Student Phone</label>
            <input type="number" placeholder="Enter Phone" name="student_phone">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Home Address</label>
            <input type="text" placeholder="Enter Address" name="home_address">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Guardian Name</label>
            <input type="text" placeholder="Enter Guardian Name" name="guardian_name">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Guardian Phone</label>
            <input type="number" placeholder="Enter Guardian Phone" name="guardian_phone">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Father Name</label>
            <input type="text" placeholder="Enter Father Name" name="father_name">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Father Phone</label>
            <input type="number" placeholder="Enter Father Phone" name="father_phone">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Father Occupation</label>
            <input type="text" placeholder="Enter Father Occupation" name="father_occupation">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Mother Name</label>
            <input type="text" placeholder="Enter Mother Name" name="mother_name">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Mother Phone</label>
            <input type="number" placeholder="Enter Mother Phone" name="mother_phone">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Mother Occupation</label>
            <input type="text" placeholder="Enter Mother Occupation" name="mother_occupation">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>SSC Year</label>
            <input type="number" placeholder="Enter SSC Year" name="ssc_year">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>SSC Board</label>
            <input type="text" placeholder="Enter SSC Board" name="ssc_board">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>SSC Institute </label>
            <input type="text" placeholder="Enter SSC Institute" name="ssc_institute_name">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>HSC Year</label>
            <input type="number" placeholder="Enter HSC Year" name="hsc_year">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>HSC Board</label>
            <input type="text" placeholder="Enter HSC Board" name="hsc_board">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>HSC Institute</label>
            <input type="text" placeholder="Enter HSC Institute" name="hsc_institute_name">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Permanent Address Village</label>
            <input type="text" placeholder="Enter Village" name="permanent_address_village">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Permanent Address Thana</label>
            <input type="text" placeholder="Enter Thana" name="permanent_address_thana">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Permanent Address District</label>
            <input type="text" placeholder="Enter District" name="permanent_address_district">
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <label>Blood Group</label>
            <input type="text" placeholder="Enter Blood Group" name="blood_group">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Student Photo</label>
            <input type="file" id="avatar" name="student_photo">
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <label>Verified</label>
            <select name="verified">
              <option>Select Option</option>
              <option name="verified">Yes</option>
              <option name="verified">No</option>
            </select>
          </div>
        </div>

        <!-- <select name="author_id" id="author_id" class="form-control select2">
          <option value="0">Select a Authors</option>
          <?php foreach ($authors_list as $key => $value) { ?>
            <option value="<?php echo $value->id; ?>" <?php if ($journal_authors_info->author_id == $value->id) echo "selected"; ?>><?php echo $value->author_name; ?> </option>
          <?php } ?>
        </select> -->


      </div>

      <div class="d-flex">
        <button class="me-1" type="submit" name="create">Submit</button>
        <!-- <button class="ms-1" type="submit" name="create">Back</button> -->
        <a class="add-btn-a" href="user-table.php"><button class="add-btn" type="button">BACK</button></a>
      </div>
    </form>

  </div>
  </div>
  <!--====form section start====-->


</body>

</html>