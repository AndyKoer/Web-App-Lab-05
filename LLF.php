<?php
session_start();
include('connectems.php'); // database connection, then user and pass

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    // Query the database to fetch user details
    $query = "SELECT * FROM users_tab WHERE userid='$userid' AND password='$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['role'] = $row['role'];

        // Redirect to different pages based on role
        if ($_SESSION['role'] == 'student') {
            header("location: student/index.php");
        } elseif ($_SESSION['role'] == 'faculty') {
            header("location: faculty/index.php");
        } elseif ($_SESSION['role'] == 'admin') {
            header("location: admin/index.php");
        }
    } else {
        echo "Invalid userid or password, try again";
		header("location: login.php");
    }
}
?>