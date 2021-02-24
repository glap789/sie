<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class admin_model extends CI_Model
{
	public function __construct(){ 
		$this->load->database();
	}   
    

	public function get_surveys($idUser){
		$this->db->select('survey.id, survey.name as name, school.name as school_name,survey.total_records as total_records, survey.status as status, ');
		$this->db->from('survey'); 
		$this->db->join('school_survay', 'school_survay.id_survay = survey.id');
		$this->db->join('school', 'school.id = school_survay.id_school');
		$this->db->join('school_admin', 'school.id = school_admin.id_school');
		$this->db->where('school_admin.id_user',$idUser);   

		$query = $this->db->get(); 
		if($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
}
