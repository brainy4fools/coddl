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


    <?php $this->load->view('admin/staff/breadcrumb-new'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">New staff
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Add new staff" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">
                    <form action="<?php echo site_url('admin/staff/new_staff'); ?>" method="post" enctype="multipart/form-data">
                        

                         <div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>First_Name</label> <div class='errors inline'>*</div> 
    <div class="igs-small"></div>
    <input name="First_Name" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('First_Name'); ?>">
    <div class='errors'>
        <?php echo form_error('First_Name'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Last_Name</label> <div class='errors inline'>*</div> 
    <div class="igs-small"></div>
    <input name="Last_Name" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Last_Name'); ?>">
    <div class='errors'>
        <?php echo form_error('Last_Name'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Mobile_Number</label>  
    <div class="igs-small"></div>
    <input name="Mobile_Number" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Mobile_Number'); ?>">
    <div class='errors'>
        <?php echo form_error('Mobile_Number'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Email</label>  
    <div class="igs-small"></div>
    <input name="Email" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Email'); ?>">
    <div class='errors'>
        <?php echo form_error('Email'); ?>
    </div>
</div>
<div class="form-group">
    <label>Notes</label> 
    <div class="igs-small"></div>
    <textarea name="Notes"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('Notes'); ?></textarea>
    <div class='errors'>
        <?php echo form_error('Notes'); ?>
    </div>
</div>

<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Appointment_Colour</label>  
    <div class="igs-small"></div>
    <input name="Appointment_Colour" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Appointment_Colour'); ?>">
    <div class='errors'>
        <?php echo form_error('Appointment_Colour'); ?>
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