<?php

    if(isset($_POST['novidokument']) ){
        ini_set('mysql.connect_timeout', 300);
        ini_set('default_socket_timeout', 300);
        require 'Connection.php';
        $name=$_FILES['file']['name'];
        $type=$_FILES['file']['type'];
        $file= addslashes(file_get_contents($_FILES["file"]["tmp_name"])); 

               $upit = "INSERT INTO dokumenta (ime, mime, datoteka) 
                    VALUES ('{$name}', '{$type}', '{$file}')";
                
             
                if(mysqli_query($conn,$upit)) { 
                    $problem="Uspešno dodat novi dokument.";    
                }
                else{
                   echo mysqli_error($conn);
                }
                        
                   
    }



?>