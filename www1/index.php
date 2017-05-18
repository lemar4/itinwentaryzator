<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: zestawienie.php');
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inwentaryzacja</title>
    <style type="text/css" id="position-text-style">
    p {
      margin: 0px;
    }
    h1 {
      margin: 0px;
    }
    h2 {
      margin: 0px;
    }
    h3 {
      margin: 0px;
    }
  </style>
  <style type="text/css">
    html, body {
      width: 100%;
      height: 100%;
      margin: 0px;
    }
    body {
      transform: perspective(1400px) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
      transform-style: preserve-3d;
      background-color: transparent;
    }
    .position1 {
      position: absolute;
      left: 275px;
      top: 44px;
      background-image: none;
      background-color: transparent;
    }
    .position2 {
      position: absolute;
      top: 122px;
      text-align: left;
      transform-origin: -24.3438px 6px 0px;
      width: 194px;
      height: 24px;
      left: 282px;
	}
	  .position3 {
      position: absolute;
      top: 152px;
      text-align: left;
      transform-origin: -24.3438px 6px 0px;
      width: 194px;
      height: 24px;
      left: 282px;
    }
    .position4 {
      position: absolute;
      width: 260px;
      top: 122px;
      transform-origin: -251.344px 6px 0px;
      height: 44px;
      left: 514px;
    }
  </style>
</head>

<body class="htmlNoPages">
  <p class="position1">Witamy w programie&nbsp;<br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>ASSET MANAGEMENT SYSTEM</strong>
  </p>
  <p class="position2">Zaloguj się na swoje konto:</p>
  <form action="zaloguj.php" method="post">
	<p class="position3">
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
	</p>
	</form>
  <p class="position4"><a href="rejestracja.php">Wyślij email do Administratora z prośbą o założenie konta</a></p>
  
 <?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
</body>

</html>

