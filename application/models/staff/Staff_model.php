<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_model extends CI_Model {

	public function get_all()
	{
		$user_id = $this->session->userdata('userid');

        $this->db->select('*');
		$this->db->from('staff');
        $this->db->where('user_id', $user_id);
        
		$query = $this->db->get();
		
		return $query;

	}


    public function add_staff($First_Name,$Last_Name,$Mobile_Number,$Email,$Notes,$Appointment_Colour)
    {
    	
        $user_id = $this->session->userdata('userid');
        $object = array(
    		'user_id'=>$user_id,'First_Name'=>$First_Name,'Last_Name'=>$Last_Name,'Mobile_Number'=>$Mobile_Number,'Email'=>$Email,'Notes'=>$Notes,'Appointment_Colour'=>$Appointment_Colour


    		);
    	$this->db->insert('staff', $object);


    }

    public function edit_staff($id,$First_Name,$Last_Name,$Mobile_Number,$Email,$Notes,$Appointment_Colour)
    {

        $user_id = $this->session->userdata('userid');
    	$object = array(
    		'user_id'=>$user_id,'First_Name'=>$First_Name,'Last_Name'=>$Last_Name,'Mobile_Number'=>$Mobile_Number,'Email'=>$Email,'Notes'=>$Notes,'Appointment_Colour'=>$Appointment_Colour


    		);

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->update('staff', $object);


    }

    public function get_staff($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->select('*');
    	$this->db->from('staff');
    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);

    	$query = $this->db->get();
    		
    	return $query;


    }

    public function delete_staff($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->delete('staff');

    }


}

/* End of file staff_model.php */
/* Location: ./application/models/crud/staff_model.php */