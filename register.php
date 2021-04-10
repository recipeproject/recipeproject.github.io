<?php
    include 'config.php';
    session_start();

    if(isset($_POST['registerNewUser'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passMD5 = md5($password);

        $sql_u = "SELECT * FROM users WHERE username='$username'";
  	    $sql_e = "SELECT * FROM users WHERE email='$email'";
  	    $res_u = mysqli_query($conn, $sql_u);
  	    $res_e = mysqli_query($conn, $sql_e);
        

        if (mysqli_num_rows($res_u) > 0) {
            $_SESSION['status'] = "Przepraszamy nazwa użytkownika jest zajęta!";
            $_SESSION['status_code'] = "error";
            header('Location: index.php');
            exit();
        }
        else if(mysqli_num_rows($res_e) > 0) {
            $_SESSION['status'] = "Przepraszamy adres e-mail jest już zarejestrowany!";
            $_SESSION['status_code'] = "error";
            header('Location: index.php');
            exit();
        }
        else {
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$passMD5')";
            $query_run = mysqli_query($conn, $query);
            $_SESSION['status'] = "Zarejestrowano pomyślnie!";
            $_SESSION['status_code'] = "success";
            header('Location: index.php');
            exit();
        }
    }
?>
