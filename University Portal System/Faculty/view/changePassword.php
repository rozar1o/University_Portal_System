<!DOCTYPE html>
<?php
require_once "../javascript/changePassword.php";
?>



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
  <a href="ProvideNotice.php" class="w3-bar-item w3-button w3-hover-green">Provide Notice</a><br>
  <a href="NoticeHistory.php" class="w3-bar-item w3-button w3-hover-green">Notice History</a><br>
  <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
  <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
  <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-pink">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin-top:50px">
  <form class="loginbox" onclick="return validation()" method="post" action="../Controller/changePassword.php">
    <br>
      <h2>Change Password</h2>
      <br><br /><br><br />
      Current Password: <input type="text" name="cpassword" id="cpassword" onkeyup="checkCurrentpassword()" onblur="checkCurrentpassword()"><br><br>

      <span class="error" id="currentPasswordErr">* <?php if(!empty($_GET['currentPasswordErr'])){echo $_GET['currentPasswordErr'];} ?></span>
      <br><br>
      <span >New Password:</span>
      <input type="text" name="npassword" id="npassword" onkeyup="checkNewpassword()" onblur="checkNewpassword()" ><br><br>
      <span class="error" id="newPasswordErr">* <?php if(!empty($_GET['newPasswordErr'])){echo $_GET['newPasswordErr'];} ?></span>

      <br><br>
      <span >Retype New Password:</span>
      <input type="text" name="rnpassword" id="rnpassword" onkeyup="checkRetypepassword()" onblur="checkRetypepassword()"><br><br>
      <span class="error" id="retypePasswordErr">* <?php if(!empty($_GET['retypePasswordErr'])){echo $_GET['retypePasswordErr'];} ?></span>

      <br><br><br><br>
      <input type="submit" name="submit" value="Submit">
      <br><br>


  </form>
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
