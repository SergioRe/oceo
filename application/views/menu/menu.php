<div class="mainWrap">
    <a id="touch-menu" class="mobile-menu" href="#">
        <span class="glyphicon glyphicon-align-justify"></span>&nbsp;&nbsp;Menu
    </a>
    <nav>
        <ul class="menu">
            <?php
            foreach ($listaMenu as $valor):
            if($valor['MenuPadre'] != 'N'){
                ?>
                <li class="movil">
                    <a href="<?= site_url($valor['MenuUrl']) ?>">
                        <?php echo $valor['MenuNom'];?>
                    </a>
                </li>
                <?php
            }
            endforeach;
            ?>
        </ul>
    </nav>
</div>
<div class="container">
    <br/>
    <div class="row">
        <div class="col-lg-4 text-center">
            <img src="<?php echo base_url('assets/imagenes/logo-hyundai.jpg')?>" height="33px;" width="200px;" alt="imagen">
            <br/><br/>
        </div>
        <div class="col-lg-4 text-center">
            <button type="button" class="btn btn-default btn-vk" data-toggle="modal" data-target="#myModal">Ingresar</button>&nbsp;
            <button type="button" class="btn btn-default btn-vk">Registrate</button>
            <br/><br/>
        </div>
        <div class="col-lg-4 text-center">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar">
                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            </div>
        </div>
    </div>
</div>
