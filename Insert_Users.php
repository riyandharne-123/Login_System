<?php
$new_redirect="index.html";
//login details
$username = "";

if(isset($_POST['add_username'])){
    $username = $_POST['add_username'];
}
 $password = "";
if(isset($_POST['add_password'])){
    $password = $_POST['add_password'];
 }
 //connect to the server select database
 mysqli_connect("localhost", "root", "","login");
$conn=mysqli_connect("localhost", "root", "","login");
//converting login vslues to string format
$str_usr=strval($username);
$str_pass=strval($password);
// Query the database for user

$sql = "INSERT INTO users ".
         "(username,password) ".
         "VALUES"."('$username','$password')";


//error
//if (mysqli_query($conn, $sql)) {
  // echo "success";
   //header("Location: $new_redirect");
    
//} else {
  //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
mysqli_select_db($conn,'login');
$retval = mysqli_query( $conn,$sql );
      
if(! $retval ) {
   die('Could not enter data: ' . mysqli_error());
}

echo "Entered data successfully\n";
mysqli_close($conn);
header("Location: $new_redirect");

?>