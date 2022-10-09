<?php
include('read-script.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP CRUD Operations</title>
  <style>
    table,
    td,
    th {
      border: 2px solid #ddd;
      text-align: left;
      /* border-radius: 10px; */
    }

    .table-data {
      width: 80%;
      float: none;
      margin: auto;
    }

    table {
      /* border-collapse: collapse; */
      max-width: 100%;
      width: 100%;
      border: 3px solid #434140;
      border-radius: 10px !important;
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

    th,
    td {
      padding: 10px;
    }

    th {
      padding: 15px;
      background-color: #b4b4b4;
    }

    body {
      overflow-x: hidden;
    }

    * {
      box-sizing: border-box;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c4387bc5af.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="table-data">

    <div class="list-title text-center pt-5">
      <h2>USER LIST</h2>
    </div>

    <a class="add-btn-a" href="create-form.php"><button class="add-btn" type="button">Create User</button></a>
    <table border="1">
      <tr>
        <th>S.N</th>
        <!-- <th>Photo</th> -->

        <th>Student Name</th>
        <th>Address</th>
        <th>Student Phone</th>

        <th>Guardian Name</th>
        <th>Guardian Phone</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
      <?php
      if (count($fetchData) > 0) {
        $sn = 1;
        foreach ($fetchData as $data) {
      ?> <tr>
            <td class="text-center"><?php echo $sn; ?></td>
            <!-- <td>
              <img src="./image/<?php echo $data['student_photo']; ?>"  >
            </td> -->
            <td><?php echo $data['student_name']; ?></td>
            <td><?php echo $data['home_address']; ?></td>
            <td><?php echo $data['student_phone']; ?></td>
            <td><?php echo $data['guardian_name']; ?></td>
            <td><?php echo $data['guardian_phone']; ?></td>

            <td class="text-center"><a href="update-form.php?edit=<?php echo $data['id']; ?>"><i class="fa-solid fa-pen-to-square h4"></i></a></td>
            <td class="text-center"><a href="delete-script.php?delete=<?php echo $data['id']; ?>"><i class="fa-solid fa-trash h4"></i></a></td>
          </tr>

        <?php $sn++;
        }
      } else { ?>
        <tr>
          <td colspan="7">No Data Found</td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</body>

</html>