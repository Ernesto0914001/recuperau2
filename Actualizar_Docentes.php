<?php


if($_POST) {
    $id= $_POST["id"]
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellidos"];
    $FchdN= $_POST["FchdN"];
    $curp = $_POST["curp"];
    $num_empleado = $_POST["num_empleado"];

    if ($nombre != "" && $apellido != "" && $FchdN != "" && $curp != "" && $num_empleado != "" ){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=UTEZ", "root","root");
            $resultado = $pdo->prepare('UPDATE  Docentes SET nombre = :a,apellidos = :b,FchdN = :c,curp = :d, num_empleado = :e WHERE id = :f' );
            $resultado->bindParam(":a",$nombre,PDO::PARAM_STR);
            $resultado->bindParam(":b",$apellidos,PDO::PARAM_STR);
            $resultado->bindParam(":c",$FchdN,PDO::PARAM_STR);
            $resultado->bindParam(":d",$curp,PDO::PARAM_STR);
            $resultado->bindParam(":e",$num_empleado,PDO::PARAM_STR);
            $resultado->bindParam(":e",$id,PDO::PARAM_STR);
            $resultado->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }else{
        echo "-1";
    }
    
}
>