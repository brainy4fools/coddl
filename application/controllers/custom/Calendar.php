<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index()
	{
		
	}





    public function load_calendar()
    {

        $this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;


        $this->load->model('bookings/bookings_model');
        $query = $this->bookings_model->get_all();
        
        $data['query'] = $query;

        $this->load->view('custom/calendar', $data);


    }

    //via ajax
    public function get_info()
    {
        $BOOKING_REFERENCE = $this->input->post('id');


        $user_id = $this->session->userdata('userid');

        $this->db->select('*');
        $this->db->from('bookings');
        $this->db->where('user_id', $user_id);
        $this->db->where('BOOKING_REFERENCE', $BOOKING_REFERENCE);
        
        $query = $this->db->get();
        
        $message = "";
        foreach ($query->result() as $row) 
        {
            echo $row->CLIENT_FIRST_NAME;
        }
        
        echo $message;



    }



    //via ajax
    public function move_event()
    {

        $BOOKING_REFERENCE = $this->input->post('id');
        $BOOKING_DATE_TIME = $this->input->post('start');
        $BOOKING_END_DATE_TIME = $this->input->post('end');

        $this->load->model('bookings/bookings_model');
            $this->bookings_model->move_bookings($BOOKING_REFERENCE,$BOOKING_DATE_TIME,$BOOKING_END_DATE_TIME);


    }

    //via ajax
    public function resize_event()
    {

        $BOOKING_REFERENCE = $this->input->post('id');
        $BOOKING_DATE_TIME = $this->input->post('start');
        $BOOKING_END_DATE_TIME = $this->input->post('end');

        $this->load->model('bookings/bookings_model');
            $this->bookings_model->move_bookings($BOOKING_REFERENCE,$BOOKING_DATE_TIME,$BOOKING_END_DATE_TIME);


    }

    public function cancel_event()
    {
        $BOOKING_REFERENCE = $this->input->post('id');
        $this->load->model('bookings/bookings_model');
            $this->bookings_model->cancel_bookings($BOOKING_REFERENCE);

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


       //now add to the bookings table
       $arr = explode("T", $date);
       


       $CLIENT_FIRST_NAME = $client;
       $CLIENT_LAST_NAME = $client;
       $STAFF_FIRST_NAME = 'karen';
       $STAFF_LAST_NAME = 'h';
       $BOOKING_DATE_TIME = $date;
       $BOOKING_DATE = $arr[0];
       $BOOKING_TIME = $arr[1];
       $BOOKING_REFERENCE = $id;
       $SERVICE_NAME = $service;

       $CLIENT_MOBILE = $this->clients_model->get_client_mobile($this->input->post('client'));
       $SERVICE_COST  = $this->services_model->get_service_cost($this->input->post('service'));


       $this->load->model('company_details/company_details_model');
       


       $BUSINESS_NAME = $this->company_details_model->get_bussiness_name();
       $LOCATION_NAME = 'x';
       $LOCATION_PHONE = $this->company_details_model->get_bussiness_phone();
       $BOOKING_END_DATE_TIME = $endTime;
       $color = $class;


       $this->load->model('bookings/bookings_model');
            $this->bookings_model->add_bookings($CLIENT_FIRST_NAME,$CLIENT_LAST_NAME,$STAFF_FIRST_NAME,$STAFF_LAST_NAME,$BOOKING_DATE_TIME,$BOOKING_DATE,$BOOKING_TIME,$BOOKING_REFERENCE,$SERVICE_NAME,$BUSINESS_NAME,$LOCATION_NAME,$LOCATION_PHONE,$BOOKING_END_DATE_TIME,$color,$CLIENT_MOBILE,$SERVICE_COST);





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