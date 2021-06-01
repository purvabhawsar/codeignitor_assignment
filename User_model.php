<?php


class User_model extends CI_model
{
	
	function create($data)
	{
		$this->db->insert("user_table",$data);
		
	}
 
	function all()
	{
		return $users = $this->db->get("user_table")->result_array();
	}
	function getUser($userId)
	{
       $this->db->where('id',$userId);
       return $user = $this->db->get("user_table")->row_array();
	}
	function updateUser($userId,$data)
	{
		$this->db->where('id',$userId);
		$this->db->update('user_table',$data);
	}
	function deleteUser($userId)
	{
		$this->db->where('id',$userId);
		$this->db->delete('user_table');

	}
}

?>