<?php

try {
  
  $con = new PDO('mysql:host='.HOST.';dbname='.BD, USER, PASS);

  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

} catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();
    
    die();
}

