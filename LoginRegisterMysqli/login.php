<?php
// start session di mulai
session_start();

// masukan koneksi.php
include_once('koneksi.php');

// buat object
$database = new koneksi();

if(isset($_SESSION['is_login']))
{
    header('location:homepage.php');
}

if(isset($_COOKIE['username']))
{
    $database->relogin($_COOKIE['username']);
    header('location:homepage.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // checklist isset
    if(isset($_POST['remember']))
    {
        $remember = TRUE;
    } else{
        $remember = FALSE;
    }

    // kirim data ke class koneksi pada function login
    if($database->login($username, $pass, $remember))
    {
        header('location:homepage.php');
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>LOGIN | PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
          <div class="col-5 mx-auto">
              <form action="" method="post">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="text-center font-weight-bold border-bottom pb-3 mb-4">Login</h4>
                          <div class="form-group">
                            <label for="user">Username</label>
                            <input type="text" name="username" id="user" class="form-control" placeholder="username" required>
                          </div>
                          <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="text" name="pass" id="pass" class="form-control" placeholder="password" required>
                          </div>
                          <div class="form-check mb-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="remember" id="" value="remember-me" checked>
                              Remember
                            </label>
                          </div>
                          <a href="register.php" class="btn btn-success w-100 mb-3">Register</a>
                          <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                    </div>
                  </div>
              </form>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>