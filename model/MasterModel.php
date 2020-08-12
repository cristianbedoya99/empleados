<?php
include_once '../lib/conf/Connection.php';

class MasterModel extends Connection{
	public function ejecutar($sql){
		$ejecutar=mysqli_query($this->getConnect(),$sql);
		if($ejecutar){
			return $ejecutar;
		}
		else{	
			die(mysqli_error($this->getConnect()));
		}
	}
	public function insertar($table,$fields=false,$values){
			if($fields!=false){
				$fields="($fields)";
			}
		
			$sql="insert into $table $fields values ($values)";
			$ejecutar=mysqli_query($this->getConnect(),$sql);
			if(!$ejecutar){
				echo mysqli_error($this->getConnect());
				
			}
	}
	
	public function editar($table,$condicion=false,$campos){
		if($condicion!=false){
			$condicion= "where ".$condicion;
		}
		
				$actualizar="";
		foreach($campos as $campo=>$valor){
			$actualizar.="$campo=$valor,";	
		}
		$campos=substr($actualizar,0,-1);
		
		$sql="update $table set $campos $condicion";
	
		//se activa para quitar la herencia de la BD ...=> die($sql);
		$ejecutar=mysqli_query($this->getConnect(),$sql);
		if(!$ejecutar){
			echo mysqli_error($this->getConnect());
		}
	}//editar("tabla","condicion","array"("nombre"=>"Orlando","apellido"=>"Medina"));	
	
	
	public function consultar($campos,$tabla,$condicion=false){
		
		if($condicion!=false){
			$condicion=" where $condicion";
		}
		$sql="select $campos from $tabla $condicion";
		//dd($sql);
		$ejecutar=mysqli_query($this->getConnect(),$sql);
		if($ejecutar){
			return $ejecutar;
		}
		else{
			echo mysqli_error($this->getConnect());
		}
	}
	
public function Consultar2($sql) {
        if (!isset($result)) {
            $result = '';
        }
        mysqli_query($this->getConect(), "SET lc_time_names = 'es_ES'");
        $resultado = mysqli_query($this->getConect(), $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($this->conexion), E_USER_ERROR);
        if ($this->conexion->connect_errno == 0) {
            $result = array();
            while ($row = mysqli_fetch_array($resultado)) {
                $result[] = $row;
            }
            return $result;
        } else {
            echo mysqli_error();
        }
    }




	public function eliminar($table,$condicion){
		$sql="delete from $table where $condicion";
		$ejecutar=mysqli_query($this->getConnect(),$sql);
		if(!$ejecutar){
			echo mysqli_error($this->getConnect());
		}
	}
}//objMaster=new MasterModel();//$objMaster->editar("tabla","condicion",array("nombre"=>"Orlando","apellido"=>"Medina"));
?>