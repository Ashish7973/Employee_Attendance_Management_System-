<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: index.php"); 
    }
 else {

?>

<?php include ("header_Ad.php") ?>
<style>
.col-sm-6-mod {
    width: 42%;
    margin: 4% 4% 3% 4%;
    box-shadow: 8px 17px #816d6d;
    border-radius: 10rem;
    /* position: absolute; */
}
.color_white {
    background-color: #7ff3a8;
}
body {
    padding: 5%;
    background-image: url(assets/bg11.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 0px;
    margin: 0px;
    height: 100%;
}
h1 {
    width: 100%;
    margin: auto;
    background: #e38080;
    text-align: center;
    padding: 12px;
}
.btn-lg {
    padding: 9px 27px;
    font-size: 18px;
    line-height: 1.333333;
    border-radius: 40px;
    margin: 2px 206px;
}
.color_white {
    background-color: #7ff3a8;
}
.col-sm-6-mod {
    width: 42%;
    margin: 5% 16% -2% 31%;
    box-shadow: 0px 9px 20px 8px #8ee3e3;
    border-radius: 10rem;
    /* position: absolute; */
}
.lst {
    list-style-type: none;
    border: 10px solid white;
    height: 100%;
    text-align: left;
    border-bottom-right-radius: 30px;
    background-color: #e38080;
    border-top-right-radius: 30px;
    margin: left;
    width: 25%;
    padding: -4px;
}
/* .lst li{
  display:inline;
  float: left;
} */
.lst li a{
  display: block;
  /* float:left; */
  color: white;
  text-align: left;
  padding: 22px;
  text-decoration: none;
  font-size:20px;
}
.lst li a:hover {
  background-color: #111;
  border-radius:15px;
}
.btnn:hover {
  background-color: #111;
  border-radius:15px;
}
</style>
<!-- <div class="col-sm-12"> -->
   <h1 class="text-center" >Welcome to Admin Page</h1>
<!-- </div> -->
<br>

<body>
<!-- <div class="col-sm-12 jumbo_user">  -->
   <!-- <h1 class="text-center" >Dashboard</h1>
   <br> -->
   <!-- <a class="a_color" href="logout.php"><button type="button" class="btn btn-primary btn-lg">logout</button></a> -->

   <!-- <a class="a_color" href="attendancepanel.php"><button type="button" class="btn btn-primary btn-lg">Take Attendance</button></a> -->
   
   <!-- <a class="a_color" href="viewattendanceadmin.php"><button type="button" class="btn btn-primary btn-lg">Today's attendance</button></a> -->
   
   
   <!-- <a class="a_color" href="viewattendanceadminfull.php"><button type="button" class="btn btn-primary btn-lg">complete attendance</button></a> -->
   
   <!-- <a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Insert New Employee</button></a> -->
   
   <!-- <a class="a_color" href="insertadmin.php"><button type="button" class="btn btn-primary btn-lg">Insert New Admin</button></a> -->
   
   
   <!-- <a class="a_color" href="employee.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">View Employee Details</button></a> -->
   
   <!-- <a class="a_color" href="viewadmin.php?view_admin=view_admin"><button type="button" class="btn btn-primary btn-lg">View Admin Details</button></a> -->
   
   <ul class="lst">
      <li><a href="attendancepanel.php">Take Attendance</a></li>
      <li><a href="viewattendanceadmin.php">Today's attendance</a></li>
      <li><a href="viewattendanceadminfull.php">complete attendance</a></li>
      <li><a href="employee.php?insert_employee=insert_employee">Insert New Employee</a></li>
      <li><a href="insertadmin.php">Insert New Admin</a></li>
      <li><a href="employee.php?view_employee=view_employee">View Employee Details</a></li>
      <li><a href="viewadmin.php?view_admin=view_admin">View Admin Details</a></li>
      </ul>
   
   </body>
  

<?php } ?>



<!-- <?php include("footer.php") ?> -->