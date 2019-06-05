<?php 
	mail($_POST['Komy'], $_POST['Tema'], $_POST['Pismo']);
	header("Location: index.html")
 ?>
