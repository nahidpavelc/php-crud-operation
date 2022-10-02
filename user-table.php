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
      border: 1px solid #ddd;
      text-align: left;
    }

    .table-data {
      width: 65%;
      float: none;
      margin: auto;
    }

    .table-data table {
      border-collapse: collapse;
      max-width: 100%;
      width: 100%;
      /* border: 2px solid black; */
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
      border: 3px solid #434140;
    }

    .add-btn:hover {
      border: 3px solid black;
      background-color: #0A58CA;
      color: #ffffff;
    }

    .add-btn-a {
      text-decoration: none;
      color: #ffffff;
    }

    th,
    td {
      padding: 15px;
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
        <th>Full Name</th>
        <th>Email Address</th>
        <th>City</th>
        <th>Country</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      <?php
      if (count($fetchData) > 0) {
        $sn = 1;
        foreach ($fetchData as $data) {
      ?> <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $data['full_name']; ?></td>
            <td><?php echo $data['email_address']; ?></td>
            <td><?php echo $data['city']; ?></td>
            <td><?php echo $data['country']; ?></td>

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