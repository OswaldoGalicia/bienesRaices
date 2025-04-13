<?php
        //bd
        require '../../includes/config/database.php';
        $db = conectarBD();

        $consulta_vendedores = "SELECT * FROM vendedores;";
        $vendedores = mysqli_query($db, $consulta_vendedores);

        $error = [];


        $titulo = '';
        $precio = '';
        $descripcion = '';
        $habitaciones = '';
        $wc = '';
        $estacionamiento = '';
        $vendedorID = '';

        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){


            // echo '<pre>';
            // var_dump($_FILES);
            // echo '</pre>';
            
                        
            $precio = mysqli_real_escape_string($db, $_POST['precio']);
            $titulo = mysqli_real_escape_string($db,  $_POST['titulo']);
            $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
            $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
            $wc = mysqli_real_escape_string($db, $_POST['wc']);
            $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
            $vendedorID = mysqli_real_escape_string($db, $_POST['vendedor']);
            $creado = date('Y/m/d');


            // asignar files a una variable

            $imagen = $_FILES['imagen'];


            if(empty($titulo)){
                $error[] = 'Debes ingresar un titulo para la propiedad.';
            }
            if(empty($precio)){
                $error[] = 'Debes ingresar un precio para la propiedad.';
            }
            if(empty($descripcion)){
                $error[] = 'Debes ingresar una descripcion mayor a 50 caracteres';
            }
            if(empty($habitaciones)){
                $error[] ='Debes ingresar un numero de habitaciones';
            }
            if(empty($wc)){
                $error[] = 'Debes ingresar una cantidad valida de baños';
            }
            if(empty($estacionamiento)){
                $error[] = 'Debes ingresar una cantidad valida de estacionamientos';
            }
            if(empty($vendedorID)){
                $error[] = 'Debes ingresar un vendedor';
            }
            if(!$imagen['name'] || $imagen['error']){
                $error[] = 'La imagen es obligatoria';
            }

            // validacion de tamaño de imagen
            //maximo de 100kb
            $medida = 1024 * 100;
            if($imagen['size'] > $medida){
                $error[] = 'La imagen es muy pesada';
            }

            if(empty($error)){

                $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado , vendedor_id) VALUES ('$titulo',$precio,'$descripcion',$habitaciones,$wc,$estacionamiento,'$creado',$vendedorID);";
                $res = mysqli_query($db, $query);
                if($res){
                    header('Location: /admin');
                }

            }
        }
                
        require '../../includes/funciones.php';
        incluirTemplate('header');


?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($error as $e): ?>
            <div class="alerta error">
                <?php echo $e; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name = "titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">
                
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">
                
                <label for="imagen">Imágen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
            
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ingresa el número de habitaciones" min="1" max="9" value="<?php echo $habitaciones ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ingresa el número de baños" min="1" max="9" value="<?php echo $wc ?>" >

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ingresa el número de estacionamientos" min="1" max="9" value="<?php echo $estacionamiento ?>" >

            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="0">-- Selecciona un vendedor --</option>

                    <?php while($row = mysqli_fetch_assoc($vendedores) ):  ?>
                        <option <?php echo $vendedorID === $row['id'] ? 'selected' : ''; ?>  value="<?php echo $row['id']  ?>"><?php echo $row['nombre']  . " " . $row['apellido'] ?></option>
                        
                    <?php endwhile; ?>
                </select>
            
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
    
    <?php incluirTemplate('footer'); ?>