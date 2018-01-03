<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		{
			if($this->session->userdata('isloggedin')=='1')
			{
				$this->load->model('Stuff_permissions');
				$pass = $this->Stuff_permissions->has_permission("setup");

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


    //function to preview the message
    public function preview_message()
    {




    }





/*
	public function index()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;
		



		$this->load->model('setup/setup_model');
		$query = $this->setup_model->get_all();
		
		$data['query'] = $query;


		
        $this->load->view('admin/setup/index',$data);
        
	}



	
	public function new_setup_view()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;



		
        $this->load->view('admin/setup/new',$data);
        


	}


	//validate and add the entry to the db
	public function new_setup()
	{

		$Enable_Notifications=$this->input->post('Enable_Notifications');
$Send_by=$this->input->post('Send_by');
$Reminder_advance_notice=$this->input->post('Reminder_advance_notice');
$SMS_Template=$this->input->post('SMS_Template');



		/////////////////////////////////////////////////////////////////////////////////
		//   validataion

		$this->form_validation->set_rules('xxx', 'xxx', '');
		$this->form_validation->set_rules('Enable_Notifications', 'Enable_Notifications', 'integer');







		/////////////////////////////////////////////////////////////////////////////////

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');

			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			
	        $this->load->view('admin/setup/new',$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('setup/setup_model');
			$this->setup_model->add_setup($Enable_Notifications,$Send_by,$Reminder_advance_notice,$SMS_Template);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Added</strong> ');

			redirect("admin/setup","refresh");
		}


	}


	//comment delete the entry
	public function delete_setup($id)
	{

		$this->load->model('setup/setup_model');
		$this->setup_model->delete_setup($id);

		$this->session->set_flashdata('type', '1');
		$this->session->set_flashdata('msg', '<strong>Entry removed</strong> ');

		redirect("admin/setup","refresh");


	}
	*/


	 /**
	  *  @Description: to edit the existing entry
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_setup_view($id)
	{

		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;


		$this->load->model('setup/setup_model');
		$query = $this->setup_model->get_setup($id);


		$data['query'] = $query;
		$data['id']    = $id;

		
        $this->load->view("admin/setup/edit",$data);
        

	}


	 /**
	  *  @Description: edit setup view
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_setup($id)
	{
		$Enable_Notifications=$this->input->post('Enable_Notifications');
$Send_by=$this->input->post('Send_by');
$Reminder_advance_notice=$this->input->post('Reminder_advance_notice');
$SMS_Template=$this->input->post('SMS_Template');



		////////////////////////////////////////////////////////////////////////

		$this->form_validation->set_rules('xxx', 'xxx', 'xxx');
		$this->form_validation->set_rules('Enable_Notifications', 'Enable_Notifications', 'integer');






		////////////////////////////////////////////////////////////////////////
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			$this->load->model('setup/setup_model');
			$query = $this->setup_model->get_setup($id);


			$data['query'] = $query;
			$data['id']    = $id;

			
	        $this->load->view("admin/setup/edit",$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('setup/setup_model');
			$this->setup_model->edit_setup($id,$Enable_Notifications,$Send_by,$Reminder_advance_notice,$SMS_Template);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Updated</strong> message');

			redirect("admin/setup/edit_setup_view/1","refresh");
		}

	}




}

/* End of file setup.php */
/* Location: ./application/controllers/admin/setup.php */