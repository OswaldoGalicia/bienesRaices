<?php
        //bd
        require '../../includes/config/database.php';
        $db = conectarBD();
        
        require '../../includes/funciones.php';
        incluirTemplate('header');
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $titulo = $_POST['titulo'];
            $precio = $_POST['precio'];
            $descripcion = $_POST['descripcion'];
            $habitaciones = $_POST['habitaciones'];
            $wc = $_POST['wc'];
            $estacionamiento = $_POST['estacionamiento'];
            $vendedor = $_POST['vendedor'];

            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedor_id) VALUES ('$titulo',$precio,'$descripcion',$habitaciones,$wc,$estacionamiento,$vendedor);";
            echo $query;
            $res = mysqli_query($db, $query);
            if($res){
                echo "se ingresaron los datos";
            }
        }

?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name = "titulo" placeholder="Titulo Propiedad">
                
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imágen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">
            
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ingresa el número de habitaciones" min="1" max="9" >

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ingresa el número de baños" min="1" max="9" >

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ingresa el número de estacionamientos" min="1" max="9" >

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="1">Gerardo</option>
                    <option value="2">Ximena</option>
                </select>
            
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
    
    <?php incluirTemplate('footer'); ?>