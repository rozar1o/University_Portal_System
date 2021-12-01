<?php
 require_once "../javascript/ProvideNotice.php";

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
  <body>

    <ul>
       <li style="float:left"><a href="../../homepage.php"> University Portal System</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#contact">Contact</a></li>
      <!-- <li><a href="#news">Registration</a></li> -->
      <li><a href="../../homepage.php">Home</a></li>
    </ul>

   <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%">
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

<div class="w3-container w3-dark-white" style="margin-top:50px">

  <form class="loginbox" onclick="" method="post" action="../controller/ProvideNotice.php">


    <p>TITLE:</p><br> <input type="text" name="TITLE" id="title" placeholder="TITLE">
    <br><br>
    <span class="error" id="titleErr">* <?php if(!empty($_GET['titleErr'])){echo $_GET['titleErr'];} ?></span>
    <br>
    <p>DESCRIPTION:</p><br> <input type="text" name="DESCRIPTION" id="body" placeholder="DESCRIPTION">
    <br><br>
    <span class="error" id="bodyErr">* <?php if(!empty($_GET['bodyErr'])){echo $_GET['bodyErr'];} ?></span>
    <br>
    
    <br>
    <br>


    <input type="submit" name="submit" value="Submit">
  </form>

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
