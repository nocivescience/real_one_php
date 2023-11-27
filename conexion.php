<?php
    $conexion= mysqli_connect("localhost","root","","test");
    if (isset($_POST['submit'])) {
        if(!empty($_POST['nombre'])&& !empty($_POST['apellido'])&& !empty($_POST['ciudad'])){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $ciudad=$_POST['ciudad'];
            $sql="INSERT INTO real_one (name, surname, city) VALUES ('$nombre','$apellido','$ciudad')";
            $resultado= mysqli_query($conexion,$sql);
            if($resultado){
                ?>
                    <h3 class="ok">Datos insertados correctamente</h3>
                <?php
            }else{
                ?>
                    <h3 class="bad">Existe un error</h3>
                <?php
            }
        }else{
            ?>
                <h3 class="bad">Debes llenas los campos</h3>
            <?php
        }
    }
    $consulta="SELECT * FROM real_one";
    $resultado= mysqli_query($conexion,$consulta);
    $mostrar=mysqli_fetch_array($resultado);
    if(mysqli_num_rows($resultado)>0){
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellido</th><th>Ciudad</th></tr>";
        while($mostrar=mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$mostrar['name']."</td>";
            echo "<td>".$mostrar['surname']."</td>";
            echo "<td>".$mostrar['city']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No hay datos";
    }
?>