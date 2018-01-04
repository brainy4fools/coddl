<?php $this->load->view('_layout'); ?>
<div class="pmf-container">
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
        <?php if($this->session->flashdata('msg')) {?>
                    
            <?php if($this->session->flashdata('type') =='0') { ?>
        
            <div class="alert alert-danger">
        
            <?php } else {?>
            <div class="alert alert-success">
                <?php } ?>
                <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i>
                </button> <i class="fa fa-ban-circle"></i>
                <?php echo $this->session->flashdata('msg');?>
            </div>
        <?php } ?>
        </div>
    </div>


    <?php $this->load->view('admin/setup/breadcrumb-edit'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-8">
            <header class="panel-heading font-bold shade-t">Edit setup
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Edit setup" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">
                    <form action="<?php echo site_url("admin/setup/edit_setup/$id"); ?>" method="post" enctype="multipart/form-data">
                        <?php foreach ($query->result() as $key): ?>
                        <div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>Enable Notifications</label>  
    <div class="igs-small"></div>

    <select name="Enable_Notifications" id="" class='form-control f'>

        <option value="1" <?php if($key->Enable_Notifications == '1') echo "selected='selected'"; ?> >Yes</option>
        <option value="0" <?php if($key->Enable_Notifications == '0') echo "selected='selected'"; ?> >No</option>

       
    </select>

    
    <div class='errors'>
        <?php echo form_error('Enable_Notifications'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>Send by</label>  
    <div class="igs-small"></div>

    <select name="Send_by" id="" class='form-control f'>
        

        <option value="SMS" <?php if($key->Send_by == 'SMS') echo "selected='selected'"; ?> >SMS</option>
        <option value="SMS and Email" <?php if($key->Send_by == 'SMS and Email') echo "selected='selected'"; ?> >SMS and Email</option>
       
    </select>
    
    <div class='errors'>
        <?php echo form_error('Send_by'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>Reminder advance notice</label>  
    <div class="igs-small"></div>

    <select name="Reminder_advance_notice" id="" class='form-control f'>
        
        <option value="1 hour" <?php if($key->Reminder_advance_notice == '1 hour') echo "selected='selected'"; ?> >1 hour</option>
        <option value="2 hours" <?php if($key->Reminder_advance_notice == '2 hours') echo "selected='selected'"; ?> >2 hours</option>
        <option value="24 hours" <?php if($key->Reminder_advance_notice == '24 hours') echo "selected='selected'"; ?> >24 hours</option>
    </select>
    
    <div class='errors'>
        <?php echo form_error('Reminder_advance_notice'); ?>
    </div>
</div>
<div class="form-group">
    <label>Reminder Template</label> 
    <div class="igs-small">This will automatically be sent to your customers, please use the fields shown</div>
    <textarea name="SMS_Template"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('SMS_Template',$key->SMS_Template); ?></textarea>
    <div class='errors'>
        <?php echo form_error('SMS_Template'); ?>
    </div>
</div>

<div class="form-group">
    <label>Reschedule Template</label> 
    <div class="igs-small">This will text message is sent when rescheduling an appointment</div>
    <textarea name="Reschedule_Template"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('Reschedule_Template',$key->Reschedule_Template); ?></textarea>
    <div class='errors'>
        <?php echo form_error('Reschedule_Template'); ?>
    </div>
</div>

<div class="form-group">
    <label>Confirm Template</label> 
    <div class="igs-small">This will text message to immediately confirm appointment</div>
    <textarea name="Confirm_Template"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('Confirm_Template',$key->Confirm_Template); ?></textarea>
    <div class='errors'>
        <?php echo form_error('Confirm_Template'); ?>
    </div>
</div>

<div class="form-group">
    <label>Cancelled Template</label> 
    <div class="igs-small">This will text message sent when cancelling an appointment</div>
    <textarea name="Cancelled_Template"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('Cancelled_Template',$key->Cancelled_Template); ?></textarea>
    <div class='errors'>
        <?php echo form_error('Cancelled_Template'); ?>
    </div>
</div>



                        
                        <?php endforeach; ?>

                        <a href="#" id="preview">Preview Message</a>


                        <button type="submit" class="btn btn-purplet btn-s-xs pull-right f" id=""> <i class="fa fa-check"></i> <strong>Save</strong> </button>
                    </form>
                </div>
            </section>
        </div>

        <div class="col-sm-4">
            <header class="panel-heading font-bold shade-t">Message Settings</header>
            <section class="panel">
                
                <div class="panel-body shade-b">

                    Message types setup here will be automatically sent to clients. All messages
                    generated can be easily accessed on the messages page (in your main menu). <br/><br/>
                    Adjust the settings for how and when messages are sent, and edit the templates to personalise the text. <br/><br/>
                    Use the below tags to include appointment details inside messages: <br/><br/>

                    CLIENT_FIRST_NAME         <br/> 
                    CLIENT_LAST_NAME    <br/> 
                    STAFF_FIRST_NAME    <br/> 
                    STAFF_LAST_NAME    <br/> 
    <br/> 
                    BOOKING_DATE_TIME    <br/> 
                    BOOKING_DATE    <br/> 
                    BOOKING_TIME    <br/> 
    <br/> 
                    BOOKING_REFERENCE    <br/> 
                    SERVICE_NAME    <br/> 
    <br/> 
                    BUSINESS_NAME    <br/> 
                    LOCATION_PHONE    <br/> 

                </div>
            </section>
        </div>



    </div>
</div>
<?php $this->load->view('_footer'); ?>