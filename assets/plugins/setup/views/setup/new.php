<?php $this->load->view('_layout'); ?>
<div class="pmf-container" >
    
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


    <?php $this->load->view('admin/setup/breadcrumb-new'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">New setup
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Add new setup" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">
                    <form action="<?php echo site_url('admin/setup/new_setup'); ?>" method="post" enctype="multipart/form-data">
                        

                         <div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Enable_Notifications</label>  
    <div class="igs-small"></div>
    <input name="Enable_Notifications" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Enable_Notifications'); ?>">
    <div class='errors'>
        <?php echo form_error('Enable_Notifications'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Send_by</label>  
    <div class="igs-small"></div>
    <input name="Send_by" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Send_by'); ?>">
    <div class='errors'>
        <?php echo form_error('Send_by'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Reminder_advance_notice</label>  
    <div class="igs-small"></div>
    <input name="Reminder_advance_notice" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Reminder_advance_notice'); ?>">
    <div class='errors'>
        <?php echo form_error('Reminder_advance_notice'); ?>
    </div>
</div>
<div class="form-group">
    <label>SMS_Template</label> 
    <div class="igs-small">This will automatically be sent to your customers, please use the fields shown</div>
    <textarea name="SMS_Template"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('SMS_Template'); ?></textarea>
    <div class='errors'>
        <?php echo form_error('SMS_Template'); ?>
    </div>
</div>


                        
                        <button type="submit" class="btn btn-purplet btn-s-xs pull-right f" id=""> <i class="fa fa-check"></i> <strong>Save</strong> </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
<?php $this->load->view('_footer'); ?>