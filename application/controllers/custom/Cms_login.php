<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_login extends CI_Controller {



    public function __construct()
      {
          parent::__construct();
          {
            //this is where the magic happens

            //inlcude a better hashing library
            include('./resources/password/password.php');
          }
      }
    

    public function index()
    {
        
    }


    


     /**
      *  @Description: sign up send an email to me
      *       @Params: params
      *
      *       @returns: returns
      */
     public function sign_up()
     {

        $this->form_validation->set_rules('first_name', 'first_name', 'required');
        $this->form_validation->set_rules('surname', 'surname', 'required');
        $this->form_validation->set_rules('business_email', 'business_email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', 'required|numeric');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('Stuff_globals');
            $data = $this->Stuff_globals->dump_all();

            

            $data['query'] = $query;
            $data['errors'] =   'Some details are invalid!!!!';

            $this->load->view('custom/Try-us-for-free',$data);
        }
        else
        {
            $this->load->model('stuff_email');

            //send the email to me where I'll register them an account

            $to = 'admin@gmail.com';
            $from ='company.com';
            $subject = 'CMS Sign up!!!';

            $email = $this->input->post('business_email');
            $phone = $this->input->post('phone');
            $first_name = $this->input->post('first_name');
            $surname = $this->input->post('surname');


            $body = $body . "$first_name $surname $email $phone";

            $this->stuff_email->my_email($to,$from,$subject,$body);

            //now do the redirect to success page
            $this->load->model('Stuff_globals');
            $data = $this->Stuff_globals->dump_all();

           

            $data['query'] = $query;


            $this->load->view('custom/success',$data);

        }        

     }

     //update the password
      /**
        *  @Description: update the password
        *       @Params: _POST password, $md5
        *
        *     @returns: returns
        */
      public function update_password($md5)
      {
          $password = $this->input->post('password');

          $this->load->model('Stuff_user');

          if($this->Stuff_user->check_password($password) === true)
          {
             $this->Stuff_user->update_password($password,$md5);

            // $this->session->set_flashdata('type', '1');
             //$this->session->set_flashdata('errors', '<strong>Success</strong> Password updated!');


             $this->load->model('Stuff_globals');
            $data = $this->Stuff_globals->dump_all();


            $data['query'] = $query;
            $data['errors'] = 'Password updated';


            $this->load->view('custom/Log-in',$data);

             
          }
          else
          {
            $this->session->set_flashdata('type', '0');
            $this->session->set_flashdata('msg', '<strong>Error</strong> <br/>Password does not meet minimum requirements!');
             redirect("custom/cms_login/reset_view/$md5","refresh");
          }

          //reset view
         

      }

       /**
        *  @Description: accepts _GET var
        *       @Params: params
        *
        *     @returns: returns
        */
      public function reset_view($md5)
      {
         //check if md5 hash is valid
         $this->db->select('*');
         $this->db->from('user');
         $this->db->where('activ_key', $md5);

         $query = $this->db->get();

         $data['key'] = $md5;
         
         if($query->num_rows() > 0)
         {
            //this needs to change

            //now do the redirect to success page
            $this->load->model('Stuff_globals');
            $data = $this->Stuff_globals->dump_all();


            $data['query'] = $query;
            $data['key'] = $md5;

            $this->load->view('custom/reset',$data);

         }
         else
         {
            echo 'invalid key!';
         }
      }

        /**
      *  @Description: send email link password reset
      *                checks to see if username is valid
      *       @Params: username
      *
      *      @returns: string success or fail
      */
    public function send_reset($username)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('name', $username);
        $this->db->limit(1);

        $query = $this->db->get();
        
        if($query->num_rows() > 0)
        {
            //get the email
            $email = "";
            foreach ($query->result() as $row) 
            {
                $email = $row->email;
            }

            
            $hash = random_string('md5');

            $url = site_url('custom/cms_login/reset_view');
            $url = $url . "/$hash";

            $b = anchor($url, 'link', 'attributs');

            $body = "Please click the link to reset your password. <br/> $b";


            $this->load->model('Stuff_email');
            $this->Stuff_email->my_email($email,"Me", 'Password Reset',$body);


            //finally update user record activ_key
            $object = array('activ_key' => $hash );

            $this->db->where('name', $username);
            $this->db->update('user', $object);

            return "sent";

        }
        else
        {
            return "Username doesn't exist!";

        }

    }





     //reset the password

     public function reset_password()
     {

        $username = $this->input->post('name');
         


         //gotta create custom function
         $err = $this->send_reset($username);

         //echo $err;
         $my_errors = "";
         if($err === "sent")
         {
            $my_errors = 'Success, check your email';
         }
         else
         {
            $my_errors = $err;

         }
         

        $this->load->model('Stuff_globals');
        $data = $this->Stuff_globals->dump_all();

        

        $data['query'] = $query;
        $data['errors'] = $my_errors;
        

        $this->load->view('custom/forgot-password',$data);


     }


     public function logout()
     {
        $this->session->sess_destroy();

        redirect("Log-in", "refresh");
  
    }


    public function validate_login()
      {
            

            $data['errors'] = '';

            //------------------------------
            //  POST vars
            //------------------------------

            $name = $this->input->post('name');
            $password = $this->input->post('password');

            $this->db->where('name', $name);

            $query = $this->db->get('user');

            //check if user exists
            if($query->num_rows() == 1)
            {
              $query = $this->db->get_where('user', array('name' => $name));

              $hashed_password = "";
              $userid = "";
              foreach ($query->result() as $row)
              {

                  $hashed_password = $row->password;
                  $userid = $row->id;
              }

              if (password_verify($password, $hashed_password))
              {
                      //set the user's permissions
                      $this->load->model('Stuff_permissions');
                      $perms = $this->Stuff_permissions->get_permissions($userid);

                      

                      //$credits = '18';

                      $array = array(
                        'name' => $name,
                        'userid' => $userid,
                        'isloggedin' => '1',
                        'permissions' => $perms
                        

                      );

                      //update the login count
                      $this->db->set('logins','logins+1', false);
                      $this->db->where('name', $name);
                      $this->db->update('user');
                      
                      $this->session->set_userdata( $array );
                      //login successful
                      redirect('home','refresh');
              }
              else
              {
                    
                  
                    $this->load->model('Stuff_globals');
                    $data = $this->Stuff_globals->dump_all();

                    

                    $data['query'] = $query;
                    $data['errors'] =   'Password is incorrect, check your caps lock is not on!';

                    $this->load->view('custom/Log-in',$data);
              }
            }
            else
            {
                
                
                $this->load->model('Stuff_globals');
                $data = $this->Stuff_globals->dump_all();

                

                $data['query'] = $query;
                $data['errors'] = 'User Does not exist';

                $this->load->view('custom/Log-in',$data);
            
            }
 
      }


       /**
        *  @Description: make sure password is secure
        *                One number and at least 6 characters long
        *       @Params: string password
        *
        *     @returns: returns
        */
      public function check_password($pwd)
      {
        $error ="";       

        if( strlen($pwd) < 6 ) 
        {
          $error .= "Password too short! ";
        }


        if( !preg_match("#[0-9]+#", $pwd) ) 
        {
          $error .= "Password must include at least one number! ";
        }


        if( !preg_match("#[a-zA-z]+#", $pwd) ) 
        {
          $error .= "Password must include at least one letter! ";
        }


        if($error)
        {
            return false;
        } 
        else 
        {
          return true;
        }
      }


}

/* End of file Cms_login.php */
/* Location: ./application/controllers/custom/Cms_login.php */