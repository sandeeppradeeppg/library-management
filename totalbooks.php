<?php 
include('database.php');
session_start();
if(!$_SESSION['auth']){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Total Books</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="bootstrap/css/main.css">
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


   
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
					<li class='active'>
						<a href="totalbooks.php">

							<span><i class="fa fa-book"></i></span>
							<span>Total Books</span>
						</a>
					</li>
					<li>
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

	<div class="text-center mb-4">

<div id="main">
	<div class="container">
  <div class="row">
    <div class="col-lg">
      
    </div>
    <div class="col-sm">
     <div class="srch">
		<form method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search books.." required="">
				<div>
				<button  type="submit" name="submit" class="btn btn-success">Search</button>
		</div>
		</form>
		<form  method="post" name="form1">
			
				<input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="">
				<div>	
				<button type="submit" class="btn btn-lg btn btn-success" name="submit1">Delete</button>
		</div>
		</form>
	</div>
    </div>
    <div class="col-sm">
    
    </div>
  </div>
</div>
	

	<h2>List Of Books</h2>
	
	<div class="container">
  <div class="row">
    <div class="col-lg">
      
    </div>
    <div class="col-lg">
      <?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($con,"SELECT * from books where name like '%$_POST[search]%' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No book found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['author']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}

		else
		{
			$res=mysqli_query($con,"SELECT * FROM books ORDER BY `books`.`name` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['author']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}
		if(isset($_POST['submit1']))
		{
			if(isset($_SESSION['auth']))
			{
				mysqli_query($con,"DELETE from books where bid = '$_POST[bid]'; ");
				?>
					<script type="text/javascript">
						alert("Delete Successful.");
					</script>
				<?
			}
			else
			{
							?>
					<script type="text/javascript">
						alert("Please Login First.");
					</script>
				<?php
			}
		}
	?>
    </div>
    <div class="col-lg">
      
    </div>
  </div>
</div>
</body>
</html>