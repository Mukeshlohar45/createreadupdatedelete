<?php
include "db_conn.php";

$id = $_GET["id"];
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

   $sql = "UPDATE `students` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`phone`='$phone',`gender`='$gender',`hobby`='$message',`file`='$file',`grade`='$grade' WHERE id = $id";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg= Record Updated Successfully");
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
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
   <title>PHP CRUD Application</title>
</head>

<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: aqua;">
    PHP CRUD 
  </nav>
   <div class="container">

        <h2>Update</h2>
        <?php
            $sql = "SELECT * FROM `students` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <form action="" method="POST">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstname" value="<?php echo $row['firstname'] ?>">

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastname" value="<?php echo $row['lastname'] ?>">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $row['password'] ?>">

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $row['phone'] ?>">

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" <?php echo$row['gender']=='male'?'checked':''?>>
        <label for="male">male</label>
        <input type="radio" id="female" name="gender" value="female" <?php echo $row['gender']=='female'?'checked':''?>>
        <label for="female">female</label>

        <label for="hobby">Hobby:</label>
        <input type="text" id="hobby" name="hobby" value="<?php echo $row['hobby'] ?>">

        <label for="message">Message:</label>
        <textarea id="message" name="message"><?php echo $row['message'] ?></textarea>
        <img src="<?php echo $row['file'] ?>" max-width="200px"/>
        <label for="file">File:</label>
        <input type="file" id="file" src="<?php echo $row['file']?>" name="file">
        
        <label for="grade">Grade:</label>
        <select id="grade" name="grade" required>
            <option value="">select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        <button name="submit" class="btn btn-primary" type="submit">Update</button>
    </form>
</div>
</body>

</html>