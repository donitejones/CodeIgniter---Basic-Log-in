<?php
	class queries extends CI_model{

		public function getPosts(){
			$query = $this->db->get('user');
			if($query->num_rows() > 0){
				return $query->result();
			}
		}
}

?>