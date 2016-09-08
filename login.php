<?php  
	$conn = new mysqli('localhost','$username','$password', '$database');  // creating connection between database and php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	if(isset($_POST['username'])){
                      $username = test_input($_POST["username"]);
                      $password = test_input($_POST["password"]);
                      $checkUserID = mysqli_query($conn,"SELECT username,password from USERS WHERE username = '$username' AND password='$password'");
             if (mysqli_num_rows($checkUserID)>0) {
             header('location:loginsuccess.php');
                } 
               else{
               header('location:logininvalid.php');
                }
   
	}

	       function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



?>
<html>
<head>
		<script type="text/javascript" language="javascript">
	function validateLogin(){  // to check if a any field is blank or not
		var x = document.forms["frmlogin"]["username"].value;
    if (x == null || x == "") {
        alert("Please enter username");
        return false;
    }
  
  var z = document.forms["frmlogin"]["password"].value;
    if (z == null || z == "") {
        alert("Please enter password"); 
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
	<form id="frmlogin" name="frmlogin" method="post" action="login.php" onSubmit="return validateLogin(document.frmlogin);">
		<table border="0" cellspacing="0" cellpadding="0" >
		<th colspan="2"><h1>Login</h1></th>
		<tr>
			<td align-"right">
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
					<input type="password" id="passowrd" name="password"/>
			</td>	
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td align="right">
					<input TYPE="SUBMIT" ID="cmdSubmit" NAME="cmdSubmit" VALUE="Submit"/>&nbsp;
			</td>
			<td>
					<input type="reset" id="cmdReset" name="cmdReset"/>
			</td>	
		</tr>
		</table>
	</form>
        <form id="frmlogin" name="frmlogin" method="post" action="registration.php">
			<button>Register</button>
	</form>
</center>
</body>
</html>