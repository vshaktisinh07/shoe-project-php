<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
// Static shoe product data
$products = [
    ["id" => 1, "name" => "Nike Air Max", "price" => 120, "stock" => 15],
    ["id" => 2, "name" => "Adidas Ultraboost", "price" => 180, "stock" => 8],
    ["id" => 3, "name" => "Puma RS-X", "price" => 110, "stock" => 12],
    ["id" => 4, "name" => "Reebok Classic", "price" => 90, "stock" => 20],
    ["id" => 5, "name" => "Vans Old Skool", "price" => 70, "stock" => 25],
    ["id" => 6, "name" => "Converse Chuck Taylor", "price" => 60, "stock" => 18],
    ["id" => 7, "name" => "New Balance 574", "price" => 100, "stock" => 10],
    ["id" => 8, "name" => "ASICS Gel-Kayano", "price" => 150, "stock" => 7],
    ["id" => 9, "name" => "Fila Disruptor", "price" => 95, "stock" => 13],
    ["id" => 10, "name" => "Skechers D'Lites", "price" => 85, "stock" => 22],
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
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
        <h1>Products</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            <?php foreach ($products as $row) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['stock'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>