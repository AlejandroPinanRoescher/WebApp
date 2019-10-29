<?php 

include_once('models/alerta.php');

class AvisoModel extends Model{

	public function __construct(){

		parent::__construct();
	}
	
	public function get(){
		$items = [];

		if($consulta = $this->db->execute("select * from avisos")){
		
			while($row = pg_fetch_array($consulta, NULL, PGSQL_ASSOC)){

             	$item = new Aviso();

             	$item->id = $row['id'];
             	$item->estado = $row['estado'];
            	$item->fecha = $row['fecha'];
            	$item->hora = substr($row['hora'],0,8);

            	array_push($items, $item);
       		}
       		return $items;
		}else{
			return false;
		}
	}

	public function delete($id){

		$delete=$this->db->execute("delete from avisos WHERE id= ' ".$id."' ");
		if($delete){
			return true;
		}else{
			return false;
		}
	}	


}


?>