<script type="text/javascript">

function validation()
{
  var title= document.getElementById("TITLE");
  var body= document.getElementById("DESCRIPTION");
  


  //alert("hello");

  if(title=="" )
  {
     document.getElementById("titleErr").innerHTML= "*TITLE is requied";
     return false;
  }
  else {

       document.getElementById("titleErr").innerHTML= "";
  }


  if(body=="")
  {
    document.getElementById("bodyErr").innerHTML= "*DESCRIPTION is requied";
    return false;
  }
  else {

      document.getElementById("bodyErr").innerHTML= "";

  }



return true;


}


function checkTitle()
{
  var title= document.getElementById("TITLE");
  if(title=="" )
  {
     document.getElementById("titleErr").innerHTML= "*TITLE is requied";
     return false;
  }
  else {

       document.getElementById("titleErr").innerHTML= "";
  }
}

function checkBody()
{
  var body= document.getElementById("DESCRIPTION");
  if(body=="")
  {
    document.getElementById("bodyErr").innerHTML= "*DESCRIPTION is requied";
    return false;
  }
  else {

      document.getElementById("bodyErr").innerHTML= "";

  }

}








</script>
