<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=BIZ+UDGothic&family=Palette+Mosaic&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet"> -->
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>
	

	<section>
	<div class="col-sm-12">
		<div class="col-sm-4"></div>
		
			<div >
				<div class="col-sm-4">
				<h1 style="font-weight: bold; color: green; text-align: center; font-family: 'BIZ UDGothic', sans-serif;
	             ">
 					<?php
 					    session_start(); 
 						print_r($_SESSION['name'])?>
      			</h1>

				<!-- <div class="login-form"> -->
					<form class="contain-login" id="form"  method="post" style="margin:auto;">
						
						    
			        <div class="form-group">
				     <input type="submit"  name="add" value="Add Coordinator" class="btn btn-success btn-block" onclick="fun2()">
			        </div>	
<!--                   
 -->
					</form>
				<!-- </div> -->
			</div>

		</div>
		<div class="col-sm-4"></div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</section>
<script type="text/javascript">
	
	function fun2(){
        open("coordinator.php","_self");
	} 
	

</script>

<script type="text/javascript">
	$('form').submit (function(e){
		e.preventDefault();
	});
</script>

</body>
</html>