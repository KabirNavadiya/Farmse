<?php

// $submit=isset($_POST['submit'])?$_POST['submit']:"";
// echo $submit;
$conn = mysqli_connect("localhost", "root","", "farmse");


  if((isset($_POST['submit']))){
    // echo "Success";
  $name = isset($_POST['Fullname'])?$_POST['Fullname']:"";
 
  $contact = isset($_POST['Contact'])?$_POST['Contact']:"";
  $email = isset($_POST['Email'])?$_POST['Email']:"";
  $product_rating = isset($_POST['product'])?$_POST['product']:"";
  $service_rating = isset($_POST['service'])?$_POST['service']:"";
  $team_experience_rating = isset($_POST['Teamexperience'])?$_POST['Teamexperience']:"";
  $overall_rating = isset($_POST['overall'])?$_POST['overall']:"";
  $message = isset($_POST['suggestions'])?$_POST['suggestions']:"";
  
  $query ="INSERT INTO feedback(name, mobile, email, message,product_rating,services_rating,team_experience_rating,overall_rating)VALUES('$name', '$contact', '$email', '$message', '$product_rating', '$service_rating', '$team_experience_rating', '$overall_rating')";
  // echo $query;
  $result = mysqli_query($conn, $query);
  if($result)
    // echo 'Thank you for your feedback. We\'ll appreciate!';
    header('location:FeedBack2.html');
  else
    die("Something terrible happened. Please try again. ");
  }
else{
  echo "Fail";
}



?>