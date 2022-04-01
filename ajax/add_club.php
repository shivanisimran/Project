<?php
    $con = mysqli_connect("localhost","root","","club");
    print_r("add_club");
    $name=$_POST['club_name'];
    $desc=$_POST['description'];
    session_start();
    $_SESSION['name'] = $_POST['club_name'];
    if(isvalid()){
          

      $insert = "INSERT INTO `club_details` (`club_name`, `description`) VALUES ('$name','$desc')";
      $query=mysqli_query($con,$insert);
      if($query)
      {
        // alert("Successfully inserted");
        header('Location: ../addCoordinator.php');
      }
      else
        echo ("failed insertion");
    }
   
    function isvalid(){
      return true;
    }
  

?>

