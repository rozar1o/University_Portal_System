<link rel="stylesheet" href="../css/viewProfile.css">

<script type="text/javascript">



  function showDetails(str) {

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "../controller/getDetails.php?q="+str, true);
    xhttp.send();
}

</script>








<?php
session_start();

if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body style="background-color:939ae7">

    <ul>
      <li style="float:left"><a href="../../homepage.php"> Charity Donation Ltd</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    
     <li><a href="../../homepage.php">Home</a></li>
    </ul>

    <!-- <?php include("viewProfileStudentView.php") ?> -->
 

   <div class="w3-sidebar w3-bar-block w3-blue" style="width:25%">
   <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-yellow">Dashboard</a><br>
  <a href="StudentInfo.php" class="w3-bar-item w3-button w3-hover-orange">Student Information</a><br>
  <a href="StudentResult.php" class="w3-bar-item w3-button w3-hover-aqua">Student Result</a><br>
  <a href="SearchFaculty.php" class="w3-bar-item w3-button w3-hover-amazon">Search Faculty</a><br>
  <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
  <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
  <a href="PaymentHistory.php" class="w3-bar-item w3-button w3-hover-green">Student Payment History</a><br>
  <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
  <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
  <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-pink">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin:50px">


  <?php

  require_once '../controller/Info.php';

  if(isset($_SESSION['username']))
  {
  $data = fetch($_SESSION['username']);


    if($data!=NULL)
    {
      foreach ($data as $i => $student):

           $name= $student['A_NAME'] ;
           $email=$student['EMAIL'];
           $username= $student['USERNAME'];
           $phone= $student['PHONE'] ;
           $image=$student['IMAGE'];
      endforeach;

      echo "</div>";
     echo "<div class='profile'>";
      echo ('
           <tr>
                <td>
                     <img src="data:image/jpeg;base64,'.base64_encode($image ).'"  class="img-thumnail" />
                </td>
           </tr>
      ');
      // include("changeProfilePictureView.php");

      echo "<br /><br /><br /><p>Name: &nbsp; $name</p>";
      echo "<br /><p>Email: &nbsp;$email</p>";
      echo "<br /><p>Username: &nbsp;$username</p>";
      echo "<br /><p>Phone: &nbsp;$phone</p>";

      ?>
      <br>
      

      <div id="txtHint" ></div>
    </div>

       </div>
      <?php


    }
  }

  else {
    echo "You cannot access this page!!!!!!!!!!!!";
  }
   ?>

</div>



</div>



  </body>
</html>





<?php
//include("../Model/foot.php");

}
else {
header("location:../view/login.php");
}
 ?>