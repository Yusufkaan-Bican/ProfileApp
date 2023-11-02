<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../public/css/login.css">

<style>
body {
  background-image: url('../public/img/back.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>

</head>

<body>
</br></br>
 <div class="container">
 	<div class="login-box" >
 	<div class="row">
 	<div>
  		<h2>Inloggen</h2>
 		<form action="validation.php" method="post">
 		<div>
 		<label>Gebruikersnaam</label>
 		<input type="text" name="user" required>
 		<div>
 		<label>Wachtwoord</label>
 		<input type="password" name="password" required>
 	</div>
     <button type="submit" class="btn btn-primary">Login
     </button>
   </form> 
 </div>

	<div class="row">
 	<div class="col-md-12 login-right">
 		<h2>Registreren</h2>
 		<form action="../controllers/registration.php" id="form" method="post">
 		<div>
 		<label>Gebruikersnaam</label>
 		<input type="text" name="user" required>
 		<div>
 		<label>Wachtwoord</label>
 		<input type="password" name="password" required>
 	</div>
     <button type="submit" class="btn btn-primary" onclick="myFunction()">Registreer
     </button>
   </form> 
 </div>

</div>
 </div>
</body>
<script type="text/javascript">
  var form = document.getElementById('form');

function myFunction() {
  if (form.checkValidity()) {
    alert("Succesvol geregistreerd!");
  }
}
</script>
</html>