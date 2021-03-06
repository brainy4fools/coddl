<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_details_model extends CI_Model {

	public function get_all()
	{
		$user_id = $this->session->userdata('userid');

        $this->db->select('*');
		$this->db->from('company_details');
        $this->db->where('user_id', $user_id);
        
		$query = $this->db->get();
		
		return $query;

	}


    public function add_company_details($Bussiness_Name,$Description,$Address,$Website,$Mobile_Number,$Business_Type)
    {
    	
        $user_id = $this->session->userdata('userid');
        $object = array(
    		'user_id'=>$user_id,'Bussiness_Name'=>$Bussiness_Name,'Description'=>$Description,'Address'=>$Address,'Website'=>$Website,'Mobile_Number'=>$Mobile_Number,'Business_Type'=>$Business_Type


    		);
    	$this->db->insert('company_details', $object);


    }

    public function edit_company_details($id,$Bussiness_Name,$Description,$Address,$Website,$Mobile_Number,$Business_Type)
    {

        $user_id = $this->session->userdata('userid');
    	$object = array(
    		'user_id'=>$user_id,'Bussiness_Name'=>$Bussiness_Name,'Description'=>$Description,'Address'=>$Address,'Website'=>$Website,'Mobile_Number'=>$Mobile_Number,'Business_Type'=>$Business_Type


    		);

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->update('company_details', $object);


    }

    public function get_company_details($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->select('*');
    	$this->db->from('company_details');
    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);

    	$query = $this->db->get();
    		
    	return $query;


    }

    public function delete_company_details($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->delete('company_details');

    }


}

/* End of file company_details_model.php */
/* Location: ./application/models/crud/company_details_model.php */