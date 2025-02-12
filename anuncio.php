<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque.</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Mauris a tellus erat. Curabitur malesuada, purus vel ultricies commodo, sem nunc convallis tellus, id porta nulla odio eget lectus. Etiam cursus euismod vehicula. Cras gravida risus erat, ac imperdiet eros hendrerit at. Vestibulum in convallis libero. Sed fringilla, augue et vulputate pulvinar, dolor orci ullamcorper elit, et mattis tortor est a tellus. Curabitur metus felis, lobortis quis molestie in, venenatis ac magna. Quisque non sem a justo luctus bibendum. </p>
            <p>Aenean eleifend erat vitae nulla maximus tempor. Praesent nisl nisl, convallis sed rhoncus aliquet, tincidunt eu massa. In risus urna, ultrices non orci id, egestas condimentum nunc. Morbi purus augue, feugiat id nisi eget, porta scelerisque lorem. Phasellus nec posuere justo. Suspendisse et vulputate elit. Etiam id libero sit amet lorem ultrices sagittis.</p>
           
        </div>
    </main>

    <?php incluirTemplate('footer'); ?>