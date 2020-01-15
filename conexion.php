<?php
try{
    $base=new PDO('mysql:host=162.241.60.183 ; dbname=maxancom_maxysdb',  'maxancom_benthan', 'Acces0:BD');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
}catch(Exception $e){
    die('Error' . $e->getMessage());
    echo "Línea del error" . $e->getLine();
}
?>
