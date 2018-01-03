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



    public function get_bussiness_name()
    {
        $user_id = $this->session->userdata('userid');
        $this->db->select('*');
        $this->db->from('company_details');
        $this->db->where('user_id', $user_id);
        
        $query = $this->db->get();
        
        $Bussiness_Name = "";
        foreach ($query->result() as $row) 
        {
            $Bussiness_Name =  $row->Bussiness_Name;
        }
        
        return $Bussiness_Name;

    }

    public function get_bussiness_phone()
    {
        $user_id = $this->session->userdata('userid');
        $this->db->select('*');
        $this->db->from('company_details');
        $this->db->where('user_id', $user_id);
        
        $query = $this->db->get();
        
        $Mobile_Number = "";
        foreach ($query->result() as $row) 
        {
            $Mobile_Number =  $row->Mobile_Number;
        }
        
        return $Mobile_Number;

    }



    //return true or false
    public function if_no_data($user_id)
    {
       

        $this->db->select('*');
        $this->db->from('company_details');
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

    public function add_company_details_coddl($user_id,$Bussiness_Name,$Description,$Address,$Website,$Mobile_Number,$Business_Type)
    {
        
        //check if row return 0 first
        //if numrow >0
        if ($this->if_no_data($user_id)) 
        {

            $object = array(
                'user_id'=>$user_id,'Bussiness_Name'=>$Bussiness_Name,'Description'=>$Description,'Address'=>$Address,'Website'=>$Website,'Mobile_Number'=>$Mobile_Number,'Business_Type'=>$Business_Type


                );
            $this->db->insert('company_details', $object);
        }


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

    	
        $this->db->where('user_id', $user_id);
    	$this->db->update('company_details', $object);


    }

    public function get_company_details($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->select('*');
    	$this->db->from('company_details');
    	
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