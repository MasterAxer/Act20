<html>
    <head>
    <title>Envio de informaci&oacute;n</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
    <body>
    <!--Banner de bulma-->
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                <h1 class="title">Universidad de Colima</h1>
                <h2 class="subtitle">Facultad de Telemática</h2>
                </div>
            </div>
        </section>
        <!-----Cuerpo del documento---->
            <div class="container">
                <div class="has-text-centered">
                    <h1 class="title is-1">Control de usuarios<br></h1>
                    <form action="agregar.php">
                        <button class="button is-success is-rounded" style="position: absolute;left: 80%;">Agregar Usuario</button>
                    </form>
                    <a href='../index.php'><input class='button is-info is-rounded' type='button' value='Cerrar sesión' style="position: absolute;right: 80%;"></a>
                    <br/>
                    <br/>
                    <div class="box has-text-justified">
                        <?php require '../conexion/conexion.php'; ?>
      
                    <?php
                        function mostrartabla($conexion){
                            $consulta="SELECT * FROM usuarios";
                            $resultado=mysqli_query($conexion,$consulta);
                               
                                while($fila=mysqli_fetch_array($resultado))
                                {
                                    echo "<tr>";
                                    echo "<td>".$fila['id'];
                                    echo "<td>".$fila['nombre'];
                                    echo "<td>".$fila['correo'];
                                    echo "<td>".$fila['login'];
                                    echo "<td><a class='button is-link is-small is-rounded' href='editar.php?id=".$fila['id']."'>Editar
                                            <a class='button is-danger is-small is-rounded' href='eliminar.php?id=".$fila['id']."'>Borrar";
                                    echo "<tr>";
                                }
                                echo "<script src='../js/confirmation.js'></script>";
                            mysqli_close($conexion);
                        }
                    ?>
                    
                        <table class="table is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Login</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                <?=mostrartabla($conexion)?>
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
            <!--Footer de bulma-->
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                <strong>&copy;Desarrollado</strong> por <a href="https://github.com/MasterAxer" target="_blank">Jorge López</a>. 
                </p>
            </div>
        </footer>
    </body>
</html>