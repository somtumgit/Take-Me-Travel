<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login: Take Me Travel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
  <style>
    html,
    body {
      height: 100%;
    }

    body {
      /* display: -ms-flexbox;
      display: -webkit-box;
      display: flex;
      -ms-flex-align: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center; */
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
      text-align: center;
    }
    .msg {
      font-size: 32px;
      width: 100%;
      /* border:1px solid red; */
    }
    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .checkbox {
      font-weight: 400;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>
<body>
<?php
   ob_start();
   session_start();
?>

<?
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<?php
  $msg = '';

  if (isset($_POST['login']) && !empty($_POST['username']) 
      && !empty($_POST['password'])) {
      if ($_POST['username'] == 'Take Me Travel' && 
        $_POST['password'] == 'Take Me Travel') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'mint';
        
        $msg = 'You have entered valid use name and password';
        header('Refresh: 2; URL = index.php');
      }else {
        $msg = 'Wrong username or password';
      }
  }
?>
  <div class="msg"><?php echo  $msg . "<br>"; ?></div>
  <form class="form-signin" method="post">
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="username" type="text" id="username" class="form-control" placeholder="Email address" required="" autofocus="" >
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <input name="login" class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">
    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    <p class="mt-1"> Click here to clean <a href = "logout.php" tite = "Logout">Session.</p>
  </form>  

</body>
</html>
