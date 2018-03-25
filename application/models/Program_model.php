<?php  
class Program_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_program($id_paket_program= FALSE){
		
		if($id_paket_program === FALSE){
		$query = $this->db->get('paket_program');
		return $query->result_array();//result hasilnya banyak
		}

		$query = $this->db->get_where('paket_program', array('id_paket_program' => $id_paket_program));
		return $query->row_array();// row hasilnya 1
	}

}


?>