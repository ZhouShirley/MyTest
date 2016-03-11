<?php 
# start session:
session_start();

if(!isset($_SESSION['username'])){
	
	header('Location: login.php');
}

?>



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
	
	<div class="row">
		<div class= "col-md-3">
			<div class ="list-group">
							
			<?php 
			
			$q = "SELECT * FROM pages ORDER BY title ASC";
			$r = mysqli_query($dbc, $q);
			
			while ($page_list = mysqli_fetch_assoc($r)){ 
				$blurb = substr($page_list['body'],0,20);
				
				
				
				?>
				<a class ="list-group-item" href = "#">
					<h4 class="list-group-item-heading"><?php echo $page_list['title']; ?></h4>
					<h4 class="list-group-item-text"><?php echo $blurb; ?></h4>
					
				</a>
				
				<?php }?>
			</div>
				
		</div>
		
		<div class= "col-md-9">
			<p>page form</p>
			
			
		</div>
	</div>
		
	<?php include(D_TEMPLATE.'/footer.php'); //Page Footer ?>
   
    <?php if($debug == 1){ include('widgets/debug.php');}?>
    	    
</body>
</html>