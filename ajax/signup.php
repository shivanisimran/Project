<?php

	include('../connection.php');

	//-->> trim all the data using a trim function
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	// $c_value= $_POST['c_value'];
	$email= $_POST['email'];
	$uid=$_POST['uid'];
	// echo $uname.' '.$pass.' '.$c_value.' '.$email;

	//-->> validate email and username 



	if(validate()){

		// echo 3;
		//preparing a query
		//we will be checking both email and password
		
		$check=$db->prepare('SELECT * FROM Signup_form_data WHERE  email = ? OR user_name = ?');
		$data=array($email,$uname); //for below 'if' statement
		
		//we want email and username both unique ... thats why we used email and username in prepare query
		
		if($uid!=""){
			$check=$db->prepare('SELECT * FROM Signup_form_data WHERE  email = ? OR user_name = ? OR uid = ?');
			$data=array($email,$uname,$uid);
		}

		//execute the query by combining data in the check table
		$check->execute($data);
		if($check->rowcount()==1){ //count will always be 0 or 1
			//account already exists
			echo 0; //->> 0 for already exist account
		}
		else{
			
			//we will create a new account
			//encrypt the password 
			//-->>> $password1_hash=password_hash($pass,PASSWORD_DEFAULT); <-- bhaiya file

			//creating a new query
			$query=$db->prepare("INSERT INTO Signup_form_data(user_name,password,email,uid) VALUES (?,?,?,?)");
			$data=array($uname,$pass,$email,$uid);

			//execute 
			if($query->execute($data)){
				//->>> starting a session -- bhaiya file
				// $_SESSION['user_name'] = $uname;	
				echo 1;
			}
			else echo 2;


		}

	}

	//trim function
	function trim_data(){
		//-->> to complete this function
	}

	function validate(){
		//-->> to complete this function
		return true;
	}

?>