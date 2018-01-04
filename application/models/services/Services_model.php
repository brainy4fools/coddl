<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_model extends CI_Model {

	public function get_all()
	{
		$user_id = $this->session->userdata('userid');

        $this->db->select('*');
		$this->db->from('services');
        $this->db->where('user_id', $user_id);
        
		$query = $this->db->get();
		
		return $query;

	}


    public function add_services_coddl($user_id,$Service_name,$Duration,$Retail_Price)
    {
        
        
        $object = array(
            'user_id'=>$user_id,'Service_name'=>$Service_name,'Duration'=>$Duration,'Retail_Price'=>$Retail_Price


            );
        $this->db->insert('services', $object);


    }



    public function add_services($Service_name,$Duration,$Retail_Price)
    {
    	
        $user_id = $this->session->userdata('userid');
        $object = array(
    		'user_id'=>$user_id,'Service_name'=>$Service_name,'Duration'=>$Duration,'Retail_Price'=>$Retail_Price


    		);
    	$this->db->insert('services', $object);


    }

    public function edit_services($id,$Service_name,$Duration,$Retail_Price)
    {

        $user_id = $this->session->userdata('userid');
    	$object = array(
    		'user_id'=>$user_id,'Service_name'=>$Service_name,'Duration'=>$Duration,'Retail_Price'=>$Retail_Price


    		);

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->update('services', $object);


    }

    public function get_services($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->select('*');
    	$this->db->from('services');
    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);

    	$query = $this->db->get();
    		
    	return $query;


    }

     //get the service name
    public function get_service_name($id)
    {
        $user_id = $this->session->userdata('userid');

        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
        $this->db->limit(1);

        $query = $this->db->get();

        
        
        $fullname = "";
        foreach ($query->result() as $row) 
        {
            $fullname =  $row->Service_name;
        }
        
            
        return $fullname;


    }


     //get the service name
    public function get_service_cost($id)
    {
        $user_id = $this->session->userdata('userid');

        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
        $this->db->limit(1);

        $query = $this->db->get();

        
        
        $fullname = "";
        foreach ($query->result() as $row) 
        {
            $fullname =  $row->Retail_Price;
        }
        
            
        return $fullname;


    }

    public function delete_services($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->delete('services');

    }


}

/* End of file services_model.php */
/* Location: ./application/models/crud/services_model.php */