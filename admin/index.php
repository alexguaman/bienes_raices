<?php
require '../includes/funciones.php';
if (!estaAutenticado()) {
  header('Location: /login.php');
}

require '../includes/config/database.php';
$db = conectarDB();

// Consulta BD
$consulta = 'SELECT * FROM propiedades';
$resultPropiedades = mysqli_query($db, $consulta);

// obtener variable get
$resultado = $_GET['resultado'] ?? null;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if ($id) {
    // eliminar el archivo imagen
    $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $query);
    $propiedad = mysqli_fetch_assoc($resultado);

    unlink('../imagenes/' . $propiedad['imagen']);

    // eliminar de BD
    $query = "DELETE FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $query);

    
    if ($resultado) {
      header('Location: /admin?resultado=3');
    }
  }
}

// template
// require '../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Administrador de Bienes Raíces</h1>

  <?php if ($resultado == "1") : ?>
    <p class="alerta exito">Creado exitosamente</p>
  <?php endif; ?>
  <?php if ($resultado == "2") : ?>
    <p class="alerta exito">Actualizado exitosamente</p>
  <?php endif; ?>
  <?php if ($resultado == "3") : ?>
    <p class="alerta exito">Eliminado correctamente</p>
  <?php endif; ?>

  <a class="boton-verde" href="/admin/propiedades/crear.php">Crear Nuevo</a>

  <table class="propiedades">
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Imagen</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($propiedad = mysqli_fetch_assoc($resultPropiedades)) : ?>
        <tr>
          <td><?php echo $propiedad['id'] ?></td>
          <td><?php echo $propiedad['titulo'] ?></td>
          <td><img src="/imagenes/<?php echo $propiedad['imagen'] ?>" class="imagen-tabla"></td>
          <td>$<?php echo $propiedad['precio'] ?></td>
          <td>
            <form method="POST" class="w-100">
              <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>">
              <input type="submit" class="boton-rojo-block" value="Eliminar">
            </form>
            <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'] ?>" class="boton-amarillo-block">Actualizar</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</main>

<?php
// Cerrar la conexion
mysqli_close($db);
incluirTemplate('footer');
?>