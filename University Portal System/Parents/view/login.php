<?php   require_once "../javascript/login.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <style >


    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/login.css">
    <title></title>
  </head>
  <body style="background-color:CornflowerBlue">


    <ul>
      <li style="float:left"><a href="../../homepage.php"> University Portal System</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
   
     <li><a href="../../homepage.php">Home</a></li>
    </ul>


<div class="from">

    <h2>Login</h2>

    <form name="loginFrom"  class="loginbox" onsubmit="return validation();" method="post" action="../controller/login.php" >

        <p>Username:</p> <input type="text" onkeydown="checkUsername()" onblur="checkUsername ()" placeholder="Enter Username" name="username" id="username">
        <span class="error" id="nameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
        <br><br>
        <p>Password:</p> <input type="password" onkeydown="checkPassword()" onblur="checkPassword()" placeholder="Enter Password" name="password" id="password">
        <span class="error" id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
        <br><br>
        <input type="checkbox"  name="remember" value="remember">
         <label for="remember">Remember Me</label>
         <br>
        <br>
         <input type="submit" name="submit" value="Login">


    </form>

    </div>


  </body>
</html>
