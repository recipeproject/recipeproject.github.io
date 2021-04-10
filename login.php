<?php
    include 'config.php';
    session_start();

    if (isset($_POST['loginUser'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passMD5 = md5($password);
        
        $query = "SELECT * FROM users WHERE email='$email' AND password='$passMD5'";
        $results = mysqli_query($conn, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['loggedin'] = true;
            $_SESSION['status'] = "Zalogowano pomyślnie!";
            $_SESSION['status_code'] = "success";
            header('Location: index_login.php');
            exit();
        }
        else {
            $_SESSION['status'] = "Niepoprawny e-mail lub hasło!";
            $_SESSION['status_code'] = "error";
            header('Location: index.php');
            exit();
        }
    }
?>
