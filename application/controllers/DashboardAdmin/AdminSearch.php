<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdminSearch extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->model('admin_model');

        $this->load->library('session');
        $this->load->library(['ion_auth', 'form_validation']);
		$this->lang->load('auth');  
    }

     public function index()
    {
        $this->load->View('admin\AdminSearchStudents');
    }

	public function encuestas()
	{
		$query = $this->admin_model->get_surveys(1);

		$data['surveys'] =  $query;
		

		$this->load->View('admin/AdminEncuestas', $data);
	}

	
}





