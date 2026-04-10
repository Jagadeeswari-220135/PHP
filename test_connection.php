<?php
/*    Test connection to MySQL database     */
$conn = mysqli_connect("localhost", "root", "jagath@8688", "userdb");
if (!$conn) {
    // die() – stops execution and shows error
    die("Connection failed: " . mysqli_connect_error());
}
// echo – output success message
echo "Database Connected Successfully!";
mysqli_close($conn);
?>