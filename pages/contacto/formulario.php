<?php 

include("con_db.php");


if (isset ($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['msj']) >= 1 ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msj = trim($_POST['msj']);
        $fechacontact = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, mensaje, fecha_contacto) VALUES ('$name','$email','$msj','$fechacontact')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            ?>
            <h6 class="m-5">¡Mensaje Envíado!</h6>
            <a  class="m-5" href="contacto.php">Volver</a>
            <?php
        } else {
            ?>
            <h6 class="mt-3">¡Ups ha ocurrido un error!</h6>
            <a  class="m-5" href="contacto.php">Volver</a>
            <?php
        }
    } else {
            ?>
            <h6 class="mt-3">¡Porfavor complete todos los campos!</h6>
            <a  class="m-5" href="contacto.php">Volver</a>
            <?php
    }
}

?>