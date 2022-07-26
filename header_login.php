<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Attendance Management System IIITA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="assets/main.css">
  <link rel="stylesheet" href="assets/fontawesome.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
</head>
<style>
  .btnn {
    background-color: transparent;
    margin: -4px 24px;
    color: white;
  text-align: center;
  padding: 14px 16px;
  border:none;
  /* text-decoration: none; */
}
.navbar-inverse {
    background-color: grey;
    font-size:30px;
    color: blue;
}
.navbar-home{
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.navbar-home li{
  display:inline-block;
  /* width:15%; */
  float: left;
}
.navbar-home li a{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.navbar-home li a:hover {
  background-color: #111;
  border-radius:15px;
}
.btnn:hover {
  background-color: #111;
  border-radius:15px;
}
</style>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a class="navbar-home" href="index.php">Home</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-home">
      <li><a href="index.php">Home</a></li>
        <li><a href="user.php">Employee</a></li>
        <li><a href="admin.php">Admin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <a class="12" href="login.php"><button class="btnn">login</button></a>
       <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>  -->
       <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  -->
      </ul>
    </div>
  </div>
</nav>