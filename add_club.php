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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body style="padding: 15rem;">
	<section>
	<div class="col-sm-12">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="contain-login" >
				<!-- <div class="login-form"> -->
					<form id="form" method="post" action="ajax/add_club.php">
						
						<div class="form-group" >
							<input class="form-control" type="club_name" name="club_name" id="club_name" placeholder="Club name" style="width: 100%;">
							<br>
							<div class="form-group">
			                    <textarea class="form-control" id="addTxt" rows="3" name="description"  placeholder="Description"></textarea>
			                </div>


							<br>
						    <div class="form-group" style="float: right; color: gray;">
						     <input type="submit" name="add" value="Add" class="btn btn-success btn-block" >
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
	
</body>
</html>