<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Admin Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="Bootstrap/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
<form class="form-signin" method="POST" action="login-exe.php"autocomplete="off">
  
  <div class="text-center mb-4">
    <p>Admin Login</p>
</div>
<div class="form-label-group">
<?php if(isset($_SESSION['ERROR_MSG'])){?>
		<div class="alert alert-danger" role="alert">
			
			<?php echo $_SESSION['ERROR_MSG'];?>
		</div>
		<?php unset($_SESSION['ERROR_MSG']);}?>
	</div>
  <div class="form-label-group">
    <input type="username" name="username" class="form-control" placeholder="username" required="" autofocus="">
    <label for="username">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="password" class="form-control" placeholder="password" required="">
    <label for="password">Password</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
</form>
</body>
</html>