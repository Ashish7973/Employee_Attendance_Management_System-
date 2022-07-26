<footer>
  <div class="container">
      <div class="footer-box">
	  <?php 
	        date_default_timezone_set('Asia/Kolkata');
	           $date = date("Y-m-d");
               $newDate = date("d-m-Y", strtotime($date));
      ?>			   
               
        <p>Copyright &copy; <?php echo date("Y"); ?>GRP_70 IIITA 2022</p>
		</div>
  </div>
</footer>
</body>
</html>