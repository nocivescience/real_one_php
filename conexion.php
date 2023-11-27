<?php
    $conexion= mysqli_connect("localhost", "root", "", "prueba");
    if(isset($_POST['submit'])){
        if(!empty($_POST['nombre'])
            && !empty($_POST['apellido'])
            && !empty($_POST['ciudad'])
        ){
            $name=$_POST['nombre'];
            $surname=$_POST['apellido'];
            $city=$_POST['ciudad'];
            $consulta="INSERT INTO real_one(name, surname, city) VALUES ('$name', '$surname', '$city')";
            $resultado=mysqli_query($conexion, $consulta);
            if($resultado){
                
            }
        }
    }
?>