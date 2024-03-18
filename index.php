<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP CRUD Application</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js">
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
  <script src="assets/js/datatable.js"></script>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: aqua;">
    PHP CRUD 
  </nav>

  <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <a href="insert.php" class="btn btn-dark mb-3">Add New</a>
  <table id="table" class="table table-hover text-center">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Phone</th>
        <th scope="col">Gender</th>
        <th scope="col">Hobby</th>
        <th scope="col">Message</th>
        <th scope="col">File</th>
        <th scope="col">grade</th>
        <th scope="col">Action1</th>
        <th scope="col">Action2</th>

      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM `students`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
      <tr>
        <td>
          <?php echo $row["id"] ?>
        </td>
        <td>
          <?php echo $row["firstname"] ?>
        </td>
        <td>
          <?php echo $row["lastname"] ?>
        </td>
        <td>
          <?php echo $row["email"] ?>
        </td>
        <td>
          <?php echo $row["password"] ?>
        </td>
        <td>
          <?php echo $row["phone"] ?>
        </td>
        <td>
          <?php echo $row["gender"] ?>
        </td>
        <td>
          <?php echo $row["hobby"] ?>
        </td>
        <td>
          <?php echo $row["message"] ?>
        </td>
        <td>
          <?php echo $row["file"] ?>
        </td>
        <td>
          <?php echo $row["grade"] ?>
        </td>
        <td>
          <a href="editdata.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">Edit</a>
        </td>
        <td>
          <a href="deletedata.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php
        }
        ?>
    </tbody>
  </table>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>