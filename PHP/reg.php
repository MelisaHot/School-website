<?php
	if (isset($_POST['registracija'])){
		$ime = $_POST['ime'];
		$prezime = $_POST['prezime'];
		$email = $_POST['email'];
		$sifra = $_POST['lozinka'];
		$sifraHash= hash('md5', $sifra);
		$tip= "3";
		require 'Connection.php';
		
		
		$provera = "SELECT email FROM korisnici WHERE email = '{$email}'";
		$rezultat = mysqli_query($conn,$provera);
		if (mysqli_num_rows($rezultat) > 0) {
           echo "<script> alert('E-mail već postoji.')</script>";
		} else {
			
				
				$upit = "INSERT INTO korisnici (ime, prezime, email, lozinka, tip) 
				               VALUES ('{$ime}','{$prezime}','{$email}','{$sifraHash}','{$tip}')";
                mysqli_query($conn,$upit);
                echo "<script> alert('Uspešna registracija.')</script>";
            }
			
			
			$upit = "SELECT email, lozinka, tip FROM korisnici WHERE email = '{$email}' AND lozinka = '{$sifraHash}'";
			$rez = mysqli_query($conn,$upit);
			if (mysqli_num_rows($rez) > 0) {
				$podaci = mysqli_fetch_assoc($rez);
				 $_SESSION['user'] = $email;
				 $_SESSION['tip']= $podaci["tip"];
				
			} else {
				echo "<script> alert('Neispravan e-mail ili lozinka.')</script>";
			}
           
    }
?>