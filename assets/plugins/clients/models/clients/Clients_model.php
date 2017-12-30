<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients_model extends CI_Model {

	public function get_all()
	{
		$user_id = $this->session->userdata('userid');

        $this->db->select('*');
		$this->db->from('clients');
        $this->db->where('user_id', $user_id);
        
		$query = $this->db->get();
		
		return $query;

	}


    public function add_clients($First_Name,$Last_Name,$Mobile_Number,$Email,$Send_Notifications_by,$Client_Notes)
    {
    	
        $user_id = $this->session->userdata('userid');
        $object = array(
    		'user_id'=>$user_id,'First_Name'=>$First_Name,'Last_Name'=>$Last_Name,'Mobile_Number'=>$Mobile_Number,'Email'=>$Email,'Send_Notifications_by'=>$Send_Notifications_by,'Client_Notes'=>$Client_Notes


    		);
    	$this->db->insert('clients', $object);


    }

    public function edit_clients($id,$First_Name,$Last_Name,$Mobile_Number,$Email,$Send_Notifications_by,$Client_Notes)
    {

        $user_id = $this->session->userdata('userid');
    	$object = array(
    		'user_id'=>$user_id,'First_Name'=>$First_Name,'Last_Name'=>$Last_Name,'Mobile_Number'=>$Mobile_Number,'Email'=>$Email,'Send_Notifications_by'=>$Send_Notifications_by,'Client_Notes'=>$Client_Notes


    		);

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->update('clients', $object);


    }

    public function get_clients($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->select('*');
    	$this->db->from('clients');
    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);

    	$query = $this->db->get();
    		
    	return $query;


    }

    public function delete_clients($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->delete('clients');

    }


}

/* End of file clients_model.php */
/* Location: ./application/models/crud/clients_model.php */