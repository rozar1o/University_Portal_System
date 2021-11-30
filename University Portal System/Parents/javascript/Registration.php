<script type="text/javascript">

function validation()
{
  var name= document.getElementById("name");
  var email= document.getElementById("email");
  var password= document.getElementById("password");
  var username= document.getElementById("username");
  var confirmpassword=document.getElementById("confirmpassword");
  var birth=document.getElementById("phone");

  //alert("hello");

  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("nameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("nameErr").innerHTML= "";

  }

  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

  if (username.value.trim()=="") {
    document.getElementById("usernameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usernameErr").innerHTML=  "";
  }


  if(password.value.trim()=="")
  {
    document.getElementById("passwordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(password.value.length<8)
    {
    document.getElementById("passwordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("passwordErr").innerHTML= "";
    }
}

 if(confirmpassword.value.trim()=="")
 {
 document.getElementById("confirmpasswordErr").innerHTML= "*Confirm Password is required";
   return false;
 }
 else {

    if(!(password.value==confirmpassword.value))
    {
      document.getElementById("confirmpasswordErr").innerHTML= "*Password and confirm password have to be same";
    return false;
    }
    else {
      document.getElementById("confirmpasswordErr").innerHTML= "";
    }

}

if(phone.value.trim()=="")
{
  document.getElementById("phoneErr").innerHTML= "*Phone number is requied";
  return false;
}
else {

  if(isNaN(phone.value))
  {
  document.getElementById("phoneErr").innerHTML= "*Phone number must be numeric";
    return false;
  }
  else {
    document.getElementById("phoneErr").innerHTML= "";
  }
}




return true;


}


function checkName()
{
  var name= document.getElementById("name");
  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("nameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("nameErr").innerHTML= "";

  }
}

function checkEmail()
{
  var email= document.getElementById("email");
  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

}

function checkUsername()
{
    var username= document.getElementById("username");

  if (username.value.trim()=="") {
    document.getElementById("usernameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usernameErr").innerHTML=  "";
  }
}

function checkPassword()
{
    var password= document.getElementById("password");
  if(password.value.trim()=="")
  {
    document.getElementById("passwordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(password.value.length<8)
    {
    document.getElementById("passwordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("passwordErr").innerHTML= "";
    }
}
}

function checkConfirmPassword()
{
  var confirmpassword=document.getElementById("confirmpassword");

  if(confirmpassword.value.trim()=="")
  {
  document.getElementById("confirmpasswordErr").innerHTML= "*Confirm Password is required";
    return false;
  }
  else {
     if(!(password.value==confirmpassword.value))
     {
       document.getElementById("confirmpasswordErr").innerHTML= "*Password and confirm password have to be same";
     return false;
     }
     else {
       document.getElementById("confirmpasswordErr").innerHTML= "";
     }

 }
}

function checkPhone()
{
    var phone= document.getElementById("phone");
  if(phone.value.trim()=="")
  {
    document.getElementById("phoneErr").innerHTML= "*Phone number is requied";
    return false;
  }
  else {

    if(isNaN(phone.value))
    {
    document.getElementById("phoneErr").innerHTML= "*Phone number must be numeric";
      return false;
    }
    else {
      document.getElementById("phoneErr").innerHTML= "";
    }
}
}




</script>
