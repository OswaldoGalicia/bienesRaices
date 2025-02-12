<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros.</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia.
                </blockquote>
                <p>Mauris a tellus erat. Curabitur malesuada, purus vel ultricies commodo, sem nunc convallis tellus, id porta nulla odio eget lectus. Etiam cursus euismod vehicula. Cras gravida risus erat, ac imperdiet eros hendrerit at. Vestibulum in convallis libero. Sed fringilla, augue et vulputate pulvinar, dolor orci ullamcorper elit, et mattis tortor est a tellus. Curabitur metus felis, lobortis quis molestie in, venenatis ac magna. Quisque non sem a justo luctus bibendum. </p>
                <p>Aenean eleifend erat vitae nulla maximus tempor. Praesent nisl nisl, convallis sed rhoncus aliquet, tincidunt eu massa. In risus urna, ultrices non orci id, egestas condimentum nunc. Morbi purus augue, feugiat id nisi eget, porta scelerisque lorem. Phasellus nec posuere justo. Suspendisse et vulputate elit. Etiam id libero sit amet lorem ultrices sagittis.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros.</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Mauris sodales sollicitudin mauris id aliquam. Integer tempus purus at pharetra porta. Sed molestie lacus purus, vitae pellentesque est eleifend varius. Nam hendrerit vulputate placerat. Nullam ut egestas mi, eget placerat arcu. </p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Mauris sodales sollicitudin mauris id aliquam. Integer tempus purus at pharetra porta. Sed molestie lacus purus, vitae pellentesque est eleifend varius. Nam hendrerit vulputate placerat. Nullam ut egestas mi, eget placerat arcu. </p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Mauris sodales sollicitudin mauris id aliquam. Integer tempus purus at pharetra porta. Sed molestie lacus purus, vitae pellentesque est eleifend varius. Nam hendrerit vulputate placerat. Nullam ut egestas mi, eget placerat arcu. </p>
            </div>
        </div>
    </section>

    <?php incluirTemplate('footer'); ?>