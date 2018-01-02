<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index()
	{
		
	}


	//quick and dirty ajax test to add event, title, add 15 minutes to current time and class and random id
	public function add_event()
	{

	  $this->load->helper('array');

	  
	   $class = $this->input->post('classt');
	   $inc = "30 minutes";


	  $date = trim($this->input->post('date'));


      //passed in as ids so user model to get the names

      $this->load->model('clients/clients_model');
      $client = $this->clients_model->get_client_name($this->input->post('client'));

      $this->load->model('services/services_model');
      $service = $this->services_model->get_service_name($this->input->post('service'));
      


	  $title = $service ." ". $client;


	  $endTime = $this->add_time($date,$inc);
	  

	   $id = random_string('alnum', 8);

       $result = array();
       $result = array('title' => $title,'class'=>$class,'id'=>$id,'end'=>$endTime);

		echo json_encode($result);

	}


	public function add_time($tim,$inc)
	{
		//2018-01-03T08:45:00
	  $arr = explode("T", $tim);
	  $tmp = $arr[1];

	  $endTime = strtotime("+$inc", strtotime($tmp));
	  $endTime = date('H:i:s',$endTime);

	  //preappend date
	  return $endTime = $arr[0]."T".$endTime;


	}

}

/* End of file Calendar.php */
/* Location: ./application/controllers/custom/Calendar.php */