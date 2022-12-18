<?php
    require 'Connection.php';
    $id= $_GET['id'];

    $query =  "SELECT * FROM nastavnimaterijal WHERE id = '{$id}'  ";  
    $result = mysqli_query($conn, $query);  
    $row = mysqli_fetch_array($result);

    header('Content-type: ' .$row['mime']);
    header("Content-Disposition: attachment; filename=".$row['ime']);
    ob_clean();
    flush();
    echo $row['datoteka'];
?>