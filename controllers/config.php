<?php
// GEMAAKT DOOR YUSUFKAAN BICAN
try {
    $pdo = new PDO("mysql:host=localhost;dbname=userregistration", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}
?>
