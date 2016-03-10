<?php include('config/setup.php');?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Mytest Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('config/css.php');?>
	
	<?php include('config/js.php');?>
</head>
	
<body>

	<?php include(D_TEMPLATE.'/navigation.php'); //Page Navigation ?>
	<h1>Admin Dashboard</h1>
		
	<?php include(D_TEMPLATE.'/footer.php'); //Page Footer ?>
   
    <?php if($debug == 1){ include('widgets/debug.php');}?>
    	    
</body>
</html>