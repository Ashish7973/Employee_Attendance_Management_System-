<?php include("header_Em.php"); ?> 

<!-- <style>
.btnn {
  background-color: pink;
  margin: 0px 59px;
  color: #0c0c0c;
  text-align: center;
  padding: 9px 16px;
  border: none;
  border-radius:15px;
}
.btnn:hover {
  background-color: deeppink;
  border-radius:15px;
}
</style> -->
<!-- <a href="user.php"><button class="btnn" type="Submit">back</button></a> -->
    <div class="container-fluid" style="background-color:lavenderblush";>
<br>
<br>

          <h1 class="h1_index text-center">Employee Details</h1>
		   <br>
<h4 class="text-center">Employee can find there EID here and can use EID to view there attendance</h4>
        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Emp_Id</th>
        <th>Name</th>
		<th>Email</th>
		<th>Department</th>
      </tr>
    </thead>
    <tbody>
		

<?php


//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
//select database


$sql="SELECT * FROM `employee_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['email']; ?></td>
		<td><?php echo $post['contact_no']; ?></td>
		<td><?php echo $post['department']; ?></td>
	   </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<!-- <?php include("footer.php"); ?>    -->
