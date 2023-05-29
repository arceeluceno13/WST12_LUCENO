<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $required = '/^.{8,}$/'; // 8 characters length
    $upper = '/^(?=.*[A-Z])/'; // UpperCase
    $special = '/^(?=.*[!@#$%^&*])/'; // special characters
    
    // check if the password meets the criteria

    if (!preg_match($required, $password)) {
        echo "<script>alert('Password must have at least 8 characters.');</script>";
        echo "<script>window.location.href='login.html';</script>";
        exit;
    } else if (!preg_match($upper, $password)) {
        echo "<script>alert('Password must have UpperCase.');</script>";
        echo "<script>window.location.href='login.html';</script>";
        exit;
    } else if (!preg_match($special, $password)) {
        echo "<script>alert('Password must have SpecialCharacters.');</script>";
        echo "<script>window.location.href='login.html';</script>";
        exit;
    } else {
      
        if ($role === 'student') {
            if ($username === '292105266' && $password === 'Student1!') {
                session_start();
                $token = uniqid();
                $_SESSION['login_token'] = $token;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                echo "<script>alert('Login successful as student!');</script>";
                header("HTTP/1.1 303 See Other");
                header("Location: studyload.php?token=$token");
                exit();
            } else {
                echo "<script>alert('Incorrect username or password.');</script>";
                echo "<script>window.location.href='login.html';</script>";
                exit;
            }

        } else if ($role === 'alumni') {
            if (strcasecmp($username, 'alumni@email.com') == 0 && $password === 'Alumni1!') {
                session_start();
                $token = uniqid();
                $_SESSION['login_token'] = $token;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                echo "<script>alert('Login successful as Alumni!');</script>";
                header("HTTP/1.1 303 See Other");
                header("Location: Alumni_dashboard.php?token=$token");
                exit();
            } else {
                echo "<script>alert('Incorrect username or password.');</script>";
                echo "<script>window.location.href='login.html';</script>";
                exit;
            }
        }
      else if ($role === 'employee') {
            if (strcasecmp($username, 'employee@email.com') == 0 && $password === 'Employee1!') {
                session_start();
                $token = uniqid();
                $_SESSION['login_token'] = $token;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                echo "<script>alert('Login successful as Employee!');</script>";
                header("HTTP/1.1 303 See Other");
                header("Location: Employee_dashboard.php?token=$token");
                exit();
            } else {
                echo "<script>alert('Incorrect username or password.');</script>";
                echo "<script>window.location.href='login.html';</script>";
                exit;
            }
        }
}
}
?>
