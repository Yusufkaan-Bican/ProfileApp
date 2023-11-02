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
</head>
  
<body>
     <img src="../public/img/wmlogo.png" class="wmlogo" style="width:170px;"/>
  <div class="welkom">
  <h1 style="color: black"> Welkom <?php echo $_SESSION['username']; ?> !</h1>   
  </div> 

<div class="topnav">
        <a href="./index.php">Home</a>
        <a href="./profiel.php">Profiel aanmaken</a>
        <a href="./over.php">Bekijk profielen</a>
        <a href="../controllers/uitloggen.php"> Uitloggen</a>
</div>
</br>
<div id="container1">
  <h2>Welkom bij applicatie ProfilePlus +</h2>

  <p>
<b>De ProfilePlus</b> is een handige computerapplicatie waarmee je je online profielen en digitale identiteit kunt beheren. </br>Of je nu je sociale media profielen wilt verbeteren of een professioneel zakelijk profiel wilt aanmaken, de ProfilePlus maakt het <b>gemakkelijk.</b> </br></br>Het <b>helpt</b> je om jezelf online op een aantrekkelijke en consistente manier te presenteren.</p>
</div></br>
<div id="container2">
     <img src="../public/img/profiel.png" id="profiel"></img>
    <h2>Maak nu jou online Profiel</h2>
    <p>
<b>Profielbeheer</b>: Effectief Profielbeheer voor een Succesvolle Toekomst</br></br>

<b>Schoolprestatie</b>: Excelleren in het Klaslokaal: Schoolprestaties in de Schijnwerpers</br></br>

<b>Werkervaring</b>: Op Weg naar Succes: Mijn Werkervaring en Loopbaantraject</br></br>

<b>Hobby's</b>: Passie en Ontspanning: Ontdekking van Mijn Hobby's</p>

<input type="button" onclick="location.href='./profiel.php';" value="Maak mijn profiel !" class="button-style" />

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