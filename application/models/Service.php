<?php 

class Service extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function all(){
		$query = $this->db->get('servicio');
		return $query->result();
	}

	public function getLabs(){
		$this->db->select('laboratorio as nombre');
		$this->db->group_by('laboratorio');
		$query = $this->db->get('servicio');
		return $query->result();
	}

	public function getServices($ids){
		$this->db->where_in('id', $ids);
		$query = $this->db->get('servicio');
		return $query->result();
	}
}