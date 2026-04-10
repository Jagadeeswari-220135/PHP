<?php
/*    
Global variables – DB connection      */                
$servername = "localhost";
$username_db = "root";
$password_db = "jagath@8688";
$database = "userdb";

$conn = mysqli_connect($servername, $username_db, $password_db, $database);
/* die() – stops execution if connection fails */
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
/*    Static variable – counts registrations per request   */
function registrationCount() {
static $count = 0;
$count++;
return $count;
}

/* Local variables inside function, uses global $conn   */
function insertUser($username, $email, $password) {
   global $conn; 
$sql = "INSERT INTO userdetails (username, email, password)
        VALUES ('$username', '$email', '$password')";
return mysqli_query($conn, $sql);
}
/*    Receive POST data & demonstrate datatypes */             
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = (string) $_POST["username"]; 
     $email   = (string) $_POST["email"]; 
     $password = (string) $_POST["password"]; 
     $success = false;

if (insertUser($username, $email, $password)) {
     $success = true;
     $user_id = (int) mysqli_insert_id($conn); // datatype: integer
     echo "Registration successful!<br>"; echo "U//s ecr hIoD :o "u t. p$utser_id . "
     <br>"; echo "Registrations this request: " . registrationCount();
} else {
   echo "Error: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>










