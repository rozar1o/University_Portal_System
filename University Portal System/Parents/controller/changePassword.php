

<?php
require_once "../model/model.php";

session_start();


if(isset($_POST['submit']) && isset($_SESSION['username']))
{
  $cpassword=$npassword=$rnpassword="";
  $currentPasswordErr=$newPasswordErr=$retypePasswordErr="";

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


  if (empty($_POST["cpassword"])) {
       $currentPasswordErr= "Current Password is required";
       $flag=0;
     }
     else {
      $cpassword = test_input($_POST["cpassword"]);


        }


 if(empty($_POST["npassword"]))
 {
   $newPasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $npassword=test_input($_POST["npassword"]);
   if(strlen($npassword)<8)
   {
     $newPasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($npassword,"@")<1 || substr_count($npassword,"#")<1 || substr_count($npassword,"%")<1 || substr_count($npassword,"$")<1)
     {
       $newPasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

 if(empty($_POST["rnpassword"]))
 {
   $retypePasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $rnpassword=test_input($_POST["rnpassword"]);
   if(strlen($rnpassword)<8)
   {
     $retypePasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($rnpassword,"@")<1 || substr_count($rnpassword,"#")<1 || substr_count($rnpassword,"%")<1 || substr_count($rnpassword,"$")<1)
     {
       $retypePasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }



  if($flag==1)
  {
    try {

      $data = searchUsername($_SESSION['username']);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['PASSWORD'] ;
        endforeach;
        if($cpassword==$passwordFromDB)
        {
          if($npassword==$rnpassword){
          if (updatePassword($_SESSION['username'], $npassword)) {
            echo 'Successfully updated!!';
           session_destroy();
            header('Location: ../View/login.php');
          }
          else {
            echo "Update unsuccessful!!";
          }
        }
        else {
          $retypePasswordErr= "New password and retype password is not same!!";
          $flag=0;
        }
        }
        else {
          $currentPasswordErr= "Incorrect Password";
          $flag=0;
        }
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }
  if($flag==0) {
    $args = array(
     'currentPasswordErr' => $currentPasswordErr,
     'newPasswordErr' => $newPasswordErr,
     'retypePasswordErr' => $retypePasswordErr
  );
       header("location:../view/changePassword.php?" . http_build_query($args));
  }
}

else {
  echo "You are not allowed to access this page";
}




?>
