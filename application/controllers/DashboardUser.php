<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DashboardUser extends CI_Controller
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
        $this->load->View('user/dashUser');
    }
    
    public function survey()
    {
        
        $this->load->View('user/survey');
    }
    
    public function notification()
    {
        
        $this->load->View('user/notification');
    }

}

