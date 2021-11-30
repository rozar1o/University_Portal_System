<script type="text/javascript">

function validation()
{
  var name= document.getElementById("TITLE");
  var email= document.getElementById("DESCRIPTION");
  


  //alert("hello");

  if(packing.value.trim()=="" )
  {
     document.getElementById("titleErr").innerHTML= "*TITLE is requied";
     return false;
  }
  else {

       document.getElementById("titleErr").innerHTML= "";
  }


  if(packet.value.trim()=="")
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
  var packing= document.getElementById("TITLE");
  if(packing.value.trim()=="" )
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
  var packet= document.getElementById("DESCRIPTION");
  if(packet.value.trim()=="")
  {
    document.getElementById("bodyErr").innerHTML= "*DESCRIPTION is requied";
    return false;
  }
  else {

      document.getElementById("bodyErr").innerHTML= "";

  }

}








</script>
