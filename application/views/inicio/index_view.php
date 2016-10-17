<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::: OCEO</title>
    <?php require_once(APPPATH."views/script-css/script-css.php"); ?>
    </head> 
<body class="fondoprincipal">
    <?php require_once(APPPATH."views/menu/menu.php"); ?>
    <div class="container">
        <h1>Inicio</h1>
    </div>
    
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Titulo</h4>
                </div>
                <div class="modal-body">
                    <p>Esto es una prueba.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>