<?php
    session_start();
	if (isset($_POST['prijava']) && !empty($_POST['email']) && !empty($_POST['lozinka'])){
		require 'Connection.php';
		$korisnik = $_POST['email'];
		$sifra = $_POST['lozinka'];
		$sifraHash=hash('md5', $sifra);

		$upit = "SELECT email, lozinka, tip FROM korisnici WHERE email = '{$korisnik}' AND lozinka = '{$sifraHash}'";
		$rezultat = mysqli_query($conn,$upit);
		if (mysqli_num_rows($rezultat) > 0) {
			$podaci = mysqli_fetch_assoc($rezultat);
			 $_SESSION['user'] = $korisnik;
			 $_SESSION['tip']= $podaci["tip"];
		} else {
			echo "<script> alert('e-mail ili loznka ne postoje.')</script>";
		}
		
		header("Location: prijava.php");

	} 
?>