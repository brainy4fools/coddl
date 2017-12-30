<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		{
			if($this->session->userdata('isloggedin')=='1')
			{
				$this->load->model('Stuff_permissions');
				$pass = $this->Stuff_permissions->has_permission("staff");

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
		



		$this->load->model('staff/staff_model');
		$query = $this->staff_model->get_all();
		
		$data['query'] = $query;


		
        $this->load->view('admin/staff/index',$data);
        
	}



	 /**
	  *  @Description: new staff view
	  *       @Params: params
	  *
	  *  	 @returns: returns
	  */
	public function new_staff_view()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;



		
        $this->load->view('admin/staff/new',$data);
        


	}


	//validate and add the entry to the db
	public function new_staff()
	{

		$First_Name=$this->input->post('First_Name');
$Last_Name=$this->input->post('Last_Name');
$Mobile_Number=$this->input->post('Mobile_Number');
$Email=$this->input->post('Email');
$Notes=$this->input->post('Notes');
$Appointment_Colour=$this->input->post('Appointment_Colour');



		/////////////////////////////////////////////////////////////////////////////////
		//   validataion

		$this->form_validation->set_rules('xxx', 'xxx', '');
		$this->form_validation->set_rules('First_Name', 'First_Name', 'required');
$this->form_validation->set_rules('Last_Name', 'Last_Name', 'required');

$this->form_validation->set_rules('Email', 'Email', 'valid_email');






		/////////////////////////////////////////////////////////////////////////////////

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');

			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			
	        $this->load->view('admin/staff/new',$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('staff/staff_model');
			$this->staff_model->add_staff($First_Name,$Last_Name,$Mobile_Number,$Email,$Notes,$Appointment_Colour);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Added</strong> ');

			redirect("admin/staff","refresh");
		}


	}


	//comment delete the entry
	public function delete_staff($id)
	{

		$this->load->model('staff/staff_model');
		$this->staff_model->delete_staff($id);

		$this->session->set_flashdata('type', '1');
		$this->session->set_flashdata('msg', '<strong>Entry removed</strong> ');

		redirect("admin/staff","refresh");


	}


	 /**
	  *  @Description: to edit the existing entry
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_staff_view($id)
	{

		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;


		$this->load->model('staff/staff_model');
		$query = $this->staff_model->get_staff($id);


		$data['query'] = $query;
		$data['id']    = $id;

		
        $this->load->view("admin/staff/edit",$data);
        

	}


	 /**
	  *  @Description: edit staff view
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_staff($id)
	{
		$First_Name=$this->input->post('First_Name');
$Last_Name=$this->input->post('Last_Name');
$Mobile_Number=$this->input->post('Mobile_Number');
$Email=$this->input->post('Email');
$Notes=$this->input->post('Notes');
$Appointment_Colour=$this->input->post('Appointment_Colour');



		////////////////////////////////////////////////////////////////////////

		$this->form_validation->set_rules('xxx', 'xxx', 'xxx');
		$this->form_validation->set_rules('First_Name', 'First_Name', 'required');
$this->form_validation->set_rules('Last_Name', 'Last_Name', 'required');

$this->form_validation->set_rules('Email', 'Email', 'valid_email');





		////////////////////////////////////////////////////////////////////////
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			$this->load->model('staff/staff_model');
			$query = $this->staff_model->get_staff($id);


			$data['query'] = $query;
			$data['id']    = $id;

			
	        $this->load->view("admin/staff/edit",$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('staff/staff_model');
			$this->staff_model->edit_staff($id,$First_Name,$Last_Name,$Mobile_Number,$Email,$Notes,$Appointment_Colour);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Updated</strong> message');

			redirect("admin/staff","refresh");
		}

	}




}

/* End of file staff.php */
/* Location: ./application/controllers/admin/staff.php */