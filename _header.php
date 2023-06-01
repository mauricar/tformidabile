

<header class="clearfix">
	<div class="container">

		<div class="logo">
			<a href="<?php echo $base_url;?>"><img class="img-responsive logo-top" src="images/piedras-patagonia-logo.png"></a>
		</div>


		<div class="col-header-der clearfix">

			<div class="contacto-header hidden-xs hidden-sm">
				<p>CONTACTANOS</p>
				<p class="tel">(011) 4696-1340</p>
			</div>

			
			<nav class="menu-ppal hidden-xs hidden-sm">
				<ul>
					
					<li><a href="<?php echo $base_url;?>">Home</a></li>
					<li class="<?php echo ($seccion == 'productos') ? 'active' : '' ;?>"><a href="<?php echo $base_url;?>/productos">Productos</a></li>
					<li><a href="<?php echo $base_url;?>/contacto">Contacto</a></li>
				</ul>
			</nav>

		</div>


		<!-- MOBILE -->
		<div class="icon-menu-mobile visible-xs visible-sm">
			<a href="javascript:void(0);" class="icon-mobile"><img src="images/icon-menu-mobile.png"></a>
		</div>

	</div>

</header>


<!-- MOBILE -->
<div class="menu-mobile-open">
	<nav class="">
		<ul class="mobile">
			<li><a href="<?php echo $base_url;?>">Home</a></li>
			<li>
				<a href="<?php echo $base_url;?>/productos">Productos</a>
				<ul>
					<?php
					$sqlCategorias = "SELECT * FROM piedras_categorias ORDER BY categoria_orden ASC ";
      				$resultadoCategorias = mysql_query($sqlCategorias);      


	                while($filaCategoria = mysql_fetch_assoc($resultadoCategorias)){
	                  $categoria_id = $filaCategoria['categoria_id'];
	                  $categoria_nombre = $filaCategoria['categoria_nombre'];
	                ?>
						<li><a href="<?php echo $base_url;?>/productos/categoria/<?php echo $categoria_id;?>-<?php echo text2url($categoria_nombre);?>"><?php echo $categoria_nombre;?></a>

						<?php 
						$sqlSubCat = "SELECT * FROM piedras_subcategorias WHERE categoria_id=$categoria_id ORDER BY subcategoria_orden ASC";

						$resultadoSubCat = mysql_query($sqlSubCat);
						$numero_filas = mysql_num_rows($resultadoSubCat);
						if ($numero_filas > 0) {?>
							<ul class="subcat">
						    <?php
						    while ($filaSubCat = mysql_fetch_assoc($resultadoSubCat)) {    
						    	$subcat_id = $filaSubCat['subcategoria_id'];
						        $subcat_nombre = $filaSubCat['subcategoria_nombre'];?>
							
						    	<li><a href="<?php echo $base_url;?>/productos/subcategoria/<?php echo $subcat_id;?>-<?php echo text2url($subcat_nombre);?>"><?php echo $subcat_nombre;?></a></li>              
						    <?php
						    }
						    ?>
						    </ul>
						<?php
						}
						?>						

						</li>
					
					<?php
					}
					?>

					<li><a href="http://oscarrevestimientos.com.ar/" target="_blanK">Marmolería</a></li>
				</ul>
			</li>

			<li><a href="<?php echo $base_url;?>/contacto">Contacto</a></li>
		</ul>
	</nav>
</div>
<!-- /MOBILE -->











