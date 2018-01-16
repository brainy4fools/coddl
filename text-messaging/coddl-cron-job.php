<?php
//for the new motopromote responsive website

mysql_connect('localhost', 'root', 'root');
mysql_select_db('coddl');    
date_default_timezone_set('Europe/London');


require_once('nusoap.php');

$todays_date = date('Y-m-d');
$time = date('H');


//MAKE SURE TO CONSIDER THE REMINDER MINUS NUMBER OF HOURS




$query = " SELECT * FROM IGS_bookings WHERE BOOKING_DATE = '$todays_date' AND BOOKING_TIME = '$time'";
$the_result = mysql_query($query) or die('Error, query failed');
while($r = mysql_fetch_array($the_result)) { 
    
    echo 'yo';

    $id = $r['id'];
    $user_id = $r['user_id'];
    $message_name = 'Your appointment was scheduled';
    $send_to = $r['CLIENT_MOBILE'];
    $booking_reference = $r['BOOKING_REFERENCE'];
    $staff_name = $r['STAFF_FIRST_NAME'];
    //$customer_ref = $r['customer_ref'];
    
    $from = "Reminder";
    $message = $r['SERVICE_NAME'];
    
    // Generate Unique Ref to replace stupid idea of using time()
    // Make 10 chars long for asthetic reasons
    $random = $id;
    $random .= rand(100000000, 999999999);
    $unique_reference = $random;
    
    $parameters = array( 
        'returnCSVString' => 'false', 
        'externalLogin' => 'xxx', 
        'password' => 'xxx', 
        'clientBillingReference' => 'coddl', // Identifies MotoPromote SMS on TextAnywhere account statements
        'clientMessageReference' => ''.$unique_reference.'', // Used to get delivery status, must be unique!
        'originator' => ''.$from.'', 
        'destinations' => ''.$send_to.'', 
        'body' => ''.$message.'', 
        'validity' => '72', 
        'characterSetID' => '2', 
        'replyMethodID' => '1', 
        'replyData' => '', 
        'statusNotificationUrl' => 'http://rmdweb.co.uk/coddl/index.php/custom/cms_login/sms_update_status' // URL to send delivery status notifications to, important!
    );  
    $nusoapclient = new nusoapclient('http://www.textapp.net/webservice/service.asmx?wsdl'); 
   // $result = $nusoapclient->call('SendSMS',$parameters,'http://www.textapp.net/','http://www.textapp.net/SendSMS');
    
    $ent_message = htmlspecialchars($message, ENT_QUOTES);
    $sent_on = date('Y-m-d H:i:s');


    mysql_query("INSERT INTO `IGS_sent`(`id`, `user_id`, `message_name`, `message`, `recipient`, `sent_on`, `type`, `unique_reference`, `status_code`, `status_desc`, `status_update`, `booking_reference`, `staff_name`) VALUES ('NULL','$user_id','$message_name','$message','$send_to','$sent_on','','$unique_reference','600','','','$booking_reference','$staff_name')")or die(mysql_error());




    // mysql_query("INSERT INTO `IGS_sms_sent`(`id`, `user_id`, `message_name`, `recipient`, `customer_ref`, `customer_reg`, `from`, `message`, `sent_on`, `type`, `unique_reference`, `status_code`, `status_desc`, `status_update`) VALUES ('NULL','$user_id','$name','$send_to','$customer_ref','reg','$from','$ent_message','$sent_on','','$unique_reference','600','','')")or die(mysql_error());


    
    
    

    


}
?>