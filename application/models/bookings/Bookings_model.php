<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bookings_model extends CI_Model {

	public function get_all()
	{
		$user_id = $this->session->userdata('userid');

        $this->db->select('*');
		$this->db->from('bookings');
        $this->db->where('user_id', $user_id);
        
		$query = $this->db->get();
		
		return $query;

	}


    public function add_bookings($CLIENT_FIRST_NAME,$CLIENT_LAST_NAME,$STAFF_FIRST_NAME,$STAFF_LAST_NAME,$BOOKING_DATE_TIME,$BOOKING_DATE,$BOOKING_TIME,$BOOKING_REFERENCE,$SERVICE_NAME,$BUSINESS_NAME,$LOCATION_NAME,$LOCATION_PHONE,$BOOKING_END_DATE_TIME,$color,$CLIENT_MOBILE,$SERVICE_COST)
    {
    	
        //effort to get the schedul_hour working

        $p = explode(":", $BOOKING_TIME);

        $sms_delay = 1; //delay in hours


        $schedul_hour = $p[0] - $sms_delay;  //eg 11:45:00



        $user_id = $this->session->userdata('userid');
        $object = array(
    		'user_id'=>$user_id,'CLIENT_FIRST_NAME'=>$CLIENT_FIRST_NAME,'CLIENT_LAST_NAME'=>$CLIENT_LAST_NAME,'STAFF_FIRST_NAME'=>$STAFF_FIRST_NAME,'STAFF_LAST_NAME'=>$STAFF_LAST_NAME,'BOOKING_DATE_TIME'=>$BOOKING_DATE_TIME,'BOOKING_DATE'=>$BOOKING_DATE,'BOOKING_TIME'=>$BOOKING_TIME,'BOOKING_REFERENCE'=>$BOOKING_REFERENCE,'SERVICE_NAME'=>$SERVICE_NAME,'BUSINESS_NAME'=>$BUSINESS_NAME,'LOCATION_NAME'=>$LOCATION_NAME,'LOCATION_PHONE'=>$LOCATION_PHONE,'BOOKING_END_DATE_TIME'=>$BOOKING_END_DATE_TIME,'color'=>$color,
            'CLIENT_MOBILE' => $CLIENT_MOBILE, 'SERVICE_COST' => $SERVICE_COST, 'schedul_hour' =>$schedul_hour


    		);
    	$this->db->insert('bookings', $object);


    }

    public function edit_bookings($id,$CLIENT_FIRST_NAME,$CLIENT_LAST_NAME,$STAFF_FIRST_NAME,$STAFF_LAST_NAME,$BOOKING_DATE_TIME,$BOOKING_DATE,$BOOKING_TIME,$BOOKING_REFERENCE,$SERVICE_NAME,$BUSINESS_NAME,$LOCATION_NAME,$LOCATION_PHONE,$BOOKING_END_DATE_TIME,$color)
    {

        $user_id = $this->session->userdata('userid');
    	$object = array(
    		'user_id'=>$user_id,'CLIENT_FIRST_NAME'=>$CLIENT_FIRST_NAME,'CLIENT_LAST_NAME'=>$CLIENT_LAST_NAME,'STAFF_FIRST_NAME'=>$STAFF_FIRST_NAME,'STAFF_LAST_NAME'=>$STAFF_LAST_NAME,'BOOKING_DATE_TIME'=>$BOOKING_DATE_TIME,'BOOKING_DATE'=>$BOOKING_DATE,'BOOKING_TIME'=>$BOOKING_TIME,'BOOKING_REFERENCE'=>$BOOKING_REFERENCE,'SERVICE_NAME'=>$SERVICE_NAME,'BUSINESS_NAME'=>$BUSINESS_NAME,'LOCATION_NAME'=>$LOCATION_NAME,'LOCATION_PHONE'=>$LOCATION_PHONE,'BOOKING_END_DATE_TIME'=>$BOOKING_END_DATE_TIME,'color'=>$color



    		);

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->update('bookings', $object);


    }


    public function move_bookings($BOOKING_REFERENCE,$BOOKING_DATE_TIME,$BOOKING_END_DATE_TIME)
    {

        $pt = explode("T", $BOOKING_DATE_TIME);
        $p = explode(":", $pt[1]);

        $BOOKING_TIME = $pt[1];

        $sms_delay = 1; //delay in hours


        $schedul_hour = $p[0] - $sms_delay;  //eg 11:45:00



        $user_id = $this->session->userdata('userid');
        $object = array(
            'BOOKING_DATE_TIME'=>$BOOKING_DATE_TIME,'BOOKING_END_DATE_TIME'=>$BOOKING_END_DATE_TIME,'schedul_hour'=>$schedul_hour, 'BOOKING_TIME' => $BOOKING_TIME


            );

        $this->db->where('BOOKING_REFERENCE', $BOOKING_REFERENCE);
        $this->db->where('user_id', $user_id);
        $this->db->update('bookings', $object);


    }




    public function get_bookings($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->select('*');
    	$this->db->from('bookings');
    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);

    	$query = $this->db->get();
    		
    	return $query;


    }


    public function get_bookings_ref($BOOKING_REFERENCE)
    {
        $user_id = $this->session->userdata('userid');

        $this->db->select('*');
        $this->db->from('bookings');
        $this->db->where('BOOKING_REFERENCE', $BOOKING_REFERENCE);
        $this->db->where('user_id', $user_id);

        $query = $this->db->get();
            
        return $query;


    }

    public function delete_bookings($id)
    {
        $user_id = $this->session->userdata('userid');

    	$this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
    	$this->db->delete('bookings');

    }

    public function cancel_bookings($BOOKING_REFERENCE)
    {
        $user_id = $this->session->userdata('userid');

        $this->db->where('BOOKING_REFERENCE', $BOOKING_REFERENCE);
        $this->db->where('user_id', $user_id);
        $this->db->delete('bookings');

    }


}

/* End of file bookings_model.php */
/* Location: ./application/models/crud/bookings_model.php */