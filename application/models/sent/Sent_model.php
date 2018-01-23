<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sent_model extends CI_Model {

	public function get_all()
	{
		$user_id = $this->session->userdata('userid');

        $this->db->select('*');
		$this->db->from('sent');
        $this->db->where('user_id', $user_id);
        
		$query = $this->db->get();
		
		return $query;

	}


    public function add_sent($message_name,$message,$recipient,$sent_on,$type,$unique_reference,$status_code,$status_desc,$status_update,$booking_reference,$staff_name)
    {
    	$sent_on =  date('Y-m-d H:i:s');
        



        $user_id = $this->session->userdata('userid');
        $object = array(
    		'user_id'=>$user_id,'message_name'=>$message_name,'message'=>$message,'recipient'=>$recipient,'sent_on'=>$sent_on,'type'=>$type,'unique_reference'=>$unique_reference,'status_code'=>$status_code,'status_desc'=>$status_desc,'status_update'=>$status_update,'booking_reference'=>$booking_reference,'staff_name'=>$staff_name


    		);
    	$this->db->insert('sent', $object);


    }

    public function edit_sent($id,$message_name,$message,$recipient,$sent_on,$type,$unique_reference,$status_code,$status_desc,$status_update,$booking_reference,$staff_name)
    {

        $user_id = $this->session->userdata('userid');
    	$object = array(
    		'user_id'=>$user_id,'message_name'=>$message_name,'message'=>$message,'recipient'=>$recipient,'sent_on'=>$sent_on,'type'=>$type,'unique_reference'=>$unique_reference,'status_code'=>$status_code,'status_desc'=>$status_desc,'status_update'=>$status_update,'booking_reference'=>$booking_reference,'staff_name'=>$staff_name


    		);

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->update('sent', $object);


    }

    public function get_sent($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->select('*');
    	$this->db->from('sent');
    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);

    	$query = $this->db->get();
    		
    	return $query;


    }

    public function delete_sent($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->delete('sent');

    }


}

/* End of file sent_model.php */
/* Location: ./application/models/crud/sent_model.php */