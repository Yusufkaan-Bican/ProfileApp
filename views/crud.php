<?php
// GEMAAKT DOOR YUSUFKAAN BICAN
session_start();
require '../controllers/config.php';

try {
    if (isset($_POST['delete_student'])) {
        $student_id = $_POST['delete_student'];

        $query = "DELETE FROM schoolprestatie WHERE id = :student_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':student_id', $student_id);

        $stmt->execute();

        header("Location: profiel.php");
        exit(0);
        // VERWIJDER QUERY
    }

    if (isset($_POST['update_student'])) {
        $student_id = $_POST['student_id'];
        $studentnaam = $_POST['studentnaam'];
        $school = $_POST['school'];
        $diploma = $_POST['diploma'];
        $cijfer = $_POST['cijfer'];

        $query = "UPDATE schoolprestatie SET studentnaam = :studentnaam, school = :school, diploma = :diploma, cijfer = :cijfer WHERE id = :student_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':studentnaam', $studentnaam);
        $stmt->bindParam(':school', $school);
        $stmt->bindParam(':diploma', $diploma);
        $stmt->bindParam(':cijfer', $cijfer);


        // UPDATE QUERY
        $stmt->execute();

        header("Location: profiel.php");
        exit(0);
    }

    if (isset($_POST['save_student'])) {
        $studentnaam = $_POST['studentnaam'];
        $school = $_POST['school'];
        $diploma = $_POST['diploma'];
        $cijfer = $_POST['cijfer'];

        $query = "INSERT INTO schoolprestatie (studentnaam, school, diploma, cijfer) VALUES (:studentnaam, :school, :diploma, :cijfer)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':studentnaam', $studentnaam);
        $stmt->bindParam(':school', $school);
        $stmt->bindParam(':diploma', $diploma);
        $stmt->bindParam(':cijfer', $cijfer);
        
        // VOEG TOE QUERY
        $stmt->execute();

        header("Location: profiel.php");
        exit(0);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
