<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtrl extends CI_Controller {
	
	public function index()
	{
        if($this->session->userdata('login') && $this->session->userdata('login')=='1')
        {
                $where='';
                if($_POST && $_POST['name'])
                {
                        $where.='student_name ="'.$_POST['name'].'"';
                }
                if($_POST && $_POST['score'] && $_POST['name'])
                {
                       $where.=' and score ="'.$_POST['score'].'"';
                }
                if($_POST && $_POST['score'] && !$_POST['name'])
                {
                       $where.=' score='.$_POST['score'];
                }
		          $this->load->library('pagination');
		          $config = array();
                $config["base_url"] = base_url() ."student_result";
                $config["total_rows"] = $this->cmn_mdl->getCount('student_result',$where);
                $config["per_page"] = 5;
                $config["uri_segment"] = 2;

                $this->pagination->initialize($config);

                $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

                $data['links'] = $this->pagination->create_links();
                $select='*';
                $data['student_result'] = $this->cmn_mdl->getPaginationdata('student_result', $select,$where,$config["per_page"], $page);

               
        	$this->load->view('student_result',$data);
        }
        else
        {
            $this->load->view('login');
        }
	}

}
