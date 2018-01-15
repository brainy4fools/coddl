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


    <?php $this->load->view('admin/sent/breadcrumb-edit'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">Edit sent
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Edit sent" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">
                    <form action="<?php echo site_url("admin/sent/edit_sent/$id"); ?>" method="post" enctype="multipart/form-data">
                        <?php foreach ($query->result() as $key): ?>
                        <div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>message_name</label>  
    <div class="igs-small"></div>
    <input name="message_name" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('message_name',$key->message_name); ?>">
    <div class='errors'>
        <?php echo form_error('message_name'); ?>
    </div>
</div>
<div class="form-group">
    <label>message</label> 
    <div class="igs-small"></div>
    <textarea name="message"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('message',$key->message); ?></textarea>
    <div class='errors'>
        <?php echo form_error('message'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>recipient</label>  
    <div class="igs-small"></div>
    <input name="recipient" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('recipient',$key->recipient); ?>">
    <div class='errors'>
        <?php echo form_error('recipient'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>sent_on</label>  
    <div class="igs-small"></div>
    <input name="sent_on" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('sent_on',$key->sent_on); ?>">
    <div class='errors'>
        <?php echo form_error('sent_on'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>type</label>  
    <div class="igs-small"></div>
    <input name="type" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('type',$key->type); ?>">
    <div class='errors'>
        <?php echo form_error('type'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>unique_reference</label> <div class='errors inline'>*</div> 
    <div class="igs-small"></div>
    <input name="unique_reference" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('unique_reference',$key->unique_reference); ?>">
    <div class='errors'>
        <?php echo form_error('unique_reference'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>status_code</label>  
    <div class="igs-small"></div>
    <input name="status_code" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('status_code',$key->status_code); ?>">
    <div class='errors'>
        <?php echo form_error('status_code'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>status_desc</label>  
    <div class="igs-small"></div>
    <input name="status_desc" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('status_desc',$key->status_desc); ?>">
    <div class='errors'>
        <?php echo form_error('status_desc'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>status_update</label>  
    <div class="igs-small"></div>
    <input name="status_update" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('status_update',$key->status_update); ?>">
    <div class='errors'>
        <?php echo form_error('status_update'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>booking_reference</label>  
    <div class="igs-small"></div>
    <input name="booking_reference" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('booking_reference',$key->booking_reference); ?>">
    <div class='errors'>
        <?php echo form_error('booking_reference'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>staff_name</label>  
    <div class="igs-small"></div>
    <input name="staff_name" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('staff_name',$key->staff_name); ?>">
    <div class='errors'>
        <?php echo form_error('staff_name'); ?>
    </div>
</div>

                        
                        <?php endforeach; ?>
                        <button type="submit" class="btn btn-purplet btn-s-xs pull-right f" id=""> <i class="fa fa-check"></i> <strong>Save</strong> </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
<?php $this->load->view('_footer'); ?>