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


    <?php $this->load->view('admin/bookings/breadcrumb-edit'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">Edit bookings
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Edit bookings" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">
                    <form action="<?php echo site_url("admin/bookings/edit_bookings/$id"); ?>" method="post" enctype="multipart/form-data">
                        <?php foreach ($query->result() as $key): ?>
                        <div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>CLIENT_FIRST_NAME</label>  
    <div class="igs-small"></div>
    <input name="CLIENT_FIRST_NAME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('CLIENT_FIRST_NAME',$key->CLIENT_FIRST_NAME); ?>">
    <div class='errors'>
        <?php echo form_error('CLIENT_FIRST_NAME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>CLIENT_LAST_NAME</label>  
    <div class="igs-small"></div>
    <input name="CLIENT_LAST_NAME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('CLIENT_LAST_NAME',$key->CLIENT_LAST_NAME); ?>">
    <div class='errors'>
        <?php echo form_error('CLIENT_LAST_NAME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>STAFF_FIRST_NAME</label>  
    <div class="igs-small"></div>
    <input name="STAFF_FIRST_NAME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('STAFF_FIRST_NAME',$key->STAFF_FIRST_NAME); ?>">
    <div class='errors'>
        <?php echo form_error('STAFF_FIRST_NAME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>STAFF_LAST_NAME</label>  
    <div class="igs-small"></div>
    <input name="STAFF_LAST_NAME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('STAFF_LAST_NAME',$key->STAFF_LAST_NAME); ?>">
    <div class='errors'>
        <?php echo form_error('STAFF_LAST_NAME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>BOOKING_DATE_TIME</label>  
    <div class="igs-small"></div>
    <input name="BOOKING_DATE_TIME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('BOOKING_DATE_TIME',$key->BOOKING_DATE_TIME); ?>">
    <div class='errors'>
        <?php echo form_error('BOOKING_DATE_TIME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>BOOKING_DATE</label>  
    <div class="igs-small"></div>
    <input name="BOOKING_DATE" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('BOOKING_DATE',$key->BOOKING_DATE); ?>">
    <div class='errors'>
        <?php echo form_error('BOOKING_DATE'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>BOOKING_TIME</label>  
    <div class="igs-small"></div>
    <input name="BOOKING_TIME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('BOOKING_TIME',$key->BOOKING_TIME); ?>">
    <div class='errors'>
        <?php echo form_error('BOOKING_TIME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>BOOKING_REFERENCE</label>  
    <div class="igs-small"></div>
    <input name="BOOKING_REFERENCE" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('BOOKING_REFERENCE',$key->BOOKING_REFERENCE); ?>">
    <div class='errors'>
        <?php echo form_error('BOOKING_REFERENCE'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>SERVICE_NAME</label>  
    <div class="igs-small"></div>
    <input name="SERVICE_NAME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('SERVICE_NAME',$key->SERVICE_NAME); ?>">
    <div class='errors'>
        <?php echo form_error('SERVICE_NAME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>BUSINESS_NAME</label>  
    <div class="igs-small"></div>
    <input name="BUSINESS_NAME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('BUSINESS_NAME',$key->BUSINESS_NAME); ?>">
    <div class='errors'>
        <?php echo form_error('BUSINESS_NAME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>LOCATION_NAME</label>  
    <div class="igs-small"></div>
    <input name="LOCATION_NAME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('LOCATION_NAME',$key->LOCATION_NAME); ?>">
    <div class='errors'>
        <?php echo form_error('LOCATION_NAME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>LOCATION_PHONE</label>  
    <div class="igs-small"></div>
    <input name="LOCATION_PHONE" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('LOCATION_PHONE',$key->LOCATION_PHONE); ?>">
    <div class='errors'>
        <?php echo form_error('LOCATION_PHONE'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>BOOKING_END_DATE_TIME</label>  
    <div class="igs-small"></div>
    <input name="BOOKING_END_DATE_TIME" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('BOOKING_END_DATE_TIME',$key->BOOKING_END_DATE_TIME); ?>">
    <div class='errors'>
        <?php echo form_error('BOOKING_END_DATE_TIME'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>color</label>  
    <div class="igs-small"></div>
    <input name="color" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('color',$key->color); ?>">
    <div class='errors'>
        <?php echo form_error('color'); ?>
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