<?php
    $tipo_host_bbdd = "mysql:host=localhost;dbname=mi_proyecto";    
    $user = "Viloria";
    $password = "8080";

    try{
        $ObjetConexion = new PDO($tipo_host_bbdd,$user,$password);
        

    }catch(Exception $e){
        
        echo "Eror al conectar<br> Info: ". $e->getMessage();
    }finally{
        //$ObjetConexion = null;
    }

?>