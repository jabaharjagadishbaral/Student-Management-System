<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('m_student');
 	 }

	 public function index() {
		 $data = array(
		 'title' => 'Student Data',
		 'students' => $this->m_student->data()
		 );
		 $this->load->view('list', $data);
  	 }

public function add() {
	 if (isset($_POST['submit'])) {
	 	$student_id = $this->input->post('student_id');
	 	$query = $this->db->get_where('tbl_student', array('student_id' => $student_id));
	 if($query->num_rows() == 0) {
		 $this->m_student->save();
		 $this->session->set_flashdata('saved', 'New student saved successfully ...');
		 redirect();
	 } else {
	 	$this->session->set_flashdata('failed', 'An error occurred, this student already exists ...');
		redirect();
	 }
	 } else {
	 $this->load->view('add');
	 }
 }

public function edit() {
 if (isset($_POST['submit'])) {
 $this->m_student->update();
 $this->session->set_flashdata('updated', 'Student updated successfully ...');
 redirect('student');

 } else {
 if ($student_id = $this->uri->segment(3)) {
 $data = array(
 'student'=> $this->db->get_where('tbl_student', array('student_id' => $student_id))->row_array()
 );
 $this->load->view('edit', $data);
 } else {
 redirect();
  }
  }
 }
 public function delete() {
 if ($student_id = $this->uri->segment(3)) {
 if(!empty($student_id)) {
 $this->db->where('student_id', $student_id);
 $this->db->delete('tbl_student');
 }
 $this->session->set_flashdata('deleted', 'Student deleted successfully ...');
 redirect();

 } else {
 redirect();
 }
 }

}
