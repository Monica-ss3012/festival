<?php
    //include("config.php");
    if (isset($_POST['bEnviar'])){
        if(
            strlen($_POST['name']) >= 1 && 
            strlen($_POST['lastname']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['boletos']) >= 1  
        ){
        $name = trim($_POST['name']); 
        $lastname = trim($_POST['lastname']); 
        $email = trim($_POST['email']); 
        $phone = trim($_POST['phone']); 
        $boletos = trim($_POST['boletos']); 
        $consulta = "INSERT INTO usuarios (fname ,lname ,email , phone , tickettype)
            VALUES('$name', '$lastname', '$email', '$phone','$boletos')";
            $resultado = mysqli_query($conn, $consulta);
            if($resultado){
                ?>
                <h3 class="sucess">Tu registro se ha completado</h3>
                <?php
            } else {
                ?>
                <h3 class= "error">Ocurrio un error</h3>
                <?php
            } 
        }else{
            ?>
            <h3 class= "error">Llena todos los campos</h3>
            <?php
        }
    }
    
?>