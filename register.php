<?php 
$servername="localhost:3307";
$username="root";
$password="";
$database="regd";

$conn=mysqli_connect($servername,$username,$password,$database);
if($conn->connect_error){
    die ("connection failed".$conn->connect_error);

}

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert user data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

?>