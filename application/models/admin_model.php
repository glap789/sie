<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class admin_model extends CI_Model
{
	public function __construct(){ 
		$this->load->database();
	}   
    
	 //get survey ******************************************
	public function get_surveys($idUser){
	
		
		$sql ="select survey.id, survey.name as name, carrer.name as school_name, survey.total_records as total_records, survey.status as status
		from survey
		inner join carrer_survey on carrer_survey.id_survey = survey.id
		inner join carrer on carrer.id = carrer_survey.id_carrer
		inner join user_carrer on carrer.id = user_carrer.idCarrer
		where user_carrer.id = 2";   

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	    //get students ****************************************** 
		/* 
			$sql = "select users.id as id, CONCAT(users.first_name, users.last_name) as nombre, users.email as correo, carrer.name as nombre_carrera, (select school.name from school where school.id = carrer.idSchool ) as nombre_escuela , user_carrer.ConcYear from users 
			INNER JOIN user_carrer ON users.id=user_carrer.idUser 
			inner join carrer on carrer.id=user_carrer.idCarrer 
			inner join school_survay on carrer.id=school_survay.id_carrer 
			inner join survey on school_survay.id_survay = survey.id 
			where (CONCAT(users.first_name, users.last_name) like '%".$nombre."%') 
			and ((select school.name from school where school.id = carrer.idSchool) like '%".$escuela."%') 
			and (carrer.name like '%".$carrera."%') 
			and (user_carrer.ConcYear Between ".$añoInicio." And ".$añoFin.")";
		*/
		function get_students_all()
		{
			//if ($st == " ") $st = "";

			$sql = "select users.id as id, CONCAT(users.first_name, users.last_name) as nombre, users.email as correo, carrer.name as nombre_carrera, (select school.name from school where school.id = carrer.idSchool ) as nombre_escuela , user_carrer.ConcYear as year from users 
			INNER JOIN user_carrer ON users.id=user_carrer.idUser 
			inner join carrer on carrer.id=user_carrer.idCarrer 
			inner join carrer_survey on carrer.id=carrer_survey.id_carrer 
			inner join survey on carrer_survey.id_survey = survey.id ";
			$query = $this->db->query($sql);
			return $query->result();
		}

		function get_students_all_count()
		{
			//if ($st == " ") $st = "";
			$sql = "select users.id as id, CONCAT(users.first_name, users.last_name) as nombre, users.email as correo, carrer.name as nombre_carrera, (select school.name from school where school.id = carrer.idSchool ) as nombre_escuela , user_carrer.ConcYear as year from users 
			INNER JOIN user_carrer ON users.id=user_carrer.idUser 
			inner join carrer on carrer.id=user_carrer.idCarrer 
			inner join carrer_survey on carrer.id=carrer_survey.id_carrer 
			inner join survey on carrer_survey.id_survey = survey.id ";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}

		function get_students($nombre, $carrera, $escuela, $añoInicio, $añoFin)
		{
			//if ($st == " ") $st = "";

			$sql = "select users.id as id, CONCAT(users.first_name, users.last_name) as nombre, users.email as correo, carrer.name as nombre_carrera, (select school.name from school where school.id = carrer.idSchool ) as nombre_escuela , user_carrer.ConcYear as year from users 
			INNER JOIN user_carrer ON users.id=user_carrer.idUser 
			inner join carrer on carrer.id=user_carrer.idCarrer 
			inner join carrer_survey on carrer.id=carrer_survey.id_carrer 
			inner join survey on carrer_survey.id_survey = survey.id
			where (CONCAT(users.first_name, users.last_name) like '%".$nombre."%') 
			and ((select school.name from school where school.id = carrer.idSchool) like '%".$escuela."%') 
			and (carrer.name like '%".$carrera."%') 
			and (user_carrer.ConcYear Between ".$añoInicio." And ".$añoFin.")";
			$query = $this->db->query($sql);
			return $query->result();
		}


}
