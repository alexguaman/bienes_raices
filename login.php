<?php

require 'includes/config/database.php';
$db = conectarDB();
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es válido";
    }
    if (!$password) {
        $errores[] = "El password es obligatorio";
    }

    if (empty($errores)) {

        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        echo $query;
        $resultado = mysqli_query($db, $query);
        $usuario = mysqli_fetch_assoc($resultado);

        var_dump($resultado->num_rows);
        if ($resultado->num_rows) {
            $auth = password_verify($password, $usuario['password']);
            
            if ($auth) {
                // Llenar el arreglo de la sesion
                session_start();
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin');
            } else {
                $errores[] = "Password es incorrecto";
            }

        } else {
            $erorres[] = "Usuario no existe";
        }
    }
}

require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Iniciar Sesión</h1>
    <?php foreach ($errores as $error) : ?>
        <p class="alerta error"><?php echo $error ?></p>
    <?php endforeach ?>
    <form method="POST" class="formulario">
        <fieldset>
            <legend>Email y Password</legend>
            <label for="email">Email</label>
            <input type="email" placeholder="Tu email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" placeholder="Tu password" id="password" name="password" required>
        </fieldset>
        <input type="submit" value="Iniciar Sesión" class="boton-verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>