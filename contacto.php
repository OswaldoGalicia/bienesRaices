<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contactanos">
        </picture>

        <h2>Llena el formulario de Contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>

                <label for="nombre">Nombre: </label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="mail">Correo electronico: </label>
                <input type="email" placeholder="Tu Correo" id="mail">

                <label for="telefono">Teléfono: </label>
                <input type="tel" placeholder="Tu teléfono" id="telefono">

                <label for="mensaje">Mensaje: </label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Compra o venta: </label>
                <select id="opciones">
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="compra">Compra</option>
                    <option value="venta">Venta</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto: </label>
                <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">
                
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>¿Cómo desea ser contactado?</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    
                    <label for="contactar-email">Correo</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, por favor ingrese la fecha y la hora.</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="chora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php incluirTemplate('footer'); ?>