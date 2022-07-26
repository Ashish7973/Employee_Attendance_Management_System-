<?php

include ("index_header.php");

?>
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
    margin: 2px 200px;
}
.color_white {
    background-color: #7ff3a8;
}
.col-sm-6-mod {
    width: 42%;
    margin: 5% 12% -2% 31%;
    box-shadow: 0px 9px 20px 8px #8ee3e3;
    border-radius: 10rem;
    /* position: absolute; */
}
.jumbo_l {
	
	padding: 5%;
	/* background-image: url("assets/bg.png"); */
     background-repeat:no-repeat;
	 background-position:left; 
	 background-size:cover; 
	 padding:10px;
     margin:left;
	height: auto;
}
.form-sign {
    max-width: 420px;
    padding: 30px 38px 66px;
    display: inline-block;
    margin: 0px 162px;
    background-color: #ffdefb;
    border: 3px solid rgb(18 13 13 / 10%);
    border-radius: 64px;
}
.form-sign2 {
    max-width: 420px;
    padding: 30px 38px 66px;
    display: inline-block;
    margin: 0px;
    background-color: #ffdefb;
    border: 3px solid rgb(18 13 13 / 10%);
    border-radius: 64px;
}
element.style {
}
.btn-l {
    padding: 9px 116px;
    font-size: 18px;
    line-height: 1.333333;
    border-radius: 40px;
    margin: 3px -14px;
}
.btn-l:hover{
    background-color:#e18e8e;
}
.btn-l2 {
    padding: 9px 116px;
    font-size: 18px;
    line-height: 1.333333;
    border-radius: 40px;
    margin: 2px -3px;
}
.btn-l2:hover{
    background-color:#e18e8e;
}
.con{
    width: 94%;
    margin: auto;
}
.tm{
    text-align:center;
}
.hh{
    position: sticky;
}
</style>



<!-- <div class="container-fluid jumbo"> -->
  <body>

 <h1 class="hh">Employee Attendance System IIITA</h1>
 <!-- <div class="mb-2">
 <h3 class="text-center ">A CMS for Complete Attendace System</h3>
 </div> -->
 <!-- <div class="container-fluid mx-auto"> -->
 <!-- <div class="rows">
 
  <div class="col-sm-6 color_white col-sm-6-mod">
    <h3 class="text-center">Admin Dashboard</h3>
     <a class="a_color" href="login.php"><button type="button" class="btn btn-primary btn-lg">Admin</button></a>
  
  </div>
  <div class="col-sm-6 color_white col-sm-6-mod">
   <h3 class="text-center">Employee Dashboard</h3>
    <a class="a_color" href="E_login.php"><button type="button" class="btn btn-primary btn-lg">Employee</button></a>
	 
  </div>
  
 </div>
 
 </div> -->
 <!-- <div class ="container-fluid jumbo_l"> -->
	<div class="wrapper">
		<form action="login.php" method="post" name="Login_Form" class="form-sign">       
		    <h3 class="form-signin-heading">Please Sign In As Admin</h3>
            <div class="tm">
            <?php
date_default_timezone_set("Asia/Kolkata");
$date = date('m/d/Y h:i:s a', time());
echo $date;  
?>
</div>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control1 form-control inputlogintext" name="username" placeholder="Username" required="" autofocus="" />
			  <br>
			  <input type="password" class="form-control1 form-control inputloginpass" name="password" placeholder="Password" required=""/>     		  
			  <a href="forgetpassword.php">forgot password?</a>	
              <br>
              <br>
			  <button class="btn-l"  name="login" value="Login" type="Submit">Admin Login</button>  		
			  <!-- <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Employee Login</button>	 -->
              </form>	
              <form action="user.php" method="post" name="Login_Form" class="form-sign2">       
		    <h3 class="form-signin-heading">Please Sign In As Employee</h3>
            <div class="tm">
            <?php
            date_default_timezone_set("Asia/Kolkata");
            $date = date('m/d/Y h:i:s a', time());
            echo $date;  
            ?>
            </div>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control1 form-control inputlogintext" name="username" placeholder="Username" required="" autofocus="" />
			  <br>
			  <input type="password" class="form-control1 form-control inputloginpass" name="password" placeholder="Password" required=""/>     		  
			  <a href="forgetpassword.php">forgot password?</a>	
              <br>
              <br>
              <button class="btn-l"  name="login" value="E_Login" type="Submit">Employee Login</button>		
			  <!-- <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Employee Login</button>	 -->
		</form>	
			
	<!-- </div>	 -->
</div>
<!-- <div class ="container-fluid jumbo_l">
	<div class="wrapper">
			
	</div>	
</div> -->
</body>
   
<!-- </div> -->



<!-- <?php

include ("footer.php"); 

?> -->

<?php 

//make connection
$con = new mysqli('localhost','root','','attendance');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}

if(isset($_POST['login'])) {
	
     $user_name = $_POST['username'];
     $user_password = $_POST['password'];
	 
	 $encrypt = md5($user_password);
	 
	 $login_query = "SELECT `name`, `password` FROM `admin` WHERE username='$user_name' AND password='$user_password'";
	 
	  $run = mysqli_query($con,$login_query);
	  
	  if(mysqli_num_rows($run)>0) { 
		   
		   $_SESSION['name'] = $user_name;
		   
		   echo "<script>window.open('admin.php','_self')</script>";
	          }
	  else
  		  {
		  echo "<script>alert('Username or password is wrong')</script>";
	       }
	  
   }

   if(isset($_POST['E_login'])) {
	
    $user_name = $_POST['username'];
    $user_password = $_POST['password'];
    
    $encrypt = md5($user_password);
    
    $login_query = "SELECT `name`, `password` FROM `admin` WHERE username='$user_name' AND password='$user_password'";
    
     $run = mysqli_query($con,$login_query);
     
     if(mysqli_num_rows($run)>0) { 
          
          $_SESSION['name'] = $user_name;
          
          echo "<script>window.open('user.php','_self')</script>";
             }
     else
           {
         echo "<script>alert('Username or password is wrong')</script>";
          }
     
  }
	  ?>