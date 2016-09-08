<?php  
	$conn = new mysqli('localhost','$username','$password', '$database');  // creating connection between database and php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	if(isset($_POST['username'])){ // checking if post array is loaded with any values
                      $name = test_input($_POST["name"]);
                      $username = test_input($_POST["username"]);
                      $password = test_input($_POST["password"]);
                        $checkUserID = mysqli_query($conn,"SELECT username from USERS WHERE username = '$username'");
             if (mysqli_num_rows($checkUserID)>0) {
             header('location:duplicateemail.php');
                }
			
	
   
		   else{
                    $sql = "INSERT INTO USERS
					VALUES ('$name', '$username', '$password')";

					if (mysqli_query($conn, $sql)) {
    					header('location:thankyou.php');
					} 
					else {
    					 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
                     }

			
	}

           function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>