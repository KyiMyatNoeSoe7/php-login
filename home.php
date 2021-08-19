<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
      session_start();
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
          header('location:login.php');
        }
    ?>
  <div class="container">
    <ul class="nav bg-dark justify-content-end">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="logout.php">Logout</a>
      </li>
    </ul>
    <span class="d-block p-5 bg-secondary text-white text-center mt-1">Home Page</span>
    <div class="row mt-4">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>


  </div>
</body>
</html>