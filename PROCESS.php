<?PHP
// to get values passe from form in login.php file
$url = 'Welcome.html';
$redirect='index.html';
$admin_page='Admin_Page.php';
 $username = "";

if(isset($_POST['username'])){
    $username = $_POST['username'];
}
 $password = "";
if(isset($_POST['password'])){
    $password = $_POST['password'];
 }
 
 //alerting
 function function_alert() {
    echo "<script type='text/javascript'>alert('wrong information entered!');</script>";
}
 
 //connect to the server select database
 mysqli_connect("localhost", "root", "","login");
$conn=mysqli_connect("localhost", "root", "","login");

 // Query the database for user
 $result = mysqli_query($conn,"select * from users where username = '$username' and password = '$password'")
  or die('Failed to query database');
  $sql1="select * from users where username = '$username' and password = '$password'";
 $row = mysqli_fetch_array($result);
//admin login
 if ( $row['username'] == 'admin' && $row['password'] = 'admin' ) {
    header("Location: $admin_page");
   }
   //normal login
 else if ( $row['username'] == $username && $row['password'] == $password && $username!=""&&$password!="" ) {
  header("Location: $url");
 } 
 //failed login
 else {
     //echo "Failed to login!";
    
     header("Location: $redirect");
     function_alert();
     
        $username = $_POST['username'];
    
     
    
        $password = $_POST['password'];
     
}
?>