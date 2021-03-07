<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommanModel extends CI_Model {

	public function getCount($table,$where='')
	{
		if($where!='')
		{
			// $data = $this->db->select('*')->from($table)->where($where)->count_all_results();
		 //    return $data;	
		    $query = $this->db->query("SELECT * FROM ".$table." where ".$where."");
            return $query->num_rows();
			
		}
		else
		{
		    $data = $this->db->select('*')->from($table)->get()->result_array();
		    return count($data);	
		}
		
	}
	 public function getPaginationdata($table, $select,$where='',$per_page, $page)
	{
		if($where!='')
		{
			// $data = $this->db->select($select)->from($table)->where($where)->limit($per_page,$page)->get()->result_array();
			// return $data;
			 $query = $this->db->query('SELECT '.$select.' FROM '.$table.' where '.$where.' limit '.$per_page,$page);
            return $query->result_array();
			
			
		}
		else
		{
		    $data = $this->db->select($select)->from($table)->limit($per_page,$page)->get()->result_array();
			return $data;
		}
				
	}
	public function getWheredata($table,$select,$where)
	{
		$data = $this->db->select($select)->where($where)->get($table)->result_array();
		return $data;

	}	
	public function setData($table,$insert_data)
	{
		$data = $this->db->insert($table,$insert_data);
		return $data;
	}
	public function updateData($table,$update_data,$where)
	{
		$data = $this->db->where($where)->update($table,$update_data);
		return $data;
	}
	
}
