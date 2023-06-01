


<nav class="menu-productos hidden-xs hidden-sm clearfix">
	<div class="container">
		<ul>
			<?php
			$sqlCategorias = "SELECT * FROM piedras_categorias ORDER BY categoria_orden ASC ";
			$resultadoCategorias = mysql_query($sqlCategorias);      


            while($filaCategoria = mysql_fetch_assoc($resultadoCategorias)){
              $categoria_id = $filaCategoria['categoria_id'];
              $categoria_nombre = $filaCategoria['categoria_nombre'];
            ?>

				<li class="<?php echo ($seccion == $categoria_nombre) ? 'active' : '';?>">
					<a href="<?php echo $base_url;?>/productos/categoria/<?php echo $categoria_id;?>-<?php echo text2url($categoria_nombre);?>"><?php echo $categoria_nombre;?></a>
				</li>
				
			<?php 
			}?>
			<li><a href="http://oscarrevestimientos.com.ar/" target="_blanK">Marmolería</a></li>
		</ul>
	</div>
</nav>