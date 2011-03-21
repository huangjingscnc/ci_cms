<?php

Class Resources_model extends Model{

	function resource_model()
	{
		parent::Model();

	}
	function get_all_resource()
	{
		//$this->db->select('res_name');
        $query = $this->db->get('Resources');
        return $query->result();
	}
	

	function add_resource($data)
	{
		$this->db->insert('Resources', $data);
		return;
	}
		
	function update_resource()
	{
		$this->db->where(array('res_name' => $_POST[file_name]));
		$this->db->update('Resources', $data);
	}
	

}



