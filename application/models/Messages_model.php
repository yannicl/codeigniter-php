<?php 

class Messages_model extends CI_Model {
	
	public function get_message($id) {
		$query = $this->db->get_where('messages', array('id' => $id));
		return $query->row_array();
	}
	
	
}

?>