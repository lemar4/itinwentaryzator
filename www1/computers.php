<?php
include "menu.htm";
include "connect.php";
?>
<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>


<?php
$pdocrud = new PDOCrud();//create object of PDOCrud Class
echo $pdocrud->dbTable("computers")->render(); // call render function on database table

?>
