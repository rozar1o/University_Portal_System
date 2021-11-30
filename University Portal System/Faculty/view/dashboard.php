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
  <body style="background-color:CornflowerBlue">
    
    <ul>
      <li style="float:left"><a href="../../homepage.php"> University Portal Syatem</a></li>
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
  <a href="ProvideNotice.php" class="w3-bar-item w3-button w3-hover-green">Provide Notice</a><br>
  <a href="NoticeHistory.php" class="w3-bar-item w3-button w3-hover-green">Notice History</a><br>
  <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
  <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
  <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-pink">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-black" style="margin-top:250px">
  <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
</div>



</div>



  </body>
</html>





<?php


}
else {
header("location:../view/login.php");
}
 ?>
