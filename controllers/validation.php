<?php
// GEMAAKT DOOR YUSUFKAAN BICAN
session_start();

try {
    $pdo = new PDO("mysql:host=localhost;dbname=userregistration", 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST['user'];
    $pass = $_POST['password'];

    // Check if the username and password match
    $selectQuery = $pdo->prepare("SELECT * FROM usertable WHERE name = :name AND password = :pass");
    $selectQuery->bindParam(':name', $name);
    $selectQuery->bindParam(':pass', $pass);
    $selectQuery->execute();

    if ($selectQuery->rowCount() == 1) {
        $_SESSION['username'] = $name;
        header('location: ../views/index.php');
    } else {
        header('location: ../controllers/login.php');
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
