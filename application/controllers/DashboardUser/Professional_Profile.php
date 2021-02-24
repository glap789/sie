<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Professional_profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
       // $this->load->model('usuario_model');

        $this->load->library('session');
        $this->load->library(['ion_auth', 'form_validation']);
		$this->lang->load('auth');  
    }

	public function index()
    {
        $this->load->View('user/professional_profile');
    }
    
    

}

