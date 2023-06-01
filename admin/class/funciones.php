<?php
	

	function text2url($string) {
		$string = strtolower(utf8_decode($string));
		$string = html_entity_decode($string);
		$string = trim($string);
	   	
		$string = strtr($string, utf8_decode("áãéíóúñÁÉÍÓÚÑ&Çç"), "aaeiounaeiounycc");
	   	$string = trim(ereg_replace("[^ A-Za-z0-9_]", "-", $string)); 
		$string = ereg_replace("[ \t\n\r]+", "-", $string);
	   	$string = ereg_replace("[ -]+", "-", $string);

		return $string; 
	}

	function get_entidad($entidad, $campo_id, $valor_id){
	  $sql = "SELECT * FROM $entidad WHERE $campo_id= " . $valor_id;

	  $resultado = mysql_query($sql);      
	  $fila = mysql_fetch_assoc($resultado);

	 return $fila;
	}

	function get_listado($entidad, $campo_id, $valor_id, $order = NULL){
	  $sql = "SELECT * FROM $entidad WHERE $campo_id= " . $valor_id;

	  if ( !is_null($order)) {
	  	$sql .= " ORDER BY " . $order . " ASC ";
	  }	

	  $datos = array();
	  $resultado = mysql_query($sql);  
	      
	  while($fila = mysql_fetch_assoc($resultado)){
	  	array_push($datos, $fila);
	  }

	 return $datos;
	}


	function truncate($text, $chars = 25) {
	    if (strlen($text) <= $chars) {
	        return $text;
	    }
	    $text = $text." ";
	    $text = substr($text,0,$chars);
	    $text = substr($text,0,strrpos($text,' '));
	    $text = $text."...";
	    return $text;
	}

	
?>
