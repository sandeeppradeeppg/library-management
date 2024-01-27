<?php
session_start();
include('database.php');
if(!$_SESSION['auth']){
	header('location:login.php');
}
?>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Total Students</title>
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
		<div class="header">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>ONLINE LIBRARY MANAGENMENT</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
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
					<li class='active'>
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
		
<div class="main-content">
			<div class="title">
				NUMBER OF STUDENTS
			</div>
<?php
	$res=mysqli_query($con,"SELECT sname,sem,branch,rollno,email,phno FROM `student`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				echo "<th>"; echo "Student Name";	echo "</th>";
				echo "<th>"; echo "Semester";  echo "</th>";
				echo "<th>"; echo "Branch";  echo "</th>";
				echo "<th>"; echo "Roll";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['sname']; echo "</td>";
				echo "<td>"; echo $row['sem']; echo "</td>";
				echo "<td>"; echo $row['branch']; echo "</td>";
				echo "<td>"; echo $row['rollno']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['phno']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		

	?>
</div>
</body>
</html>
