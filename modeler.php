<?php

include("controller.php");

if(isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $consulta = "INSERT INTO datos(nombre, email, telefono)
                VALUES('$name', '$email', '$phone')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="success">Registro realizado</h3>
                <?php
            } else{
             ?>
                <h3 class="error">Registro NO completado</h3>
             <?php
            }
    } else{
        ?>
            <h3 class="error">Completar todos los campos</h3>
        <?php
    }
}

?>