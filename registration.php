<html>
<head>
<script type="text/javascript" language="javascript">
 function validateregistration(){  // to check if a any field is blank or not
  var y = document.forms["frmregistration"]["name"].value;
    if (y == null || y == "") {
        alert("Please enter name");
        return false;
    }
 var x = document.forms["frmregistration"]["username"].value;
    if (x == null || x == "") {
        alert("Please enter username");
        return false;
    }
  
  var z = document.forms["frmregistration"]["password"].value;
    if (z == null || z == "") {
        alert("Please enter password");
        return false;
    }

  var q = document.forms["frmregistration"]["cnfpassword"].value;
    if (q == null || q == "") {
        alert("Please enter Confirm password");
        return false;
    }
    if (z!=q) {
        alert("Password did not match");
        return false;
    }

  else{
   return true;
  }

 }
</script>


</head>
<body>
<center>
 <form id="frmregistration" name="frmregistration" method="post" action="registeruser.php" onSubmit="return validateregistration(document.frmregistration);">
  <table border="0" cellspacing="0" cellpadding="0" >
  <th colspan="2"><h1>Registration</h1></th>
  <tr>
   <td align="right">
     Name:&nbsp;
   </td>
   <td>
     <input type="text" id="name" name="name"/>
   </td>
  </tr>
  <tr>
   <td align="right">
     Username:&nbsp;
   </td>
   <td>
     <input type="text" id="username" name="username"/>
   </td> 
  </tr>
  <tr>
   <td align="right">
     Password:&nbsp;
   </td>
   <td>
     <input type="password" id="password" name="password"/>
   </td> 
  </tr>
  <tr>
   <td align="right">
     Confirm Password:&nbsp;
   </td>
   <td>
     <input type="password" id="cnfpassword" name="confpassword"/>
   </td> 
  </tr>
  <tr>
   <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
   <td align="right">
     <input type="SUBMIT" id="cmdSubmit" name="cmdSubmit" value="Submit"/>&nbsp;
   </td>
   <td>
     <input type="reset" id="cmdReset" name="cmdeset"/>
   </td> 
  </tr>
  </table>
 </form>
</center>
</body>
</html>