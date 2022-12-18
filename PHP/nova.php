<?php
session_start();
	if (isset($_POST['obavestenje'])){
		$naslov = $_POST['naslov'];
		$tekst = $_POST['tekst'];
		$datum = date("Y-m-d");
		
		require 'Connection.php';

        
		$upit = "INSERT INTO obavestenja (naslov, tekst, datum) 
        VALUES ('{$naslov}','{$tekst}','{$datum}')";
        mysqli_query($conn,$upit);
        header("Location: novaobavestenja.php");
    }