<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Textanywhere extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		{
			if($this->session->userdata('isloggedin')=='1')
			{
				$this->load->model('Stuff_permissions');
				$pass = $this->Stuff_permissions->has_permission("textanywhere");

				if($pass != true)
				{
					redirect('admin/dashboard','refresh');
				}
			}
			else
			{
				redirect('admin/installer','refresh');
			}
		}

		
	}

	public function index()
	{

		$this->load->model('textanywhere/textanywhere_model');
		$query = $this->textanywhere_model->get_all();
		
		$data['query'] = $query;


		$this->load->view('admin/header');
        $this->load->view('admin/body');
        $this->load->view('admin/textanywhere/index',$data);
        $this->load->view('admin/footer');
	}



	 /**
	  *  @Description: new textanywhere view
	  *       @Params: params
	  *
	  *  	 @returns: returns
	  */
	public function new_textanywhere_view()
	{
		$this->load->view('admin/header');
        $this->load->view('admin/body');
        $this->load->view('admin/textanywhere/new');
        $this->load->view('admin/footer');


	}


	//validate and add the entry to the db
	public function new_textanywhere()
	{

		$Password=$this->input->post('Password');
$External=$this->input->post('External');
$label=$this->input->post('label');



		/////////////////////////////////////////////////////////////////////////////////
		//   validataion

		$this->form_validation->set_rules('xxx', 'xxx', '');
		






		/////////////////////////////////////////////////////////////////////////////////

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->view('admin/header');
	        $this->load->view('admin/body');
	        $this->load->view('admin/textanywhere/new');
	        $this->load->view('admin/footer');
			
		}
		else
		{
			//successful

			$this->load->model('textanywhere/textanywhere_model');
			$this->textanywhere_model->add_textanywhere($Password,$External,$label);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Added</strong> ');

			redirect("admin/textanywhere","refresh");
		}


	}


	//comment delete the entry
	public function delete_textanywhere($id)
	{

		$this->load->model('textanywhere/textanywhere_model');
		$this->textanywhere_model->delete_textanywhere($id);

		$this->session->set_flashdata('type', '1');
		$this->session->set_flashdata('msg', '<strong>Entry removed</strong> ');

		redirect("admin/textanywhere","refresh");


	}


	 /**
	  *  @Description: to edit the existing entry
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_textanywhere_view($id)
	{

		$this->load->model('textanywhere/textanywhere_model');
		$query = $this->textanywhere_model->get_textanywhere($id);


		$data['query'] = $query;
		$data['id']    = $id;

		$this->load->view('admin/header');
        $this->load->view('admin/body');
        $this->load->view("admin/textanywhere/edit",$data);
        $this->load->view('admin/footer');

	}


	 /**
	  *  @Description: edit textanywhere view
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_textanywhere($id)
	{
		$Password=$this->input->post('Password');
$External=$this->input->post('External');
$label=$this->input->post('label');



		////////////////////////////////////////////////////////////////////////

		$this->form_validation->set_rules('xxx', 'xxx', 'xxx');
		





		////////////////////////////////////////////////////////////////////////
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->model('textanywhere/textanywhere_model');
			$query = $this->textanywhere_model->get_textanywhere($id);


			$data['query'] = $query;
			$data['id']    = $id;

			$this->load->view('admin/header');
	        $this->load->view('admin/body');
	        $this->load->view("admin/textanywhere/edit",$data);
	        $this->load->view('admin/footer');
			
		}
		else
		{
			//successful

			$this->load->model('textanywhere/textanywhere_model');
			$this->textanywhere_model->edit_textanywhere($id,$Password,$External,$label);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Updated</strong> message');

			redirect("admin/textanywhere","refresh");
		}

	}




}

/* End of file textanywhere.php */
/* Location: ./application/controllers/admin/textanywhere.php */