<?php

if ($_POST) {
    ini_set('display_errors',1);
    $registros = $_POST["registros"];
    
    if ($registros==1) {
        echo "Registos de Docente.";
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellidos"];
        $FchdN= $_POST["FchdN"];
        $curp = $_POST["curp"];
        $num_empleado = $_POST["num_empleado"];

        if ($nombre != "" && $apellidos != "" && $FchdN != "" 
        && $curp != "" && $num_empleado != "") {
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=UTEZ","root","root");
                $resultado = $pdo -> prepare('INSERT INTO Docentes (nombre,apellidos,FchdN,curp,num_empleado)
                VALUES (:a,:b,:c,:d,:e)');
               $resultado->bindParam(":a",$nombre,PDO::PARAM_STR);
               $resultado->bindParam(":b",$apellidos,PDO::PARAM_STR);
               $resultado->bindParam(":c",$FchdN,PDO::PARAM_STR);
               $resultado->bindParam(":d",$curp,PDO::PARAM_STR);
               $resultado->bindParam(":e",$num_empleado,PDO::PARAM_STR);
            } catch (PDOException $e) {
                echo $e -> getMessage();
            }
        }else{
            echo "-1";
        }
    }else
    if($registros == 2){
        echo "Registros de Alumno";
        $e_nombre = $_POST["nombre"];
        $e_apellidos = $_POST["apellidos"];
        $e_FchdN = $_POST["FchdN"];
        $e_curp = $_POST["curp"];
        $matricula = $_POST["matricula"];

        if ($nombnre != "" && $apellidos != "" && $FchdN != "" && $curp != "" && $matricula != "") {
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=UTEZ","root","root");
                $resultado = $pdo -> prepare('INSERT INTO Alumnos(nombre,apellidos, FchdN ,curp,matricula)
                VALUES (:a,:b,:c,:d,:e)');
                $resultado->bindParam(":a", $e_nombre, PDO::PARAM_STR);
                $resultado->bindParam(":b", $e_apellidos, PDO::PARAM_STR);
                $resultado->bindParam(":c", $FchdN, PDO::PARAM_STR);
                $resultado->bindParam(":d", $e_curp, PDO::PARAM_STR);
                $resultado->bindParam(":e", $matricula, PDO::PARAM_STR);
                $resultado -> execute();
            } catch (PDOException $e) {
                echo $e -> getMessage();
            }
        }else{
            echo "-1";
        }
    }else{
        echo "ERROR AL REGISTRAR";
    }
}

?>