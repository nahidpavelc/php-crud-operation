<?php
include('update-script.php');
?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP CRUD Operations</title>
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
      /* border-radius: 10px; */
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
      /* border-radius: 10px; */
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
      background-color: #3d3c3c;
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c4387bc5af.js" crossorigin="anonymous"></script>
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

      <label>Full Name</label>
      <input type="text" placeholder="Enter Full Name" name="full_name" required value="<?php echo isset($editData) ? $editData['full_name'] : '' ?>">

      <label>Email Address</label>
      <input type="email" placeholder="Enter Email Address" name="email_address" required value="<?php echo isset($editData) ? $editData['email_address'] : '' ?>">

      <label>City</label>
      <input type="city" placeholder="Enter Full City" name="city" required value="<?php echo isset($editData) ? $editData['city'] : '' ?>">

      <label>Country</label>
      <input type="text" placeholder="Enter Full Country" name="country" required value="<?php echo isset($editData) ? $editData['country'] : '' ?>">

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