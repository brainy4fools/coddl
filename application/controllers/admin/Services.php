<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		{
			if($this->session->userdata('isloggedin')=='1')
			{
				$this->load->model('Stuff_permissions');
				$pass = $this->Stuff_permissions->has_permission("services");

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
		



		$this->load->model('services/services_model');
		$query = $this->services_model->get_all();
		
		$data['query'] = $query;


		
        $this->load->view('admin/services/index',$data);
        
	}



	 /**
	  *  @Description: new services view
	  *       @Params: params
	  *
	  *  	 @returns: returns
	  */
	public function new_services_view()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;



		
        $this->load->view('admin/services/new',$data);
        


	}


	//validate and add the entry to the db
	public function new_services()
	{

		$Service_name=$this->input->post('Service_name');
$Duration=$this->input->post('Duration');
$Retail_Price=$this->input->post('Retail_Price');



		/////////////////////////////////////////////////////////////////////////////////
		//   validataion

		$this->form_validation->set_rules('xxx', 'xxx', '');
		$this->form_validation->set_rules('Service_name', 'Service_name', 'required');






		/////////////////////////////////////////////////////////////////////////////////

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');

			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			
	        $this->load->view('admin/services/new',$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('services/services_model');
			$this->services_model->add_services($Service_name,$Duration,$Retail_Price);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Added</strong> ');

			redirect("admin/services","refresh");
		}


	}


	//comment delete the entry
	public function delete_services($id)
	{

		$this->load->model('services/services_model');
		$this->services_model->delete_services($id);

		$this->session->set_flashdata('type', '1');
		$this->session->set_flashdata('msg', '<strong>Entry removed</strong> ');

		redirect("admin/services","refresh");


	}


	 /**
	  *  @Description: to edit the existing entry
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_services_view($id)
	{

		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;


		$this->load->model('services/services_model');
		$query = $this->services_model->get_services($id);


		$data['query'] = $query;
		$data['id']    = $id;

		
        $this->load->view("admin/services/edit",$data);
        

	}


	 /**
	  *  @Description: edit services view
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_services($id)
	{
		$Service_name=$this->input->post('Service_name');
$Duration=$this->input->post('Duration');
$Retail_Price=$this->input->post('Retail_Price');



		////////////////////////////////////////////////////////////////////////

		$this->form_validation->set_rules('xxx', 'xxx', 'xxx');
		$this->form_validation->set_rules('Service_name', 'Service_name', 'required');





		////////////////////////////////////////////////////////////////////////
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			$this->load->model('services/services_model');
			$query = $this->services_model->get_services($id);


			$data['query'] = $query;
			$data['id']    = $id;

			
	        $this->load->view("admin/services/edit",$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('services/services_model');
			$this->services_model->edit_services($id,$Service_name,$Duration,$Retail_Price);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Updated</strong> message');

			redirect("admin/services","refresh");
		}

	}




}

/* End of file services.php */
/* Location: ./application/controllers/admin/services.php */