<?php

    if(isset($_POST['nastavnajedinica']) ){
        ini_set('mysql.connect_timeout', 300);
        ini_set('default_socket_timeout', 300);
        require 'Connection.php';
        $kategorija1=$_POST['prvi'];
        $kategorija2=$_POST['drugi'];
        $kategorija3=$_POST['treci'];
        $kategorija4=$_POST['cetvrti'];
        $kategorija5=$_POST['peti'];
        $kategorija6=$_POST['sesti'];
        $kategorija7=$_POST['sedmi'];
        $kategorija8=$_POST['osmi'];
        $kategorija9=$_POST['deveti'];
        $kategorija10=$_POST['deseti'];

        $prvi=$_POST['prva'];
        $drugi=$_POST['druga'];
        $treci=$_POST['treca'];
        $cetvrti=$_POST['cetvrta'];

        $predmet=$_POST['predmet'];

        $name=$_FILES['file']['name'];
        $type=$_FILES['file']['type'];
        $file= addslashes(file_get_contents($_FILES["file"]["tmp_name"])); 

        if($kategorija1=='0' && $kategorija2=='0' && $kategorija3=='0' && $kategorija4=='0'  && $kategorija5=='0' && $kategorija6=='0' && $kategorija7=='0' && $kategorija8=='0' && $kategorija9=='0' && $kategorija10=='0'){
            $problem="Odaberite jedan ili više obrazovnih profila za koje unosite nastavnu jedinicu.";
        }
        else if($prvi=='0' && $drugi=='0' && $treci=='0' &&  $cetvrti=='0'){
            $problem='Odaberite  jedan ili više razreda za koje unosite nastavnu jedinicu.';
        }
        else {
               $upit = "INSERT INTO nastavnimaterijal (kategorija1, kategorija2, kategorija3,kategorija4, 
                    kategorija5, kategorija6, kategorija7, kategorija8, kategorija9, kategorija10, prvi, drugi, 
                    treci, cetvrti, predmet, ime, mime, datoteka) 
                    VALUES ('{$kategorija1}', '{$kategorija2}', '{$kategorija3}', '{$kategorija4}', '{$kategorija5}',
                    '{$kategorija6}', '{$kategorija7}', '{$kategorija8}', '{$kategorija9}', '{$kategorija10}',
                    '{$prvi}','{$drugi}','{$treci}', '{$cetvrti}','{$predmet}','{$name}', '{$type}', '{$file}')";
                
             
                if(mysqli_query($conn,$upit)) { 
                    $problem="Uspešno dodata nova nastavna jedinica.";    
                }
                else{
                   echo mysqli_error($conn);
                }
                        
            }        
    }



?>