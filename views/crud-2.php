<?php
// GEMAAKT DOOR YUSUFKAAN BICAN
session_start();
require '../controllers/config.php';

try {
    if (isset($_POST['delete_student'])) {
        $student_id = $_POST['delete_student'];

        $query = "DELETE FROM werkervaring WHERE id = :student_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':student_id', $student_id);

        // Voer deze delete query uit
        $stmt->execute();

        header("Location: profiel.php");
        exit(0);
    }

    if (isset($_POST['update_student'])) {
        $student_id = $_POST['student_id'];
        $studentnaam = $_POST['studentnaam'];
        $werkgever = $_POST['werkgever'];
        $functie = $_POST['functie'];
        $datum = $_POST['datum'];

        $query = "UPDATE werkervaring SET studentnaam = :studentnaam, werkgever = :werkgever, functie = :functie, datum = :datum WHERE id = :student_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':studentnaam', $studentnaam);
        $stmt->bindParam(':werkgever', $werkgever);
        $stmt->bindParam(':functie', $functie);
        $stmt->bindParam(':datum', $datum);

        // Voer deze update query uit
        $stmt->execute();

        header("Location: profiel.php");
        exit(0);
    }

    if (isset($_POST['save_student'])) {
        $studentnaam = $_POST['studentnaam'];
        $werkgever = $_POST['werkgever'];
        $functie = $_POST['functie'];
        $datum = $_POST['datum'];

        $query = "INSERT INTO werkervaring (studentnaam, werkgever, functie, datum) VALUES (:studentnaam, :werkgever, :functie, :datum)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':studentnaam', $studentnaam);
        $stmt->bindParam(':werkgever', $werkgever);
        $stmt->bindParam(':functie', $functie);
        $stmt->bindParam(':datum', $datum);

        // // Voer deze voeg toe query uit
        $stmt->execute();

        header("Location: profiel.php");
        exit(0);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
