<?php

require_once '../model/model.php';


session_start();


if (isset($_POST['submit'])) {

   $titleErr = $bodyErr = "";



  $title =$_POST["TITLE"];
   $body = $_POST["DESCRIPTION"];

 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["TITLE"])) {
    $titleErr= "TITLE is required";
    $flag=0;
  } else {

      $title = test_input($_POST["TITLE"]);
      $titleErr= "";
  }

  if (empty($_POST["DESCRIPTION"])) {
    $bodyErr= "DESCRIPTION is required";
    $flag=0;
  } else {

      $body = test_input($_POST["DESCRIPTION"]);
      $bodyErr= "";
  }

  





if($flag==1)
{
  
  $data['TITLE']=$title;
  $data['DESCRIPTION']=$body;
  


  if (provideNotice($data)) {
    header('location:../view/dashboard.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'titleErr' => $titleErr,
   'bodyErr' => $bodyErr,
   

);
     header("location:../view/ProvideNotice.php?" . http_build_query($args));
  }

}else {
  echo "You can not access this page!!";
}

?>
