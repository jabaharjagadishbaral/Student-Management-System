<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_student extends CI_Model {

public $table = "tbl_student";

 public function data() {
 $query = "SELECT * FROM $this->table ORDER BY student_id ASC";
 return $this->db->query($query)->result();
  }

public function save() {
 $data = array(
 'student_id' => $this->input->post('student_id'),
 'name' => $this->input->post('name'),
 'gender' => $this->input->post('gender'),
 'program' => $this->input->post('program'),
 'level' => $this->input->post('level'),
 'semester' => $this->input->post('semester'),
 'phone' => $this->input->post('phone')
 );
 $this->db->insert($this->table, $data);
 }



	public function update() {
	 $data = array(
	 'name' => $this->input->post('name'),
	 'gender' => $this->input->post('gender'),
	 'program' => $this->input->post('program'),
	 'level' => $this->input->post('level'),
	 'semester' => $this->input->post('semester'),
	 'phone' => $this->input->post('phone')
	 );
	 $student_id = $this->input->post('student_id');
	 $this->db->where('student_id', $student_id);
	 $this->db->update($this->table, $data);
	}
}
