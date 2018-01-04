<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Textanywhere_model extends CI_Model {

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