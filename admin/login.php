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

            <input type="text" name="username" placeholder="Username">

            <input type="password" name="password" placeholder="Password">

            <button name="login">Login</button>

        </form>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('form').on('submit', function(e) {
                    var username = $('input[name="username"]').val().trim();
                    var password = $('input[name="password"]').val().trim();
                    var valid = true;
                    var errorMsg = "";

                    if (username === "") {
                        errorMsg += "Username is required. ";
                        valid = false;
                    }
                    if (password === "") {
                        errorMsg += "Password is required.";
                        valid = false;
                    }

                    if (!valid) {
                        e.preventDefault();
                        if ($('.js-error').length === 0) {
                            $('<p class="error js-error"></p>').insertAfter('form');
                        }
                        $('.js-error').text(errorMsg);
                    } else {
                        $('.js-error').remove();
                    }
                });
            });
        </script>

        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>

    </div>

</body>

</html>