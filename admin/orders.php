<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
// Static order data for shoe products
$orders = [
    ["id" => 1, "product_name" => "Nike Air Max", "customer" => "Alice", "status" => "Pending"],
    ["id" => 2, "product_name" => "Adidas Ultraboost", "customer" => "Bob", "status" => "Shipped"],
    ["id" => 3, "product_name" => "Puma RS-X", "customer" => "Charlie", "status" => "Delivered"],
    ["id" => 4, "product_name" => "Reebok Classic", "customer" => "David", "status" => "Cancelled"],
    ["id" => 5, "product_name" => "Vans Old Skool", "customer" => "Eve", "status" => "Pending"],
    ["id" => 6, "product_name" => "Converse Chuck Taylor", "customer" => "Frank", "status" => "Delivered"],
    ["id" => 7, "product_name" => "New Balance 574", "customer" => "Grace", "status" => "Shipped"],
    ["id" => 8, "product_name" => "ASICS Gel-Kayano", "customer" => "Hannah", "status" => "Pending"],
    ["id" => 9, "product_name" => "Fila Disruptor", "customer" => "Ivan", "status" => "Delivered"],
    ["id" => 10, "product_name" => "Skechers D'Lites", "customer" => "Judy", "status" => "Shipped"],
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Orders</title>
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

        <h1>Orders</h1>

        <form method="POST">

            <input name="product" placeholder="Product Name" required>

            <input name="customer" placeholder="Customer Name" required>

            <input name="status" placeholder="Order Status" required>

            <button name="add">Add Order</button>

        </form>

        <table>

            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Customer</th>
                <th>Status</th>
            </tr>

            <?php foreach ($orders as $row) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['customer'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                </tr>
            <?php } ?>

        </table>

    </div>

</body>

</html>