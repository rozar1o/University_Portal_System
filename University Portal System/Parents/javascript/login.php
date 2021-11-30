<script type="text/javascript">
  function validation()
  {
    let username= document.getElementById("username");
    let password= document.getElementById("password");

    

    if(username.value.trim()=="" )
    {
       document.getElementById("nameErr").innerHTML= "*Username is requied";
       return false;
    }
    else{
      document.getElementById("nameErr").innerHTML= "";
    }

   if(password.value.trim()=="" )
    {
       document.getElementById("passwordErr").innerHTML= "*Password is requied";
       return false;
    }
    else{
      document.getElementById("passwordErr").innerHTML= "";
    }


      return true;

  }

  function checkUsername()
  {
    let username= document.getElementById("username");
    if(username.value.trim()=="" )
    {
       document.getElementById("nameErr").innerHTML= "*Username is requied";
       return false;
    }
    else{
      document.getElementById("nameErr").innerHTML= "";
    }
  }

  function checkPassword()
  {
    if(password.value.trim()=="" )
     {
        document.getElementById("passwordErr").innerHTML= "*Password is requied";
        return false;
     }
     else{
       document.getElementById("passwordErr").innerHTML= "";
     }
  }
</script>
