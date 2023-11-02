<?php
// GEMAAKT DOOR YUSUFKAAN BICAN

session_start();
require '../controllers/config.php';

if (!isset($_SESSION['username']) ) {
    header('location: ../controllers/login.php');
}
?>
<!-- HTML GEDEELTE -->
<!DOCTYPE html>
<html>

<head>
    <title>Profiel-Maker</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>

    <img src="../public/img/wmlogo.png" style="width:170px;" />
    <div class="welkom">
        <h1 style="color: black"> Welkom <?php echo $_SESSION['username']; ?> !</h1>
    </div>

    <div class="topnav">
        <a href="./index.php">Home</a>
        <a href="./profiel.php">Profiel aanmaken</a>
        <a href="./over.php">Bekijk profielen</a>
        <a href="../controllers/uitloggen.php"> Uitloggen</a>
    </div>
    <br>
    <div id="container1">
        <h2>Laten we beginnen met jou ProfilePlus + te maken!</h2>
    </div>
    <br>
    <div id="container2">
        <img src="../public/img/student.png" id="profiel"></img>
        <h2>Schoolprestatie</h2>


        
        <input type="button" onclick="location.href='./create-schoolprestatie.php';" value="Maak een schoolprestatie !" class="button-style" />

        <table id="container2">
            <thead>
                <tr>
                    <th>Studentnaam</th>
                    <th>School</th>
                    <th>Diploma</th>
                    <th>Cijfer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    // CONNECT DB EN LAAT DATA ZIEN VAN TABLE
                    $pdo = new PDO("mysql:host=localhost;dbname=userregistration", 'root', '' );
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $query = "SELECT * FROM schoolprestatie";
                    $stmt = $pdo->query($query);

                    while ($student = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                   ?>
                        <tr>
                            <td><?= $student['studentnaam']; ?></td>
                            <td><?= $student['school']; ?></td>
                            <td><?= $student['diploma']; ?></td>
                            <td><?= $student['cijfer']; ?></td>
                            <td></br>
                        
                                <a href="edit-schoolprestatie.php?id=<?= $student['id']; ?>" class="button-edit">Bewerken</a>
                                
                                <form action="crud.php" method="POST" class="d-inline">
                                </br>
                                   <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="button-delete">Verwijderen</button>
                                </form>

                            </td>
                        </tr>
                    <?php
                    }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </br>

    <div id="container2">
        <img src="../public/img/werk.png" id="profiel"></img>
        <h2>Werkervaring</h2>
        <input type="button" onclick="location.href='./create-werkervaring.php';" value="Maak een werkervaring !" class="button-style" />

        <table id="container2">
            <thead>
                <tr>
                    <th>Studentnaam</th>
                    <th>Werkgever</th>
                    <th>Functietitel</th>
                    <th>Datum</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $pdo = new PDO("mysql:host=localhost;dbname=userregistration", 'root', '' );
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $query = "SELECT * FROM werkervaring";
                    $stmt = $pdo->query($query);

                    while ($student = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                   ?>
                        <tr>
                            <td><?= $student['studentnaam']; ?></td>
                            <td><?= $student['werkgever']; ?></td>
                            <td><?= $student['functie']; ?></td>
                            <td><?= $student['datum']; ?></td>
                            <td></br>
                        
                                <a href="edit-werkervaring.php?id=<?= $student['id']; ?>" class="button-edit">Bewerken</a>
                                
                                <form action="crud-2.php" method="POST" class="d-inline">
                                </br>
                                   <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="button-delete">Verwijderen</button>
                                </form>

                            </td>
                        </tr>
                    <?php
                    }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>
    </br>
    <div id="container2">
        <img src="../public/img/hobby.png" id="profiel"></img>
        <h2>Hobby's</h2>
                <input type="button" onclick="location.href='./create-hobby.php';" value="Voeg hobby toe !" class="button-style" />

        <table id="container2">
            <thead>
                <tr>
                    <th>Studentnaam</th>
                    <th>Hobby</th>
                    <th>Interesse</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    // CONNECT DB EN LAAT DATA ZIEN VAN TABLE
                    $pdo = new PDO("mysql:host=localhost;dbname=userregistration", 'root', '' );
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $query = "SELECT * FROM hobby";
                    $stmt = $pdo->query($query);

                    while ($student = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                   ?>
                        <tr>
                            <td><?= $student['studentnaam']; ?></td>
                            <td><?= $student['hobby']; ?></td>
                            <td><?= $student['inter']; ?></td>
                            <td></br>
                        
                                <a href="edit-hobby.php?id=<?= $student['id']; ?>" class="button-edit">Bewerken</a>
                                
                                <form action="crud-3.php" method="POST" class="d-inline">
                                </br>
                                   <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="button-delete">Verwijderen</button>
                                </form>

                            </td>
                        </tr>
                    <?php
                    }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>
    </br>
    <footer>
        <div class="footer">
            <div class="row">
     <ul>
<li><a href="./index.php">Home</a></li>
<li><a href="./profiel.php">Profiel aanmaken</a></li>
<li><a href="./over.php">Bekijk profielen</a></li>
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
