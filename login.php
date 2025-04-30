<?php
include ('conn.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) === 1) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: user_dashboard.html");
    }else{
        echo "Invalid Username and Password!";
    }

    mysqli_close($con);
}

?>