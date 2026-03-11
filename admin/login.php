<?php
session_start();
include("config/db.php");

if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $user;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="login-box">

        <h2>Admin Login</h2>

        <form method="POST">

            <input type="text" name="username" placeholder="Username" required>

            <input type="password" name="password" placeholder="Password" required>

            <button name="login">Login</button>

        </form>

        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>

    </div>

</body>

</html>