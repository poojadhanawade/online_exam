<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCtrl extends CI_Controller {

	public function index()
	{
		$ses_data=$this->session->userdata();
		if(isset($ses_data)&& isset($ses_data['user_name']) && isset($ses_data['login']) && $ses_data['login']=='1' && $ses_data['user_name']!='')
		{
		   redirect('student_result');
		}
		else
		{ 
			$data = array('user_name' =>'' ,
			               'login'=>'0' );
			$this->session->set_userdata($data);
			$this->load->view('login');
		}
		
	}
	public function login()
	{

		$this->form_validation->set_rules('user_email', 'Email Id', 'required');
    $this->form_validation->set_rules('user_pass', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );

    if ($this->form_validation->run() == FALSE)
    {
    	$response = array('alert_type' =>'danger' , 
       	 					'msg' => validation_errors());
    	$this->session->set_flashdata('response',$response);
      $this->load->view('login');
    }
    else
    {
    	$select='id,user_email';
    	$where = array('user_email' => $this->input->post('user_email'),
    					'user_pass' => md5($this->input->post('user_pass')));

       $res= $this->cmn_mdl->getWhereData('admin_login',$select,$where);

       if($res && count($res)>0)
       {
       		$data = array('user_name' =>$res[0]->user_email ,
       					  	'user_id' =>$res[0]->id ,
	               		'login'=>'1' );
	       	$this->session->set_userdata($data);
	       	redirect('student_result');

       }
       else
       {
       		$response = array('alert_type' =>'danger' , 
       	 						'msg' =>'Username or Password is incorrect');
       	 	$this->session->set_flashdata('response',$response);
       	 	$this->load->view('login');
       }
    }
		
	}

}
