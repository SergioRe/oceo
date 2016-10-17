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
<div class="container">
<div class="row">
    <!-- Carousel -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
			<!-- Wrapper for slides -->
	<div class="carousel-inner">
            <div class="item active">
		<img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span>Bienvenido <strong>OCEO S.A.C.</strong></span>
                            </h2>
                            <br>
                            <h3>
                            	<span>VENDER O COMPRAR.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Ingresar</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Registrate</a>
                            </div>
                        </div>
                    </div><!-- /header-text -->
            </div>
            <div class="item">
		<img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Second slide">
			    	<!-- Static Header -->
                <div class="header-text hidden-xs">
                    <div class="col-md-12 text-center">
                        <h2>
                            <span>Bienvenido <strong>OCEO S.A.C.</strong></span>
                        </h2>
                        <br>
                        <h3>
                            <span>VENDER O COMPRAR.</span>
                        </h3>
                        <br>
                        <div class="">
                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Ingresar</a>
                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Registrate</a>
                        </div>
                    </div>
                </div><!-- /header-text -->
            </div>
            <div class="item">
		<img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Third slide">
		<!-- Static Header -->
                <div class="header-text hidden-xs">
                    <div class="col-md-12 text-center">
                        <h2>
                            <span>Bienvenido <strong>OCEO S.A.C.</strong></span>
                        </h2>
                        <br>
                        <h3>
                            <span>VENDER O COMPRAR.</span>
                        </h3>
                        <br>
                        <div class="">
                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Ingresar</a>
                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Registrate</a>
                        </div>
                    </div>
                </div><!-- /header-text -->
            </div>
	</div>
        <!-- Controls -->
<!--        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>-->
    </div><!-- /carousel -->
</div>
</div>