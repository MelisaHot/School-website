<?php
session_start();
        if(isset($_POST['ok'])){


		$id=$_POST['custId'];
		require 'Connection.php';
        
		$upit = "DELETE FROM obavestenja WHERE id = '{$id}'";
        mysqli_query($conn,$upit);
        header("Location: novaobavestenja.php");
    }
?>