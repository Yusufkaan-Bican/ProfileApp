<?php
session_start();
header('location: ../controllers/login.php');

try {
    $pdo = new PDO("mysql:host=localhost;dbname=userregistration", 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST['user'];
    $pass = $_POST['password'];

    // Check of gebruiker al bestaat
    $selectQuery = $pdo->prepare("SELECT * FROM usertable WHERE name = :name");
    $selectQuery->bindParam(':name', $name);
    $selectQuery->execute();
    
    if ($selectQuery->rowCount() > 0) {
        echo "Gebruikersnaam is al gekozen";
    } else {
        // Voeg new gebruker
        $insertQuery = $pdo->prepare("INSERT INTO usertable (name, password) VALUES (:name, :pass)");
        $insertQuery->bindParam(':name', $name);
        $insertQuery->bindParam(':pass', $pass);
        $insertQuery->execute();

        echo "Registratie voltooid!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
