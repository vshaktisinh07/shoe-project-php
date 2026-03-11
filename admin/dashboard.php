<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}

// Static admin panel for demo
$product = 5; // static sample
$order = 3; // static sample
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="sidebar">

        <h2>Admin Panel</h2>

        <a href="dashboard.php">Dashboard</a>
        <a href="products.php">Products</a>
        <a href="orders.php">Orders</a>
        <a href="logout.php">Logout</a>

    </div>

    <div class="main">

        <h1>Dashboard</h1>

        <div class="cards">

            <div class="card">
                <h3>Total Products</h3>
                <p>5</p>
            </div>

            <div class="card">
                <h3>Total Orders</h3>
                <p>3</p>
            </div>

        </div>

    </div>

</body>

</html>