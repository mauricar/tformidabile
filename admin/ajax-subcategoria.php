<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

$cat_id = $_POST['id_category'];

$sqlSubCat = "SELECT * FROM piedras_subcategorias WHERE categoria_id=$cat_id ORDER BY subcategoria_nombre ASC";

$resultadoSubCat = mysql_query($sqlSubCat);

$numero_filas = mysql_num_rows($resultadoSubCat);

if ($numero_filas > 0) {

	echo '<h5>Selecciona la subcategoría del producto (opcional)</h5>	<div class="form-group">';

    while ($filaSubCat = mysql_fetch_assoc($resultadoSubCat)) {    
    	$subcat_id = $filaSubCat['subcategoria_id'];
        $subcat_nombre = $filaSubCat['subcategoria_nombre'];?>
	      <div class="checkbox checkbox-cat-ppal">
	        <label>
	          <input type="radio" name="producto_subcategoria[]" class="" value="<?php echo $subcat_id; ?>">&nbsp;&nbsp;<?php echo $subcat_nombre; ?></label>
	      </div>
                      
        <?php
    }
    echo ' </div><!-- Fin form-group -->';
}
echo $html;
?>