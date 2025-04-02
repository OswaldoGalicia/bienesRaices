<?php
        //bd
        require '../../includes/config/database.php';
        conectarBD();
        
        require '../../includes/funciones.php';
        incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <form action="" class="formulario">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo Propiedad">
                
                <label for="precio">Precio:</label>
                <input type="text" id="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imágen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">
            
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ingresa el número de habitaciones" min="1" max="9" >

                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Ingresa el número de baños" min="1" max="9" >

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Ingresa el número de estacionamientos" min="1" max="9" >

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select>
                    <option value="1">Gerardo</option>
                    <option value="2">Ximena</option>
                </select>
            
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
    
    <?php incluirTemplate('footer'); ?>