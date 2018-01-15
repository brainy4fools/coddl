<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sent extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();
		{
			if($this->session->userdata('isloggedin')=='1')
			{
				$this->load->model('Stuff_permissions');
				$pass = $this->Stuff_permissions->has_permission("sent");

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
		



		$this->load->model('sent/sent_model');
		$query = $this->sent_model->get_all();
		
		$data['query'] = $query;


		
        $this->load->view('admin/sent/index',$data);
        
	}



	 /**
	  *  @Description: new sent view
	  *       @Params: params
	  *
	  *  	 @returns: returns
	  */
	public function new_sent_view()
	{
		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;



		
        $this->load->view('admin/sent/new',$data);
        


	}


	//validate and add the entry to the db
	public function new_sent()
	{

		$message_name=$this->input->post('message_name');
$message=$this->input->post('message');
$recipient=$this->input->post('recipient');
$sent_on=$this->input->post('sent_on');
$type=$this->input->post('type');
$unique_reference=$this->input->post('unique_reference');
$status_code=$this->input->post('status_code');
$status_desc=$this->input->post('status_desc');
$status_update=$this->input->post('status_update');
$booking_reference=$this->input->post('booking_reference');
$staff_name=$this->input->post('staff_name');



		/////////////////////////////////////////////////////////////////////////////////
		//   validataion

		$this->form_validation->set_rules('xxx', 'xxx', '');
		




$this->form_validation->set_rules('unique_reference', 'unique_reference', 'required');









		/////////////////////////////////////////////////////////////////////////////////

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');

			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			
	        $this->load->view('admin/sent/new',$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('sent/sent_model');
			$this->sent_model->add_sent($message_name,$message,$recipient,$sent_on,$type,$unique_reference,$status_code,$status_desc,$status_update,$booking_reference,$staff_name);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Added</strong> ');

			redirect("admin/sent","refresh");
		}


	}


	//comment delete the entry
	public function delete_sent($id)
	{

		$this->load->model('sent/sent_model');
		$this->sent_model->delete_sent($id);

		$this->session->set_flashdata('type', '1');
		$this->session->set_flashdata('msg', '<strong>Entry removed</strong> ');

		redirect("admin/sent","refresh");


	}


	 /**
	  *  @Description: to edit the existing entry
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_sent_view($id)
	{

		$this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;


		$this->load->model('sent/sent_model');
		$query = $this->sent_model->get_sent($id);


		$data['query'] = $query;
		$data['id']    = $id;

		
        $this->load->view("admin/sent/edit",$data);
        

	}


	 /**
	  *  @Description: edit sent view
	  *       @Params: id
	  *
	  *  	 @returns: returns
	  */
	public function edit_sent($id)
	{
		$message_name=$this->input->post('message_name');
$message=$this->input->post('message');
$recipient=$this->input->post('recipient');
$sent_on=$this->input->post('sent_on');
$type=$this->input->post('type');
$unique_reference=$this->input->post('unique_reference');
$status_code=$this->input->post('status_code');
$status_desc=$this->input->post('status_desc');
$status_update=$this->input->post('status_update');
$booking_reference=$this->input->post('booking_reference');
$staff_name=$this->input->post('staff_name');



		////////////////////////////////////////////////////////////////////////

		$this->form_validation->set_rules('xxx', 'xxx', 'xxx');
		




$this->form_validation->set_rules('unique_reference', 'unique_reference', 'required');








		////////////////////////////////////////////////////////////////////////
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('type', '0');
			$this->session->set_flashdata('msg', '<strong>Error</strong> Failed');


			$this->load->model('Stuff_globals');
        	$data = $this->Stuff_globals->dump_all();

        	$data['queryx'] = $queryx;


			$this->load->model('sent/sent_model');
			$query = $this->sent_model->get_sent($id);


			$data['query'] = $query;
			$data['id']    = $id;

			
	        $this->load->view("admin/sent/edit",$data);
	        
			
		}
		else
		{
			//successful

			$this->load->model('sent/sent_model');
			$this->sent_model->edit_sent($id,$message_name,$message,$recipient,$sent_on,$type,$unique_reference,$status_code,$status_desc,$status_update,$booking_reference,$staff_name);

			$this->session->set_flashdata('type', '1');
			$this->session->set_flashdata('msg', '<strong>Updated</strong> message');

			redirect("admin/sent","refresh");
		}

	}

    /******************************************************************************


        NOW DO THE MOBILE CONTROLLERS!

    *******************************************************************************/

    public function index_mobile()
    {
        $this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        $data['queryx'] = $queryx;
        



        $this->load->model('sent/sent_model');
        $query = $this->sent_model->get_all();
        
        $data['query'] = $query;


        
        $this->load->view('admin/sent/index-mobile',$data);
        
    }


     /**
      *  @Description: new sent view
      *       @Params: params
      *
      *      @returns: returns
      */
    public function new_sent_view_mobile()
    {
       
       $k =  read_file(APPPATH .'/views/admin/sent/new-mobile.php');
         $h =  read_file(APPPATH .'/views/admin/sent/breadcrumb-new-mobile.php');
          $result = array('f'=>$k, 'h' =>$h);
        echo json_encode($result);


    }

    //validate and add the entry to the db
    public function new_sent_mobile()
    {

        $message_name=$this->input->post('message_name');
$message=$this->input->post('message');
$recipient=$this->input->post('recipient');
$sent_on=$this->input->post('sent_on');
$type=$this->input->post('type');
$unique_reference=$this->input->post('unique_reference');
$status_code=$this->input->post('status_code');
$status_desc=$this->input->post('status_desc');
$status_update=$this->input->post('status_update');
$booking_reference=$this->input->post('booking_reference');
$staff_name=$this->input->post('staff_name');



        /////////////////////////////////////////////////////////////////////////////////
        //   validataion

        $this->form_validation->set_rules('xxx', 'xxx', '');
        




$this->form_validation->set_rules('unique_reference', 'unique_reference', 'required');









        /////////////////////////////////////////////////////////////////////////////////

        if ($this->form_validation->run() == FALSE)
        {
            $result = array('f'=>'fail','err' => validation_errors());
             echo json_encode($result);
            
            
        }
        else
        {
            //successful
            $this->load->model('sent/sent_model');
            $this->sent_model->add_sent($message_name,$message,$recipient,$sent_on,$type,$unique_reference,$status_code,$status_desc,$status_update,$booking_reference,$staff_name);

             $result = array('f'=>'success');
             echo json_encode($result);
            
        }


    }

    //comment delete the entry
    public function delete_sent_mobile($id)
    {
        //got from ajax
        $id = $this->input->post('id');

        $this->load->model('sent/sent_model');
        $this->sent_model->delete_sent($id);

        $result = array('f'=>'success');
             echo json_encode($result);


    }


    /**
      *  @Description: to do
      *       @Params: id
      *
      *      @returns: returns
      */
    public function edit_sent_view_mobile()
    {

        //TODO


        //got from ajax
        $id = $this->input->post('id');



        $this->load->model('sent/sent_model');
        $query = $this->sent_model->get_sent($id);


        $data['query'] = $query;
        $data['id']    = $id;

        
        

        //replace the other stuff
        $k =  read_file(APPPATH .'/views/admin/sent/edit-mobile.php');

        foreach ($query->result() as $row) 
        {
        	   $k = str_replace('{message_name}',$row->message_name,$k);
$k = str_replace('{message}',$row->message,$k);
$k = str_replace('{recipient}',$row->recipient,$k);
$k = str_replace('{sent_on}',$row->sent_on,$k);
$k = str_replace('{type}',$row->type,$k);
$k = str_replace('{unique_reference}',$row->unique_reference,$k);
$k = str_replace('{status_code}',$row->status_code,$k);
$k = str_replace('{status_desc}',$row->status_desc,$k);
$k = str_replace('{status_update}',$row->status_update,$k);
$k = str_replace('{booking_reference}',$row->booking_reference,$k);
$k = str_replace('{staff_name}',$row->staff_name,$k);

        }

        $k = str_replace("{id}", $id, $k);

        $h =  read_file(APPPATH .'/views/admin/sent/breadcrumb-edit-mobile.php');
          $result = array('f'=>$k, 'h' =>$h);
        echo json_encode($result);
        

    }


     /**
      *  @Description: edit sent view
      *       @Params: id
      *
      *      @returns: returns
      */
    public function edit_sent_mobile()
    {
        $id = $this->input->post('id');
        $message_name=$this->input->post('message_name');
$message=$this->input->post('message');
$recipient=$this->input->post('recipient');
$sent_on=$this->input->post('sent_on');
$type=$this->input->post('type');
$unique_reference=$this->input->post('unique_reference');
$status_code=$this->input->post('status_code');
$status_desc=$this->input->post('status_desc');
$status_update=$this->input->post('status_update');
$booking_reference=$this->input->post('booking_reference');
$staff_name=$this->input->post('staff_name');



        ////////////////////////////////////////////////////////////////////////

        $this->form_validation->set_rules('xxx', 'xxx', 'xxx');
        




$this->form_validation->set_rules('unique_reference', 'unique_reference', 'required');








        ////////////////////////////////////////////////////////////////////////
        
        if ($this->form_validation->run() == FALSE)
        {
            $result = array('f'=>'fail','err' => validation_errors());
             echo json_encode($result);
            
            
        }
        else
        {
            //successful

            $this->load->model('sent/sent_model');
            $this->sent_model->edit_sent($id,$message_name,$message,$recipient,$sent_on,$type,$unique_reference,$status_code,$status_desc,$status_update,$booking_reference,$staff_name);

           $result = array('f'=>'success');
             echo json_encode($result);
        }

    }


   









}

/* End of file sent.php */
/* Location: ./application/controllers/admin/sent.php */