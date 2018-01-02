<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  *  @Description: Get all the clients from the userid
  *       @Params: userid (session)
  *
  *       @returns: array
  */
if ( ! function_exists('my_clients'))
{
    
    function my_clients()
    {
        $CI =& get_instance();

        $user_id = $CI->session->userdata('userid');

        $CI =& get_instance();
        $CI->db->select('*');
        $CI->db->from('clients');
        $CI->db->where('user_id', $user_id);
        

        $query = $CI->db->get();
        
        return $query;
        
    }   
}


 /**
  *  @Description: Get all the services from the userid
  *       @Params: userid (session)
  *
  *       @returns: array
  */



if ( ! function_exists('my_services'))
{
    
    function my_services()
    {
       $CI =& get_instance();

        $user_id = $CI->session->userdata('userid');

        $CI =& get_instance();
        $CI->db->select('*');
        $CI->db->from('services');
        $CI->db->where('user_id', $user_id);
        

        $query = $CI->db->get();
        
        return $query;

    }   
}