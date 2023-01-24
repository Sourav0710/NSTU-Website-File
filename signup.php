<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="signup_database";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['submission']))
{	
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $action = $_POST['action'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];

	 $sql_query = "INSERT INTO signup_details (First_Name,Last_Name,Action,Email,Password)
	 VALUES ('$first_name','$last_name','$action','$email','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Data has been Added.";
	 } 
	 else
     {
		echo "Error Detais: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>