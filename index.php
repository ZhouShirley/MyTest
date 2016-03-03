<?php include('config/setup.php');?>
 
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page['title'].' | '.$site_title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('config/css.php');?>
	
	<?php include('config/js.php');?>
</head>
	
<body>

	<?php include(D_TEMPLATE.'/navigation.php'); //Page Navigation ?>
	<div class="container">
			<h1><?php echo $page['header'];?> </h1>	
			<?php echo $page['body_formatted'];?>
			<!-- for use of debug -->
			<?php if(isset($_GET['debug']) == 1){ ?>
			<pre>
			<?php print_r($page);?>
			</pre>
			<?php }?>
			<!-- for use of debug end -->
	</div>
		
	<?php include(D_TEMPLATE.'/footer.php'); //Page Footer ?>
   
    <?php if($debug == 1){ ?>
    	
    <div id="console-debug">
    	Test Debug Window   	
    </div>		
    <?php }?>
</body>
</html>