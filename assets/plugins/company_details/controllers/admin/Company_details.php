<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_details extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		{
			if($this->session->userdata('isloggedin')=='1')
			{
				$this->load->model('Stuff_permissions');
				$pass = $this->Stuff_permissions->has_permission("company_details");

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
		



		$this->load->model('company_details/company_details_model');
		$query = $this->company_details_model->get_all();
		
		$data['query'] = $query;


		
        $this->load->view('admin/company_details/index',$data);
        
	}



	 /**
	  *  @Description: new company_details view
	  *       @Params: params
	  *
	  *  	 @returns: returns
	  */
	public function new_company_details_view()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;



		
        $this->load->view('admin/company_details/new',$data);
        


	}


	//validate and add the entry to the db
	public function new_company_details()
	{

		$Bussiness_Name=$this->input->post('Bussiness_Name');
$Description=$this->input->post('Description');
$Address=$this->input->post('Address');
$Website=$this->input->post('Website');
$Mobile_Number=$this->input->post('Mobile_Number');
$Business_Type=$this->input->post('Business_Type');



		/////////////////////////////////////////////////////////////////////////////////
		//   validataion

		$this->form_validation->set_rules('xxx', 'xxx', '');
		$this->form_validation->set_rules('Bussiness_Name', 'Bussiness_Name', 'required');



$this->form_validation->set_rules('Mobile_Number', 'Mobile_Number', 'required|integer');





		/////////////////////////////////////////////////////////////////////////////////

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');

			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			
	        $this->load->view('admin/company_details/new',$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('company_details/company_details_model');
			$this->company_details_model->add_company_details($Bussiness_Name,$Description,$Address,$Website,$Mobile_Number,$Business_Type);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Added</strong> ');

			redirect("admin/company_details","refresh");
		}


	}


	//comment delete the entry
	public function delete_company_details($id)
	{

		$this->load->model('company_details/company_details_model');
		$this->company_details_model->delete_company_details($id);

		$this->session->set_flashdata('type', '1');
		$this->session->set_flashdata('msg', '<strong>Entry removed</strong> ');

		redirect("admin/company_details","refresh");


	}


	 /**
	  *  @Description: to edit the existing entry
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_company_details_view($id)
	{

		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;


		$this->load->model('company_details/company_details_model');
		$query = $this->company_details_model->get_company_details($id);


		$data['query'] = $query;
		$data['id']    = $id;

		
        $this->load->view("admin/company_details/edit",$data);
        

	}


	 /**
	  *  @Description: edit company_details view
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_company_details($id)
	{
		$Bussiness_Name=$this->input->post('Bussiness_Name');
$Description=$this->input->post('Description');
$Address=$this->input->post('Address');
$Website=$this->input->post('Website');
$Mobile_Number=$this->input->post('Mobile_Number');
$Business_Type=$this->input->post('Business_Type');



		////////////////////////////////////////////////////////////////////////

		$this->form_validation->set_rules('xxx', 'xxx', 'xxx');
		$this->form_validation->set_rules('Bussiness_Name', 'Bussiness_Name', 'required');



$this->form_validation->set_rules('Mobile_Number', 'Mobile_Number', 'required|integer');




		////////////////////////////////////////////////////////////////////////
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			$this->load->model('company_details/company_details_model');
			$query = $this->company_details_model->get_company_details($id);


			$data['query'] = $query;
			$data['id']    = $id;

			
	        $this->load->view("admin/company_details/edit",$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('company_details/company_details_model');
			$this->company_details_model->edit_company_details($id,$Bussiness_Name,$Description,$Address,$Website,$Mobile_Number,$Business_Type);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Updated</strong> message');

			redirect("admin/company_details","refresh");
		}

	}




}

/* End of file company_details.php */
/* Location: ./application/controllers/admin/company_details.php */