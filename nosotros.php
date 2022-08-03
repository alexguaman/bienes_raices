<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion">
      <h1>Conoce sobre nosotros</h1>
      <div class="ccontenido-nosotros">
        <div class="imagen">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
            <img
              loading="lazy"
              src="build/img/nosotros.jpg"
              alt="Sobre Nosotros"
            />
          </picture>
        </div>
        <div class="texto-nosotros">
          <blockquote>25 Años de experiencia</blockquote>
          <p>
            There are many variations of passages of Lorem Ipsum available, but
            the majority have suffered alteration in some form, by injected
            humour, or randomised words which don't look even slightly
            believable. If you are going to use a passage of Lorem Ipsum, you
            need to be sure there isn't anything embarrassing hidden in the
            middle of text.
          </p>
          <p>
            All the Lorem Ipsum generators on the Internet tend to repeat
            predefined chunks as necessary, making this the first true generator
            on the Internet. It uses a dictionary of over 200 Latin words,
            combined with a handful of model sentence structures, to generate
            Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
            therefore always free from repetition, injected humour, or
            non-characteristic words etc.
          </p>
        </div>
      </div>
    </main>

    <section class="contenedor seccion">
      <h1>Más Sobre Nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
            ullamcorper purus sapien, ac hendrerit felis aliquet sed.
            Pellentesque placerat lacinia nibh, at lobortis massa vehicula in.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="icono precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
            ullamcorper purus sapien, ac hendrerit felis aliquet sed.
            Pellentesque placerat lacinia nibh, at lobortis massa vehicula in.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="icono Tiempo" loading="lazy" />
          <h3>Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
            ullamcorper purus sapien, ac hendrerit felis aliquet sed.
            Pellentesque placerat lacinia nibh, at lobortis massa vehicula in.
          </p>
        </div>
      </div>
    </section>

    <?php incluirTemplate('footer'); ?>