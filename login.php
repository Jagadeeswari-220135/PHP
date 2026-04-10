<?php
/*    
Database connection                         */
$conn = mysqli_connect("localhost", "root", "jagath@8688", "userdb");
if (!$conn) {
   die("Database connection failed: " . mysqli_connect_error());
}
/*    Login validation function */                              
function validateLogin($email, $password) {
global $conn;
// local variables inside function
$query = "SELECT * FROM userdetails
   WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);
if (!$result) {
     die("Query execution failed: " . mysqli_error($conn));
}
if (mysqli_num_rows($result) == 1) {
     return true;
} else {
    return false;
}
}
/*    
Fetch POST data and validate   */                         
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST["email"];
$password = $_POST["password"];
if (validateLogin($email, $password)) {
   print "Login successful!"; 
} else {
print "Invalid email or password.";
}
}
mysqli_close($conn);
?>




