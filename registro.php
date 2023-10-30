<?php
// coneción a bd
$host = "localhost";
$user = "root";
$password = "";
$database = "appreg";

$conn = mysqli_connect($host, $user, $password, $database);
// Inserta datos del formulario en la bd
if (isset($_POST['name'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['boletos']) >= 1
    ) {
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $boletos = trim($_POST['boletos']);
        $consulta = "INSERT INTO usuarios (fname ,lname ,email , phone , tickettype)
            VALUES('$name', '$lastname', '$email', '$phone','$boletos')";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            echo "<script>alert('Registro exitoso'); location.href='index.php'</script>";
        } else {
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
// Inserta datos del formulario en la bd
?>