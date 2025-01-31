<?php
try {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
