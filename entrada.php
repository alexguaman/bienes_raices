<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Guía para la decoración de tu hogar</h1>      
      <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp" />
        <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada2.jpg"
          alt="imagen de la propiedad"
        />
      </picture>
      <p class="informacion-meta">
        Escrito el <span>20/10/2021</span> por <span>Admin</span>
      </p>
      <div class="resumen-propiedad">        
        
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
          ab illo inventore veritatis et quasi architecto beatae vitae dicta
          sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
          aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
          qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
          dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
          quia non numquam eius modi tempora incidunt ut labore et dolore magnam
          aliquam quaerat voluptatem.
        </p>
        <p>
            Ut enim ad minima veniam, quis nostrum
            exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex
            ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in
            ea voluptate velit esse quam nihil molestiae consequatur, vel illum
            qui dolorem eum fugiat quo voluptas nulla pariatur?
        </p>
      </div>
    </main>

    <?php incluirTemplate('footer'); ?>