<?php
// GEMAAKT DOOR YUSUFKAAN BICAN
session_start();
require '../controllers/config.php';

if (!isset($_SESSION['username'])) {
header('location: ../controllers/login.php');
}
?>

<!-- HTML GEDEELTE -->
<!DOCTYPE html>
<html>

<head>
    <title>Home-page</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/login.css">
</head>

<body>

    <img src="../public/img/wmlogo.png" class="wmlogo" style="width:170px;" />
    <div class="welkom">
        <h1 style="color: black"> Welkom <?php echo $_SESSION['username']; ?> !</h1>
    </div>

    <div class="topnav">
        <a href="./index.php">Home</a>
        <a href="./profiel.php">Profiel aanmaken</a>
        <a href="over.php">Bekijk profielen</a>
        <a href="../controllers/uitloggen.php"> Uitloggen</a>
    </div>
    <br>
    <div id="container1">
        <h2>Laten we beginnen met jou ProfilePlus + te maken!</h2>
    </div>
    </br>
    <div id="container2">
        <img src="../public/img/werk.png" id="profiel"></img>
        <h2>Werkervaring</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <div class="card-body">


                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = $_GET['id'];
                            $query = "SELECT * FROM werkervaring WHERE id = :student_id";
                            $stmt = $pdo->prepare($query);
                            $stmt->bindParam(':student_id', $student_id);
                            $stmt->execute();

                            if ($stmt->rowCount() > 0) {
                                $student = $stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                                <form action="crud-2.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Studentnaam</label>
                                        <input type="text" name="studentnaam" value="<?= $student['studentnaam']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Werkgever</label>
                                        <input type="text" name="werkgever" value="<?= $student['werkgever']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Functie</label>
                                        <input type="text" name="functie" value="<?= $student['functie']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Datum</label>
                                        <input type="text" name="datum" value="<?= $student['datum']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3"></BR>
                                        <button type="submit" name="update_student" class="button-style">
                                            Bewerken
                                        </button>
                                    </div>
                                </form>
                        <?php
                            } else {
                                echo "<h4>Geen Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

</br>
<footer>
    <div class="footer">
        <div class="row">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./profiel.php">Profiel aanmaken</a></li>
                <li><a href="./over.php">Over ons</a></li>
                <li><a href="../controllers/uitloggen.php">Uitloggen</a></li>
            </ul>
        </div>

        <div class="row">
            Groep GGG | Hogeschool Windesheim Almere | AD Software Development
        </div>
    </div>
</footer>
</body>
</html>