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
    public function get_credits()
    {

        $this->load->model('textanywhere/textanywhere_model');
        $credits = $this->textanywhere_model->get_credits();

        echo $credits;

    }



    //text anywhere test
    public function send_text($message_name,$message,$recipient)
    {


        $user_id = $this->session->userdata('userid');

         //do the swap for custom variables
         $message_name = 'Coddl';
        // $message = 'hi';
        // $recipient = '';


        $this->load->model('textanywhere/textanywhere_model');
    
        $external = $this->textanywhere_model->get_external('main');
        $password = $this->textanywhere_model->get_password('main');

        

        //where the magic happens
        include('text-messaging/nusoap.php');

        $random = "";
        $random .= rand(100000000, 999999999);
        $unique_reference = substr($random,0,10);

        $parameters = array( 
            'returnCSVString' => 'false', 
            'externalLogin' => $external, 
            'password' => $password, 
            'clientBillingReference' => 'coddl', // Identifies coddl SMS on TextAnywhere account statements
            'clientMessageReference' => ''.$unique_reference.'', // Used to get delivery status, must be unique!
            'originator' => ''.$message_name.'', 
            'destinations' => ''.$recipient.'', 
            'body' => ''.$message.'', 
            'validity' => '72', 
            'characterSetID' => '2', 
            'replyMethodID' => '1', 
            'replyData' => '', 
            'statusNotificationUrl' => 'http://www.coddl.co.uk/resources/php/sms-updateStatus.php' // URL to send delivery status notifications to, important!
        );  
        $nusoapclient = new nusoapclient('http://www.textapp.net/webservice/service.asmx?wsdl'); 
        $result = $nusoapclient->call('SendSMS',$parameters,'http://www.textapp.net/','http://www.textapp.net/SendSMS');


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

  //just remove event
    public function cancel_event_r()
    {
        $BOOKING_REFERENCE = trim($this->input->post('id'));

        
        
        
        $this->load->model('bookings/bookings_model');
            $this->bookings_model->cancel_bookings($BOOKING_REFERENCE);

    }


    public function cancel_event()
    {
        $BOOKING_REFERENCE = trim($this->input->post('id'));

        $this->load->model('bookings/bookings_model');
        $query = $this->bookings_model->get_bookings_ref($BOOKING_REFERENCE);


      $CLIENT_FIRST_NAME  = "";
      $CLIENT_LAST_NAME  = "";
      $STAFF_FIRST_NAME  = "";
      $STAFF_LAST_NAME  = "";
      $BOOKING_DATE_TIME  = "";
      $BOOKING_DATE  = "";
      $BOOKING_TIME  = "";
      $BOOKING_REFERENCE  = "";
      $SERVICE_NAME  = "";
      $BUSINESS_NAME  = "";
      $LOCATION_NAME  = "";
      $LOCATION_PHONE  = "";
      $BOOKING_END_DATE_TIME  = "";
      $color  = "";
      $CLIENT_MOBILE = "";


       foreach ($query->result() as $key) 
       {
              $CLIENT_FIRST_NAME     =  $key->CLIENT_FIRST_NAME;
              $CLIENT_LAST_NAME      =  $key->CLIENT_LAST_NAME;
              $STAFF_FIRST_NAME      =  $key->STAFF_FIRST_NAME;
              $STAFF_LAST_NAME       =  $key->STAFF_LAST_NAME;
              $BOOKING_DATE_TIME     =  $key->BOOKING_DATE_TIME;
              $BOOKING_DATE          =  $key->BOOKING_DATE;
              $BOOKING_TIME          =  $key->BOOKING_TIME;
              $BOOKING_REFERENCE     =  $key->BOOKING_REFERENCE;
              $SERVICE_NAME          =  $key->SERVICE_NAME;
              $BUSINESS_NAME         =  $key->BUSINESS_NAME;
              $LOCATION_NAME         =  $key->LOCATION_NAME;
              $LOCATION_PHONE        =  $key->LOCATION_PHONE;
              $BOOKING_END_DATE_TIME =  $key->BOOKING_END_DATE_TIME;
              $color                 =  $key->color;
              $CLIENT_MOBILE         =  $key->CLIENT_MOBILE;

       }
                                   




        //send text message
       $message_name = 'Cancel';  //IMPORT MUST BE LESS THAN 10 CHARACTERS!
        $message = "Hi $CLIENT_FIRST_NAME,Your appointment with booking reference $BOOKING_REFERENCE was cancelled. Here are the details: $BUSINESS_NAME $SERVICE_NAME $BOOKING_DATE_TIME. Need to get in touch? Please contact $BUSINESS_NAME on $LOCATION_PHONE.";
        $recipient = $CLIENT_MOBILE;


        $this->send_text($message_name,$message,$recipient);
        
        
        
        $this->load->model('bookings/bookings_model');
            $this->bookings_model->cancel_bookings($BOOKING_REFERENCE);

    }


    public function confirm_event()
    {
        $BOOKING_REFERENCE = trim($this->input->post('id'));

        $this->load->model('bookings/bookings_model');
        $query = $this->bookings_model->get_bookings_ref($BOOKING_REFERENCE);


      $CLIENT_FIRST_NAME  = "";
      $CLIENT_LAST_NAME  = "";
      $STAFF_FIRST_NAME  = "";
      $STAFF_LAST_NAME  = "";
      $BOOKING_DATE_TIME  = "";
      $BOOKING_DATE  = "";
      $BOOKING_TIME  = "";
      $BOOKING_REFERENCE  = "";
      $SERVICE_NAME  = "";
      $BUSINESS_NAME  = "";
      $LOCATION_NAME  = "";
      $LOCATION_PHONE  = "";
      $BOOKING_END_DATE_TIME  = "";
      $color  = "";
      $CLIENT_MOBILE = "";


       foreach ($query->result() as $key) 
       {
              $CLIENT_FIRST_NAME     =  $key->CLIENT_FIRST_NAME;
              $CLIENT_LAST_NAME      =  $key->CLIENT_LAST_NAME;
              $STAFF_FIRST_NAME      =  $key->STAFF_FIRST_NAME;
              $STAFF_LAST_NAME       =  $key->STAFF_LAST_NAME;
              $BOOKING_DATE_TIME     =  $key->BOOKING_DATE_TIME;
              $BOOKING_DATE          =  $key->BOOKING_DATE;
              $BOOKING_TIME          =  $key->BOOKING_TIME;
              $BOOKING_REFERENCE     =  $key->BOOKING_REFERENCE;
              $SERVICE_NAME          =  $key->SERVICE_NAME;
              $BUSINESS_NAME         =  $key->BUSINESS_NAME;
              $LOCATION_NAME         =  $key->LOCATION_NAME;
              $LOCATION_PHONE        =  $key->LOCATION_PHONE;
              $BOOKING_END_DATE_TIME =  $key->BOOKING_END_DATE_TIME;
              $color                 =  $key->color;
              $CLIENT_MOBILE         =  $key->CLIENT_MOBILE;

       }
                                   




        //send text message
       $message_name = 'Confirm';  //IMPORT MUST BE LESS THAN 10 CHARACTERS!
        $message = "Hi $CLIENT_FIRST_NAME,Your new appointment with booking reference $BOOKING_REFERENCE is confirmed. Here are the details:$BUSINESS_NAME $SERVICE_NAME $BOOKING_DATE_TIME. Need to change your appointment? Please contact $BUSINESS_NAME on $LOCATION_PHONE.";
        $recipient = $CLIENT_MOBILE;


        $this->send_text($message_name,$message,$recipient);
        
        
        
        

    }


    //send reschedule text
    public function reschedule_event()
    {
        $BOOKING_REFERENCE = trim($this->input->post('id'));

        $this->load->model('bookings/bookings_model');
        $query = $this->bookings_model->get_bookings_ref($BOOKING_REFERENCE);


      $CLIENT_FIRST_NAME  = "";
      $CLIENT_LAST_NAME  = "";
      $STAFF_FIRST_NAME  = "";
      $STAFF_LAST_NAME  = "";
      $BOOKING_DATE_TIME  = "";
      $BOOKING_DATE  = "";
      $BOOKING_TIME  = "";
      $BOOKING_REFERENCE  = "";
      $SERVICE_NAME  = "";
      $BUSINESS_NAME  = "";
      $LOCATION_NAME  = "";
      $LOCATION_PHONE  = "";
      $BOOKING_END_DATE_TIME  = "";
      $color  = "";
      $CLIENT_MOBILE = "";


       foreach ($query->result() as $key) 
       {
              $CLIENT_FIRST_NAME     =  $key->CLIENT_FIRST_NAME;
              $CLIENT_LAST_NAME      =  $key->CLIENT_LAST_NAME;
              $STAFF_FIRST_NAME      =  $key->STAFF_FIRST_NAME;
              $STAFF_LAST_NAME       =  $key->STAFF_LAST_NAME;
              $BOOKING_DATE_TIME     =  $key->BOOKING_DATE_TIME;
              $BOOKING_DATE          =  $key->BOOKING_DATE;
              $BOOKING_TIME          =  $key->BOOKING_TIME;
              $BOOKING_REFERENCE     =  $key->BOOKING_REFERENCE;
              $SERVICE_NAME          =  $key->SERVICE_NAME;
              $BUSINESS_NAME         =  $key->BUSINESS_NAME;
              $LOCATION_NAME         =  $key->LOCATION_NAME;
              $LOCATION_PHONE        =  $key->LOCATION_PHONE;
              $BOOKING_END_DATE_TIME =  $key->BOOKING_END_DATE_TIME;
              $color                 =  $key->color;
              $CLIENT_MOBILE         =  $key->CLIENT_MOBILE;

       }
                                   




        //send text message
       $message_name = 'reschedule';  //IMPORT MUST BE LESS THAN 10 CHARACTERS!
        $message = "Hi $CLIENT_FIRST_NAME,Your appointment with booking reference $BOOKING_REFERENCE has been updated. Here are the new details:$BUSINESS_NAME $SERVICE_NAME $BOOKING_DATE_TIME.  Need to change your appointment? Please contact $BUSINESS_NAME on $LOCATION_PHONE.";
        $recipient = $CLIENT_MOBILE;


        $this->send_text($message_name,$message,$recipient);








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


       $this->load->model('textanywhere/textanywhere_model');
       $this->textanywhere_model->use_credit();
       $credits = $this->textanywhere_model->get_credits();


       $result = array();
       $result = array('title' => $title,'class'=>$class,'id'=>$id,'end'=>$endTime, 'mobile' => $CLIENT_MOBILE, 'cost' => $SERVICE_COST, 'staff' => $STAFF_FIRST_NAME, 'credits' => $credits);


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