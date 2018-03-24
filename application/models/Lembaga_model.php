<?php  
class Lembaga_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_lembaga($id_lembaga= FALSE){
		
		if($id_lembaga === FALSE){
		$query = $this->db->get('lembaga');
		return $query->result_array();//result hasilnya banyak
		}

		$query = $this->db->get_where('lembaga', array('id_lembaga' => $id_lembaga));
		return $query->row_array();// row hasilnya 1
	}

}


?>
