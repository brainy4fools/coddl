<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Textanywhere_model extends CI_Model {

	

    //get the user text credits
    public function get_credits()
    {

        $user_id = $this->session->userdata('userid');
        $this->db->select('credits');
        $this->db->from('user');
        $this->db->where('id', $user_id);
        $this->db->limit(1);

        $query = $this->db->get();
        
        $credits = "";
        foreach ($query->result() as $row) 
        {
            $credits =  $row->credits;
        }
        return $credits; 

    }

      /**
      *  @Description: check if logged user has enough credits
      *       @Params: params
      *
      *       @returns: true or false
      */

    public function check_credits()
    {

        //get the text credits

        $user_id = $this->session->userdata('userid');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $user_id);
        $this->db->limit(1);

        $query = $this->db->get();
        
        $credits = 0;
        
        foreach ($query->result() as $row) 
        {
            $credits =  $row->credits;
            
        }

        if ($credits > 0) 
        {
            return true;
        }
        else
        {
            return false;
        }

        
    }



    //use text credit either schedule,confirm,cancel reschedule
    public function use_credit()
    {
        if ($this->check_credits()) 
        {
            $user_id = $this->session->userdata('userid');

            $this->db->set('credits', 'credits-1', FALSE);
            $this->db->where('id', $user_id);
            $this->db->update('user');

        }
    }


    public function add_credit()
    {
        if ($this->check_credits()) 
        {
            $user_id = $this->session->userdata('userid');

            $this->db->set('credits', 'credits+1', FALSE);
            $this->db->where('id', $user_id);
            $this->db->update('user');

        }
    }



    public function get_all()
	{
		$this->db->select('*');
		$this->db->from('textanywhere');
        
		$query = $this->db->get();
		
		return $query;

	}

    public function get_password($label)
    {

        $this->db->select('*');
        $this->db->from('textanywhere');
        $this->db->where('label', $label);
        $this->db->limit(1);

        $query = $this->db->get();
        
        $password = "";
        foreach ($query->result() as $row) 
        {
            $password =  $row->Password;
        }
        return $password;
        


    }

    public function get_external($label)
    {

        $this->db->select('*');
        $this->db->from('textanywhere');
        $this->db->where('label', $label);
        $this->db->limit(1);

        $query = $this->db->get();
            
        $external = "";
        foreach ($query->result() as $row) 
        {
            $external =  $row->External;
        }
        return $external;


    }


    public function add_textanywhere($Password,$External,$label)
    {
    	$object = array(
    		'Password'=>$Password,'External'=>$External,'label'=>$label


    		);
    	$this->db->insert('textanywhere', $object);


    }

    public function edit_textanywhere($id,$Password,$External,$label)
    {

    	$object = array(
    		'Password'=>$Password,'External'=>$External,'label'=>$label


    		);

    	$this->db->where('id', $id);
    	$this->db->update('textanywhere', $object);


    }

    public function get_textanywhere($id)
    {

    	$this->db->select('*');
    	$this->db->from('textanywhere');
    	$this->db->where('id', $id);

    	$query = $this->db->get();
    		
    	return $query;


    }

    public function delete_textanywhere($id)
    {
    	$this->db->where('id', $id);
    	$this->db->delete('textanywhere');

    }


}

/* End of file textanywhere_model.php */
/* Location: ./application/models/crud/textanywhere_model.php */