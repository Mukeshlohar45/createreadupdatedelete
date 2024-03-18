<?php
include "db_conn.php";

$targetDir = "uploads/"; 

if (isset($_POST["submit"])) {
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $phone = $_POST['phone'];
   $gender = $_POST['gender'];
   $hobby = $_POST['hobby'];
   $message = $_POST['message'];
   $file = $_POST['file'];
   $grade = $_POST['grade'];

   $sql = "INSERT INTO students (id, firstname, lastname, email, password, phone, gender, hobby, message, file, grade) VALUES (NULL,'$firstname','$lastname','$email', '$password','$phone', '$gender', '$hobby', '$message', '$file', '$grade')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
   </script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js">
   </script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js">
   </script>
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/validate.js"></script>
   <title>PHP CRUD Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: aqua;">
    PHP CRUD 
  </nav>

   <div class="container">

        <h2>Registration Form</h2>
        <form id="insertForm" action="" method="POST">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstname" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="cPassword" name="cpassword" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>

        <label for="hobby">Hobby:</label>
        <input type="text" id="hobby" name="hobby">

        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        
        <label for="file">File:</label>
        <input type="file" id="file" name="file">
        
        <label for="grade">Grade:</label>
        <select id="grade" name="grade" required>
            <option value="">Select Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        
        <button name="submit" type="submit">Register</button>
        <a class="btn btn-danger" href="index.php">Cancel</a>

    </form>
</div>
</body>

</html>