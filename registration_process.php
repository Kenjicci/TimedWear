<?php
    include('conn.php');

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
    }

    if ($password !== $confirmPassword) {
        echo "Passwords do not match";
    }else{
        $sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";

        if (mysqli_query($con, $sql)) {
            echo "Registration successful";
        }else{
            echo "Error:" . mysqli_error($con);
        }

        mysqli_close($con);
    }

?>