<?php

class DB{
	//database configuration
	

	private $dbHost     = "localhost";
	private $dbUsername = "root";
	private $dbPassword = 'root';
	private $dbName     = "tomifor";
	private $imgTbl     = 'piedras_productos';
	private $imagenesTbl     = 'piedras_imagenes';
	

	function __construct(){
		if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
	} 
	
	function getProductos(){
		$query = $this->db->query("SELECT * FROM ".$this->imgTbl." ORDER BY producto_orden ASC");
		if($query->num_rows > 0){
			while($row = $query->fetch_assoc()){
				$result[] = $row;
			}
		}else{
			$result = FALSE;
		}
		return $result;
	}

	function getCategorias(){
		$query = $this->db->query("SELECT * FROM piedras_categorias ORDER BY categoria_orden ASC");
		if($query->num_rows > 0){
			while($row = $query->fetch_assoc()){
				$result[] = $row;
			}
		}else{
			$result = FALSE;
		}
		return $result;
	}

	function getRows($idOrder){
		$query = $this->db->query("SELECT * FROM ".$this->imagenesTbl." WHERE producto_id = $idOrder ORDER BY img_order ASC");
		if($query->num_rows > 0){
			while($row = $query->fetch_assoc()){
				$result[] = $row;
			}
		}else{
			$result = FALSE;
		}
		return $result;
	}

	function getSubcategorias(){
		$query = $this->db->query("SELECT * FROM piedras_subcategorias ORDER BY subcategoria_orden ASC");
		if($query->num_rows > 0){
			while($row = $query->fetch_assoc()){
				$result[] = $row;
			}
		}else{
			$result = FALSE;
		}
		return $result;
	}

	
	
	function updateOrder($id_array){
		$count = 1;
		foreach ($id_array as $id){
			$update = $this->db->query("UPDATE ".$this->imgTbl." SET producto_orden = $count WHERE producto_id = $id");
			$count ++;	
		}
		return TRUE;
	}

	function updateOrderImgs($id_array){
		$count = 1;
		foreach ($id_array as $id){
			$update = $this->db->query("UPDATE ".$this->imagenesTbl." SET img_order = $count WHERE imagenes_id = $id");
			$count ++;	
		}
		return TRUE;
	}


	function updateOrderCat($id_array){
		$count = 1;
		foreach ($id_array as $id){
			$update = $this->db->query("UPDATE piedras_categorias SET categoria_orden = $count WHERE categoria_id = $id");
			$count ++;	
		}
		return TRUE;
	}

	function updateOrderSubCat($id_array){
		$count = 1;
		foreach ($id_array as $id){
			$update = $this->db->query("UPDATE piedras_subcategorias SET subcategoria_orden = $count WHERE subcategoria_id = $id");
			$count ++;	
		}
		return TRUE;
	}
	
}
// header("Content-Type: text/html;charset=utf-8");
// error_reporting(0);
global $link;


$link =  mysql_connect('localhost', 'root', 'root');
$db = mysql_select_db('tomifor', $link);
mysql_query("SET NAMES 'utf8'");
?>