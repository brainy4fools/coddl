<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index()
	{
		
	}


	//quick and dirty ajax test to add event, title, add 15 minutes to current time and class and random id
	public function add_event()
	{

	  $this->load->helper('array');

	  $things = array("green", "blue", "purple","red", "orange");
	   $class = random_element($things);


	  $date = trim($this->input->post('date'));
	  $title = $this->input->post('title');


	  //2018-01-03T08:45:00
	  $arr = explode("T", $date);
	  $tmp = $arr[1];

	  $endTime = strtotime("+30 minutes", strtotime($tmp));
	  $endTime = date('h:i:s',$endTime);

	  //preappend date
	  $endTime = $arr[0]."T".$endTime;

	   $id = random_string('alnum', 8);

       $result = array();
       $result = array('title' => $title,'class'=>$class,'id'=>$id,'end'=>$endTime);

		echo json_encode($result);

	}

}

/* End of file Calendar.php */
/* Location: ./application/controllers/custom/Calendar.php */