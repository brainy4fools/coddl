<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stuff_globals extends CI_Model {


    //dump the globals and the menu returns array data
    public function dump_all()
    {
        $x = $this->Stuff_globals->dump_globals();

        foreach ($x as $key => $value) {
            $data[$key] = $value;
        }

        $this->load->model('Stuff_menu');
        $menu = $this->Stuff_menu->make_menu();


        $data['menu'] = $menu;


        //get the text credits

        $user_id = $this->session->userdata('userid');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $user_id);
        $this->db->limit(1);

        $query = $this->db->get();
        
        
        $fullname = "";
        foreach ($query->result() as $row) 
        {
            
            $fullname = $row->fullname;
        }
        
        
        $data['fullname'] = $fullname;

        //allow multiples to be accessed from anywhere
		$this->load->model('Stuff_template_generator');
		$x = $this->Stuff_template_generator->get_all_sections();


		$data['multiples'] = $x;



        return $data;
    }





	 /**
	  *  @Description: loop through database and build global array for twig
	  *       @Params: none
	  *
	  *  	 @returns: array
	  */

	public function dump_globals()
	{
		//loop through entry's and select global types
		$this->db->select('*');
		$this->db->from('entry');
		$this->db->where('type', 'Global');

		$query = $this->db->get();
		

		$arr = array();
		foreach ($query->result() as $row) 
		{
			$name = $this->get_section_name($row->sectionid);

			$this->db->select('*');
			$this->db->from('content');
			$this->db->where('entryid', $row->id);

			$query2 = $this->db->get();
		
			 $query2 = $query2->result_array();
			 

			 foreach ($query2 as $key) 
			 {
			 	foreach ($key as $f_name => $f_content) 
			 	{
			 		if($this->is_asset($f_name))
			 	   	{
			 	   		$arr[$name][$f_name] = $this->for_image($f_name,$f_content);
			 	   	}
			 	   	else
			 	   	{
			 	   		$arr[$name][$f_name] = $f_content;
			 	   	}
			 	   	
			 	}
			 }
		}
		
		return $arr;
	}

	//checks to see if image and swap with img url
     public function for_image($col,$val)
     {
     	//return $val;

     	$col = trim($col);

     	$this->db->select('*');
     	$this->db->from('fields');
     	$this->db->where('name', $col);
     	$this->db->limit(1);

     	$query = $this->db->get();
     	
     	$type = "";
     	foreach ($query->result() as $row) 
     	{
     		$type= $row->type;
     	}
     	
     	if($type == 'file-upload')
     	{
     		$this->db->select('url');
     		$this->db->from('assetfields');
     		$this->db->where('id', $val);
     		$this->db->limit(1);
     		$query = $this->db->get();
     		
     		$url = "";
     		foreach ($query->result() as $row) 
     		{
     			$url= $row->url;
     		}
     		return $url;

     	}

     	else
     	{
     		return $val;
     	}

     }

	/**
	  *  @Description: returns the section name
	  *       @Params: sectionid
	  *
	  *  	 @returns: string (section_name)
	  */
	public function get_section_name($sectionid)
	{
		$this->db->select('name');
		$this->db->from('section');
		$this->db->where('id', $sectionid);
		$this->db->limit(1);

		$query = $this->db->get();
		
		$section_name = "";
		foreach ($query->result() as $row) 
		{
			$section_name = $row->name;
		}
		return $section_name;
	}

	 /**
	  *  @Description: checks if field is an asset
	  *       @Params: fieldname
	  *
	  *  	 @returns: TRUE or FALSE
	  */
	public function is_asset($fieldname)
	{
		$this->db->select('type');
		$this->db->from('fields');
		$this->db->where('name', $fieldname);
		$this->db->limit(1);

		$query = $this->db->get();
		
		$type = "";
		foreach ($query->result() as $row) 
		{
			$type = $row->type;
		}

		if($type === 'file-upload')
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}

	}

	 /**
	  *  @Description: store the assets in a 2d multi assoc array
	  *       @Params: ids as comma delimited string {2,23,58}
	  *
	  *  	 @returns: array
	  */
	public function get_assets($asset_ids)
	{
		
		if(($asset_ids === NULL)  or (strlen($asset_ids) == 0))
        {
        	//do nothing
        }
        else
        {

        	$arr = array();
        	$counter = 0;
			//first explode
			$ids = explode(",", $asset_ids);

			foreach ($ids as $key)
			{
				$this->db->select('*');
				$this->db->from('assetfields');
				$this->db->where('id', $key);

				$query = $this->db->get();
			
				$query = $query->result_array();
				$arr[$counter] = $query[0];
				$counter++;
			}

			return $arr;
		}

	}

}

/* End of file Stuff_globals.php */
/* Location: ./application/models/Stuff_globals.php */