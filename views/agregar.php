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
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-2">Agregar Usuario</h1>

                <form name="frmdatos" action="../buttons/buttonadd.php" method="POST">
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control">
                    <div class="columns">
                        <div class="column is-three-fifths"><input class="input" type="text" id="nombre" name="nombre" placeholder="e.g Alex Smith"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
				  <label class="label">Email</label>
				  <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
				    <input class="input" type="email" id="email" name="email" placeholder="e.g. alexsmith@gmail.com"></div>
                    </div>
				  </div>
				</div>
                <div class="field">
				  <label class="label">Usuario</label>
				  <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
				    <input class="input" type="text" id="usuario" name="usuario" placeholder="e.g. smith123"></div>
                    </div>
				  </div>
				</div>
                <div class="field">
				  <label class="label">Contraseña</label>
				  <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
				    <input class="input" type="text" id="pass" name="pass" placeholder="*****************"></div>
                    </div>
				  </div>
				</div>

				<div class="control">
                  <button id="agregar" name="agregar" class="button is-success">&nbsp;Agregar Usuario&nbsp;</button>
                </div>
                </form>
                <form action="checausr.php">
                    <div class="control">
                    <button id="cancelar" name="cancelar" class="button is-danger">&nbsp;Cancelar&nbsp;</button>
                    </div>
                </form>
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