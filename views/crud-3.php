<?php
// GEMAAKT DOOR YUSUFKAAN BICAN
session_start();
require '../controllers/config.php';

try {
    if (isset($_POST['delete_student'])) {
        $student_id = $_POST['delete_student'];

        $query = "DELETE FROM hobby WHERE id = :student_id";
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
        $hobby = $_POST['hobby'];
        $inter = $_POST['inter'];

        $query = "UPDATE hobby SET studentnaam = :studentnaam, hobby = :hobby, inter = :inter WHERE id = :student_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':studentnaam', $studentnaam);
        $stmt->bindParam(':hobby', $hobby);
        $stmt->bindParam(':inter', $inter);

        // Voer deze update query uit
        $stmt->execute();

        header("Location: profiel.php");
        exit(0);
    }

    if (isset($_POST['save_student'])) {
        $studentnaam = $_POST['studentnaam'];
        $hobby = $_POST['hobby'];
        $inter = $_POST['inter'];

        $query = "INSERT INTO hobby (studentnaam, hobby, inter) VALUES (:studentnaam, :hobby, :inter)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':studentnaam', $studentnaam);
        $stmt->bindParam(':hobby', $hobby);
        $stmt->bindParam(':inter', $inter);

        // // Voer deze voeg toe query uit
        $stmt->execute();

        header("Location: profiel.php");
        exit(0);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
