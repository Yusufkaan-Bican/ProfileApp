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
    <br>
    <div id="container2">
        <img src="../public/img/hobby.png" id="profiel"></img>
        <h2>Hobby's</h2>
        <div class="card-body" >
    <form action="crud-3.php" method="POST" id="container2"> 

        <div class="mb-3">
            <label>Studentnaam</label>
            <input type="text" name="studentnaam" class="form-control">
        </div>
        <div class="mb-3">
            <label>Hobby</label>
            <input type="text" name="hobby" class="form-control">
        </div>
        <div class="mb-3">
            <label>Interesse</label>
            <input type="text" name="inter" class="form-control">
        </div>
        <input type="submit" onclick="location.href='./profiel.php';" name="save_student" value="Sla gegevens op" class="button-style" />
    </form>
</div>

    <br>
</div>
    <br>
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
