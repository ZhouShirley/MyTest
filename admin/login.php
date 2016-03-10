<?php 
# Database Connection
include('../config/connection.php');
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Mytest Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('config/css.php');?>
	
	<?php include('config/js.php');?>
</head>
	
<body>

	<?php //include(D_TEMPLATE.'/navigation.php'); //Page Navigation ?>
	
	<div class="container">
	<h1>Login</h1>
	
	<div class="row">
		
		
		<div class="col-md-4 col-md-offset-4">
			
			<form>
			
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  
		  
		  <!--
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Check me out
		    </label>
		  </div>
		  -->
		  
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
			
		</div>
		
		
		
	</div>
		
		
	
	</div>
		
	<?php //include(D_TEMPLATE.'/footer.php'); //Page Footer ?>
   
    <?php //if($debug == 1){ include('widgets/debug.php');}?>
    	
</body>
</html>