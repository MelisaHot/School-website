<?php
	$serverName='localhost';
	$username='root';
	$password='';
	$dbName='TehTutin';
	
	$conn = mysqli_connect($serverName,$username,$password,$dbName);
	
	if ($conn == FALSE){
		echo "Neuspešno uspostavljanje veze";
	}
