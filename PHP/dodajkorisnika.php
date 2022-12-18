<?php
session_start();
        if(isset($_GET['ok'])){

		$id=$_GET['id'];
		require 'Connection.php';
      
		$upit = "UPDATE korisnici SET tip = '2' WHERE id = '{$id}'";
        mysqli_query($conn,$upit);
        header("Location: korisnici.php");
        echo $id;
    }

    if(isset($_GET['svi'])){
		
		require 'Connection.php';
		$upit = "UPDATE korisnici SET tip = '2' WHERE tip = '3'";
        mysqli_query($conn,$upit);
        header("Location: korisnici.php");
        echo $id;
    }

    if(isset($_GET['brisi'])){
        require 'Connection.php';
		$id= $_GET['id'];
		
		$upit = "DELETE FROM korisnici WHERE id = '{$id}'";
        mysqli_query($conn,$upit);
      
       header("Location: korisnici.php");
    }
?>