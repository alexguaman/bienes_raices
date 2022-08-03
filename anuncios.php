<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Anuncios</h1>

  <?php
  $limite = 100;
  include 'includes/templates/anuncios.php';
  ?>
  <!-- .contenedor-anuncio -->

  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver Todas</a>
  </div>
</main>

<?php incluirTemplate('footer'); ?>