<?php

if($_POST) {
    $id= $_POST["id"]
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellidos"];
    $FchdN= $_POST["FchdN"];
    $curp = $_POST["curp"];
    $matricula = $_POST["matricula"];


    

    if ($nombre != "" && $apellido != "" && $FchdN != "" && $curp != "" && $matricula != "" ){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=UTEZ", "root","root");
            $resultado = $pdo->prepare('UPDATE  Alumnos SET nombre = :a,apellidos = :b,FchdN = :c,curp = :d, matricula = :e WHERE id = :f' );
            $resultado->bindParam(":a",$nombre,PDO::PARAM_STR);
            $resultado->bindParam(":b",$apellidos,PDO::PARAM_STR);
            $resultado->bindParam(":c",$FchdN,PDO::PARAM_STR);
            $resultado->bindParam(":d",$curp,PDO::PARAM_STR);
            $resultado->bindParam(":e",$matricula,PDO::PARAM_STR);
            $resultado->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }else{
        echo "-1";
    }
}
>