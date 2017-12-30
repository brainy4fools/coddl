<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		{
			if($this->session->userdata('isloggedin')=='1')
			{
				$this->load->model('Stuff_permissions');
				$pass = $this->Stuff_permissions->has_permission("clients");

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
		



		$this->load->model('clients/clients_model');
		$query = $this->clients_model->get_all();
		
		$data['query'] = $query;


		
        $this->load->view('admin/clients/index',$data);
        
	}



	 /**
	  *  @Description: new clients view
	  *       @Params: params
	  *
	  *  	 @returns: returns
	  */
	public function new_clients_view()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;



		
        $this->load->view('admin/clients/new',$data);
        


	}


	//validate and add the entry to the db
	public function new_clients()
	{

		$First_Name=$this->input->post('First_Name');
$Last_Name=$this->input->post('Last_Name');
$Mobile_Number=$this->input->post('Mobile_Number');
$Email=$this->input->post('Email');
$Send_Notifications_by=$this->input->post('Send_Notifications_by');
$Client_Notes=$this->input->post('Client_Notes');



		/////////////////////////////////////////////////////////////////////////////////
		//   validataion

		$this->form_validation->set_rules('xxx', 'xxx', '');
		$this->form_validation->set_rules('First_Name', 'First_Name', 'required');
$this->form_validation->set_rules('Last_Name', 'Last_Name', 'required');
$this->form_validation->set_rules('Mobile_Number', 'Mobile_Number', 'required');
$this->form_validation->set_rules('Email', 'Email', 'valid_email');






		/////////////////////////////////////////////////////////////////////////////////

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');

			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			
	        $this->load->view('admin/clients/new',$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('clients/clients_model');
			$this->clients_model->add_clients($First_Name,$Last_Name,$Mobile_Number,$Email,$Send_Notifications_by,$Client_Notes);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Added</strong> ');

			redirect("admin/clients","refresh");
		}


	}


	//comment delete the entry
	public function delete_clients($id)
	{

		$this->load->model('clients/clients_model');
		$this->clients_model->delete_clients($id);

		$this->session->set_flashdata('type', '1');
		$this->session->set_flashdata('msg', '<strong>Entry removed</strong> ');

		redirect("admin/clients","refresh");


	}


	 /**
	  *  @Description: to edit the existing entry
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_clients_view($id)
	{

		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;


		$this->load->model('clients/clients_model');
		$query = $this->clients_model->get_clients($id);


		$data['query'] = $query;
		$data['id']    = $id;

		
        $this->load->view("admin/clients/edit",$data);
        

	}


	 /**
	  *  @Description: edit clients view
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_clients($id)
	{
		$First_Name=$this->input->post('First_Name');
$Last_Name=$this->input->post('Last_Name');
$Mobile_Number=$this->input->post('Mobile_Number');
$Email=$this->input->post('Email');
$Send_Notifications_by=$this->input->post('Send_Notifications_by');
$Client_Notes=$this->input->post('Client_Notes');



		////////////////////////////////////////////////////////////////////////

		$this->form_validation->set_rules('xxx', 'xxx', 'xxx');
		$this->form_validation->set_rules('First_Name', 'First_Name', 'required');
$this->form_validation->set_rules('Last_Name', 'Last_Name', 'required');
$this->form_validation->set_rules('Mobile_Number', 'Mobile_Number', 'required');
$this->form_validation->set_rules('Email', 'Email', 'valid_email');





		////////////////////////////////////////////////////////////////////////
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			$this->load->model('clients/clients_model');
			$query = $this->clients_model->get_clients($id);


			$data['query'] = $query;
			$data['id']    = $id;

			
	        $this->load->view("admin/clients/edit",$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('clients/clients_model');
			$this->clients_model->edit_clients($id,$First_Name,$Last_Name,$Mobile_Number,$Email,$Send_Notifications_by,$Client_Notes);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Updated</strong> message');

			redirect("admin/clients","refresh");
		}

	}




}

/* End of file clients.php */
/* Location: ./application/controllers/admin/clients.php */