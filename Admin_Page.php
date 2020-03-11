<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body class="bdy">
        <style>
            .bdy{
                color: whitesmoke;
            }
        </style>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <h2 class="nav-logo">Admin Panel</h2>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Go back to home page?</a>
      </li>
    </ul>
  </nav>
  <h2 style="text-align: center; color: grey;">User Information</h2>
  <!--Table starts-->
  <!--php starts-->
<?php
$conn=mysqli_connect("localhost", "root", "","login");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($conn,"SELECT * FROM users");
//actual table
echo "<table class='table table-striped' style='font-size:20px;'>
<tr>
<th>Username</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
    </body>
</html>