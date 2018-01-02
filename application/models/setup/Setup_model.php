<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup_model extends CI_Model {

	public function get_all()
	{
		$user_id = $this->session->userdata('userid');

        $this->db->select('*');
		$this->db->from('setup');
        $this->db->where('user_id', $user_id);
        
		$query = $this->db->get();
		
		return $query;

	}


    //return true or false
    public function if_no_data()
    {
        $user_id = $this->session->userdata('userid');

        $this->db->select('*');
        $this->db->from('setup');
        $this->db->where('user_id', $user_id);
        
        $query = $this->db->get();
        
        
        $count = 0;
        foreach ($query->result() as $row) 
        {
            $count++;
        }

        if($count > 0)
        {
            return false;
        }
        else
        {
            return true;
        }
        

    }


    public function add_setup_coddl($user_id,$Enable_Notifications,$Send_by,$Reminder_advance_notice,$SMS_Template)
    {
        
        //if numrow >0
        if ($this->if_no_data()) 
        {
            $object = array(
            'user_id'=>$user_id,'Enable_Notifications'=>$Enable_Notifications,'Send_by'=>$Send_by,'Reminder_advance_notice'=>$Reminder_advance_notice,'SMS_Template'=>$SMS_Template


            );
            $this->db->insert('setup', $object);
        }


    }







    public function add_setup($Enable_Notifications,$Send_by,$Reminder_advance_notice,$SMS_Template)
    {
    	
        $user_id = $this->session->userdata('userid');
        $object = array(
    		'user_id'=>$user_id,'Enable_Notifications'=>$Enable_Notifications,'Send_by'=>$Send_by,'Reminder_advance_notice'=>$Reminder_advance_notice,'SMS_Template'=>$SMS_Template


    		);
    	$this->db->insert('setup', $object);


    }

    public function edit_setup($id,$Enable_Notifications,$Send_by,$Reminder_advance_notice,$SMS_Template)
    {

        $user_id = $this->session->userdata('userid');
    	$object = array(
    		'user_id'=>$user_id,'Enable_Notifications'=>$Enable_Notifications,'Send_by'=>$Send_by,'Reminder_advance_notice'=>$Reminder_advance_notice,'SMS_Template'=>$SMS_Template


    		);

    	
        $this->db->where('user_id', $user_id);
    	$this->db->update('setup', $object);


    }

    public function get_setup($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->select('*');
    	$this->db->from('setup');
        $this->db->where('user_id', $user_id);

    	$query = $this->db->get();
    		
    	return $query;


    }

    public function delete_setup($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->delete('setup');

    }


}

/* End of file setup_model.php */
/* Location: ./application/models/crud/setup_model.php */