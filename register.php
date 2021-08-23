<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
       session_start();
       include ('db.php');
       if(isset($_POST['register'])) {

            $name= $_POST['name'];
            $email= $_POST['email'];
            $password= $_POST['password'];
 
            if($name && $email && $password) {
                    $query = "INSERT INTO `users`(`name`,`email`,`password`) VALUES ('$name','$email','$password')";
                    mysqli_query($connect,$query);
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['password']= $password;
                    header('location:login.php');
                }
                else {
                    echo "All text fields are required";
                }
        }
    ?>
  <div class="container">
    <div class="card mt-4 " style="width: 25rem;">
      <div class="card-header text-center">Register Form</div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="InputName">Name</label>
                    <input name="name" type="name" class="form-control" id="InputName">
                </div>
                <div class="form-group">
                    <label for="InputEmail">Email address</label>
                    <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input name="password" type="password" class="form-control" id="InputPassword">
                </div>
                <button name="register" type="submit" class="btn btn-primary" style="width: 22.5rem;">Sign up</button>
            </form>
        </div>
        <div class="card-footer">
          <div class="text-center">
            If you already have an account ? <a href="login.php">Login here</a>
          </div>
        </div>
    </div>
  </div>
</body>
</html>