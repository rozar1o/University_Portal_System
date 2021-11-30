<?php
session_start();
require_once '../model/model.php';


if (isset($_POST['update']) && isset($_SESSION['username'])) {
  

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth=$details="";
  $birthErr =$emailErr  = $nameErr =$error= "";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

 if (empty($_POST["name"])) {
   $nameErr= "Name is required";
   $flag=0;
 } else {

      $name = test_input($_POST["name"]);

            if(str_word_count($name)<2)
         {
         $nameErr= "Name must contains at least two words ";
          $flag=0;

         }

 }

  if (empty($_POST["email"])) {
    $emailErr= "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr= "Invalid email format";
      $flag=0;
    }
  }

  if(empty($_POST["phone"]))
  {
    $phoneErr= "Phone Number is required";
    $flag=0;
  }
  else {
    $phone=test_input($_POST["phone"]);

    if(!is_numeric($phone))
    {
      $phoneErr= "Number must be numeric";
      $flag=0;
    }
    else {

        $phoneErr= "";
    }
  }


    if(isset($_POST['details']))
    {
      $details=test_input($_POST["details"]);
    }





if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['phone']=$phone;



  if (update($_SESSION['username'],$data)) {
    
    header("location:../view/dashboard.php");
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'nameErr' => $nameErr,
   'emailErr' => $emailErr,
   'phoneErr' => $phoneErr

);
     header("location:../view/editProfile.php?" . http_build_query($args));
}


} else {
	echo 'You are not allowed to access this page.';
}


?>
