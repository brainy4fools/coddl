<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bookings extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		{
			if($this->session->userdata('isloggedin')=='1')
			{
				$this->load->model('Stuff_permissions');
				$pass = $this->Stuff_permissions->has_permission("bookings");

				if($pass != true)
				{
					redirect('admin/dashboard','refresh');
				}
			}
			else
			{
				redirect('Log-in','refresh');
			}
		}

		
	}

	public function index()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;
		



		$this->load->model('bookings/bookings_model');
		$query = $this->bookings_model->get_all();
		
		$data['query'] = $query;


		
        $this->load->view('admin/bookings/index',$data);
        
	}



	 /**
	  *  @Description: new bookings view
	  *       @Params: params
	  *
	  *  	 @returns: returns
	  */
	public function new_bookings_view()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;



		
        $this->load->view('admin/bookings/new',$data);
        


	}


	//validate and add the entry to the db
	public function new_bookings()
	{

		$CLIENT_FIRST_NAME=$this->input->post('CLIENT_FIRST_NAME');
$CLIENT_LAST_NAME=$this->input->post('CLIENT_LAST_NAME');
$STAFF_FIRST_NAME=$this->input->post('STAFF_FIRST_NAME');
$STAFF_LAST_NAME=$this->input->post('STAFF_LAST_NAME');
$BOOKING_DATE_TIME=$this->input->post('BOOKING_DATE_TIME');
$BOOKING_DATE=$this->input->post('BOOKING_DATE');
$BOOKING_TIME=$this->input->post('BOOKING_TIME');
$BOOKING_REFERENCE=$this->input->post('BOOKING_REFERENCE');
$SERVICE_NAME=$this->input->post('SERVICE_NAME');
$BUSINESS_NAME=$this->input->post('BUSINESS_NAME');
$LOCATION_NAME=$this->input->post('LOCATION_NAME');
$LOCATION_PHONE=$this->input->post('LOCATION_PHONE');
$BOOKING_END_DATE_TIME=$this->input->post('BOOKING_END_DATE_TIME');
$color=$this->input->post('color');



		/////////////////////////////////////////////////////////////////////////////////
		//   validataion

		$this->form_validation->set_rules('xxx', 'xxx', '');
		

















		/////////////////////////////////////////////////////////////////////////////////

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');

			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			
	        $this->load->view('admin/bookings/new',$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('bookings/bookings_model');
			$this->bookings_model->add_bookings($CLIENT_FIRST_NAME,$CLIENT_LAST_NAME,$STAFF_FIRST_NAME,$STAFF_LAST_NAME,$BOOKING_DATE_TIME,$BOOKING_DATE,$BOOKING_TIME,$BOOKING_REFERENCE,$SERVICE_NAME,$BUSINESS_NAME,$LOCATION_NAME,$LOCATION_PHONE,$BOOKING_END_DATE_TIME,$color);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Added</strong> ');

			redirect("admin/bookings","refresh");
		}


	}


	//comment delete the entry
	public function delete_bookings($id)
	{

		$this->load->model('bookings/bookings_model');
		$this->bookings_model->delete_bookings($id);

		$this->session->set_flashdata('type', '1');
		$this->session->set_flashdata('msg', '<strong>Entry removed</strong> ');

		redirect("admin/bookings","refresh");


	}


	 /**
	  *  @Description: to edit the existing entry
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_bookings_view($id)
	{

		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;


		$this->load->model('bookings/bookings_model');
		$query = $this->bookings_model->get_bookings($id);


		$data['query'] = $query;
		$data['id']    = $id;

		
        $this->load->view("admin/bookings/edit",$data);
        

	}


	 /**
	  *  @Description: edit bookings view
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_bookings($id)
	{
		$CLIENT_FIRST_NAME=$this->input->post('CLIENT_FIRST_NAME');
$CLIENT_LAST_NAME=$this->input->post('CLIENT_LAST_NAME');
$STAFF_FIRST_NAME=$this->input->post('STAFF_FIRST_NAME');
$STAFF_LAST_NAME=$this->input->post('STAFF_LAST_NAME');
$BOOKING_DATE_TIME=$this->input->post('BOOKING_DATE_TIME');
$BOOKING_DATE=$this->input->post('BOOKING_DATE');
$BOOKING_TIME=$this->input->post('BOOKING_TIME');
$BOOKING_REFERENCE=$this->input->post('BOOKING_REFERENCE');
$SERVICE_NAME=$this->input->post('SERVICE_NAME');
$BUSINESS_NAME=$this->input->post('BUSINESS_NAME');
$LOCATION_NAME=$this->input->post('LOCATION_NAME');
$LOCATION_PHONE=$this->input->post('LOCATION_PHONE');
$BOOKING_END_DATE_TIME=$this->input->post('BOOKING_END_DATE_TIME');
$color=$this->input->post('color');



		////////////////////////////////////////////////////////////////////////

		$this->form_validation->set_rules('xxx', 'xxx', 'xxx');
		
















		////////////////////////////////////////////////////////////////////////
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			$this->load->model('bookings/bookings_model');
			$query = $this->bookings_model->get_bookings($id);


			$data['query'] = $query;
			$data['id']    = $id;

			
	        $this->load->view("admin/bookings/edit",$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('bookings/bookings_model');
			$this->bookings_model->edit_bookings($id,$CLIENT_FIRST_NAME,$CLIENT_LAST_NAME,$STAFF_FIRST_NAME,$STAFF_LAST_NAME,$BOOKING_DATE_TIME,$BOOKING_DATE,$BOOKING_TIME,$BOOKING_REFERENCE,$SERVICE_NAME,$BUSINESS_NAME,$LOCATION_NAME,$LOCATION_PHONE,$BOOKING_END_DATE_TIME,$color);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Updated</strong> message');

			redirect("admin/bookings","refresh");
		}

	}




}

/* End of file bookings.php */
/* Location: ./application/controllers/admin/bookings.php */