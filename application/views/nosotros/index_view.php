<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::: OCEO</title>
    <?php require_once(APPPATH."views/script-css/script-css.php"); ?>
    </head> 
<body>
    <div class="mainWrap">
        <a id="touch-menu" class="mobile-menu" href="#">
            <span class="glyphicon glyphicon-align-justify"></span>&nbsp;&nbsp;Menu
        </a>
        <nav>
            <ul class="menu">
                <?php
                foreach ($listaMenu as $valor):
                ?>
                <li class="movil">
                    <a href="<?= site_url($valor['MenuUrl']) ?>">
                        <?php echo $valor['MenuNom'];?>
                    </a>
                </li>
                <?php
                endforeach;
                ?>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h1>NOSOTROS</h1>
    </div>
</body>
</html>