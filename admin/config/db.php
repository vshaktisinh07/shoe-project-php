<?php

$conn = mysqli_connect("localhost", "root", "", "ecommerce_admin");

if (!$conn) {
    die("Database failed");
}
