
<?php require_once "../javascript/Registration.php";
?>

<!DOCTYPE HTML>
<html>
<head>

<link rel="stylesheet" href="../css/Registration.css">
</head>
<body>



  <ul>
     <li style="float:left"><a href="../../homepage.php"> Charity Donation Ltd</a></li>
     <li><a href="#about">About</a></li>
     <li><a href="#contact">Contact</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="../../homepage.php">Home</a></li>



  </ul>


<div class="from">


  <h2>Registration</h2>
<form class="loginbox" onclick="return validation()" method="post" action="../controller/Registration.php">


  <p>Name:</p> <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name">
  <br><br>
  <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br>
   <p>E-mail:</p> <input type="text" onkeypress="checkEmail()" onblur="checkEmail()" name="email" id="email" placeholder="Enter Email">
  <br><br>
  <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br>
  <p>Username:</p> <input type="text" onkeypress="checkUsername()" onblur="checkUsername()" name="username" id="username" placeholder="Enter Username">
  <br><br>
  <span class="error" id="usernameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
  <br>
  <p>Password:</p> <input type="password"  onkeydown="checkPassword()" onblur="checkPassword()" name="password" id="password" placeholder="Enter Password" >
  <br><br>
  <span class="error" id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
  <br>

  <p>Comfirm Password:</p> <input type="password" onkeypress="checkConfirmPassword()" onblur="checkConfirmPassword()" name="confirmpassword" id="confirmpassword" placeholder="Enter Password">
  <br><br>
  <span class="error" id="confirmpasswordErr">* <?php if(!empty($_GET['$confirmpasswordErr'])){echo $_GET['confirmpasswordErr'];} ?></span>
  <br>
  <p>Phone:</p> <input type="text" onkeypress="checkPhone()" onblur="checkPhone()" name="phone" id="phone" placeholder="Enter phone number">
  <br><br>
  <span class="error" id="phoneErr">* <?php if(!empty($_GET['phoneErr'])){echo $_GET['phoneErr'];} ?></span>
  <br>





  <input type="submit" name="submit" value="Submit">
</form>


</div>

</body>
</html>
