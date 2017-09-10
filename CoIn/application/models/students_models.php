<?php
class students_models extends CI_Model {
	
	private $table= "students";
	public function create (){
		
	}
	
	public function read($condition=null) {
		//SELECT * FROM students
		$this->db->select('*');
		$this->db->from($this->table);
		if(isset($condition)) $this->db->where($condition);
		
		$query=$this->db->get();
		
		return $query->result_array();
	}
	public function update(){}
	
	public function delete_student(){}
}