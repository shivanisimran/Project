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
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>
	

	<section>
	<div class="col-sm-12">
		<div class="col-sm-4"></div>
		
			<div >
				<div class="col-sm-4">
				<h1 style="text-align: center; margin-top: 15rem; color: green; font-family: 'Palette Mosaic', cursive;">
					<?php print_r($_POST['club_name'])?>
				</h1>

				<!-- <div class="login-form"> -->
					<form class="contain-login" id="form"  method="post" style="margin:auto;">
						
						<div class="form-group" style="display: grid; grid-template-columns: 1fr 1fr;">
						    <div class="form-group" >
						     <input type="submit"  style="width: 75%;" name="add" value="Add Description" class="btn btn-success btn-block" onclick="fun1()">
					        </div>	

					        <div class="form-group">
						     <input type="submit" style="width: 75%;" name="add" value="Add Coordinator" class="btn btn-success btn-block" onclick="fun2()">
					        </div>	
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
	function fun1(){
        window.location.href = "addDescription.php";
	}
	function fun2(){
        window.location.href = "addCoordinator.php";
	} 
	

</script>

<script type="text/javascript">
	$('form').submit (function(e){
		e.preventDefault();
	});
</script>

</body>
</html>