<?php
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
    <title>Add Students</title>
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
<link href="bootstrap/css/floating-labels.css" rel="stylesheet">

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
          <li class='active'>
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

    <form class="form-signin" method = "POST" action="">
  <div class="text-center mb-4">

      <div class="title">
        Add Students
      </div>
    </div>


  <div class="form-label-group">
    <input type="text" name="sname" class="form-control" placeholder="Student Name" required="" autofocus="">
    <label for="sname">Student Name</label>
  </div>
  
  <div class="form-label-group">
    <input type="text" name="sem" class="form-control" placeholder="Semester" required="">
    <label for="sem">Semester</label>
  </div>
  <div class="form-label-group">
    <input type="text" name="branch" class="form-control" placeholder="Branch" required="">
    <label for="text">Branch</label>
  </div>
  
  <div class="form-label-group">
    <input type="date" name="dob" class="form-control" placeholder="Date of Birth" required="">
    <label for="dob">Date of birth</label>
  </div>
  <div class="form-label-group">
    <input type="text" name="rollno" class="form-control" placeholder="Registration Number" required="">
    <label for="rollno">Registration Number</label>
  </div>

  <div class="form-label-group">
    <input type="email" name="email" class="form-control" placeholder="Email" required="">
    <label for="email">Email</label>
  </div>

<div class="form-label-group">
    <input type="tel" name="phno" class="form-control" placeholder="Phone Number" required="">
    <label for="phno">Phone Number</label>
  </div>
  
 <center> 

  <button type="submit" class="btn btn-lg btn btn-success" name="submit">Submit</button>
  <button type="reset" class="btn btn-lg btn btn-success ">Reset</button>
</center>
</form>
<?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from `student`";
        $res=mysqli_query($con,$sql);
        if($count==0)
        {
          mysqli_query($con,"INSERT INTO `STUDENT` VALUES('$_POST[sname]', '$_POST[sem]', '$_POST[branch]', '$_POST[dob]','$_POST[rollno]', '$_POST[email]', '$_POST[phno]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
           window.location="no-of-students.php"
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>


</body></html>
 