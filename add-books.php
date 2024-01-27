<?php
session_start();
if(!$_SESSION['auth']){
	header('location:login.php');
}
include ("database.php");
?>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add Books</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="bootstrap/css/main.css">
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="bootstrap/css/floating-labels.css" rel="stylesheet">
   
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="bootstrap/js/main.js"></script>

		
	</head>
	<body>
		
		<div class="side-nav">
			<div class="logo">
				
				<span>OLM</span>
			</div>
			<nav>
				<ul>
					<li>
						<a href="add-students.php">
							<span><i class="fa fa-users"></i></span>
							<span>Add Students</span>
						</a>
					</li>
					<li>
						<a href="no-of-students.php">
							<span><i class="fa fa-users"></i></span>
							<span>Total Students</span>
						</a>
					</li>
					<li>
						<a href="totalbooks.php">

							<span><i class="fa fa-book"></i></span>
							<span>Total Books</span>
						</a>
					</li>
					<li class="active">
						<a href="add-books.php">
							<span><i class="fa fa-plus"></i></span>
							<span>Add Books</span>
						</a>
					</li>
					<li>
						<a href="book-approve.php">
							<span><i class="fa fa-bookmark"></i></span>
							<span>Approve Books</span>
						</a>
					</li>
					<li>
						<a href="logout.php">
							<span><i class="fa fa-user-times"></i></span>
							<span>Logout</span>
						</a>
					</li>

				</ul>
			</nav>
		</div>
                <?php
                if(isset($_SESSION['auth']))

                { 

                    echo "Welcome ".$_SESSION['auth']; 
                }
                ?>
           <form class="form-signin" method = "POST" action="">
            <div class="text-center mb-4">

			<div class="title">
				ADD NEW BOOKS
			</div>
		</div>

  
    
    


	<div class="form-label-group">
    <input type="text" name="bid" class="form-control" placeholder="Book ID" required="" autofocus="">
    <label for="bid">Book ID</label>
  </div>
  
  <div class="form-label-group">
    <input type="text" name="name" class="form-control" placeholder="Book Name" required="">
    <label for="name">Book Name</label>
  </div>
  <div class="form-label-group">
    <input type="text" name="author" class="form-control" placeholder="author" required="">
    <label for="text">Author</label>
  </div>
  
  <div class="form-label-group">
    <input type="text" name="edition" class="form-control" placeholder="Edition" required="">
    <label for="edition">Edition</label>
  </div>
  <div class="form-label-group">
    <input type="text" name="status" class="form-control" placeholder="Status" required="">
    <label for="status">Status</label>
  </div>

  <div class="form-label-group">
    <input type="text" name="quantity" class="form-control" placeholder="Quantity" required="">
    <label for="quantity">Quantity</label>
  </div>

<div class="form-label-group">
    <input type="text" name="department" class="form-control" placeholder="Department" required="">
    <label for="department">Department</label>
  </div>
  <center>
<button type="submit" class="btn btn-lg btn btn-success" name="submit">Submit</button>
  <button type="reset" class="btn btn-lg btn btn-success ">Reset</button>        
    </center>
    </form>
  </div>
<?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['auth']))
      {
        mysqli_query($con,"INSERT INTO books VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[author]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;");
        ?>
        <script type="text/javascript">
           window.location="totalbooks.php"
          </script>
          <?php

        }
    }
        ?>
    </div>
    </body>
    </html>
