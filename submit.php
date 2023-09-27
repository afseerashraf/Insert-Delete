<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'school';
$connect = mysqli_connect($host, $user, $password, $database);

// if ($connect) {
//     echo "<h3>Successfully connected</h3>";
// } else {
//     die('Failed to connect');
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form data storage
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $dob = mysqli_real_escape_string($connect, $_POST['sdate']);
    $address = mysqli_real_escape_string($connect, $_POST['address']);
    
    if (empty($name) || empty($phone) || empty($email) || empty($dob) || empty($address)) {
        echo '<h3>Please provide all details correctly</h3>';
    } else {
        
        $query = "INSERT INTO student(Name, Phone, Email, Date of Birth, Address) VALUES ('$name', '$phone', '$email', '$dob', '$address')";

        if (mysqli_query($connect, $query)) {
            header("Location:display.php");
            exit();
        } else {
            echo '<h3>Registration failed: ' . mysqli_error($connect) . '</h3>';
        }
    }
}

mysqli_close($connect);
?>
