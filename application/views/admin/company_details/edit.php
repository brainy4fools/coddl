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


    <?php $this->load->view('admin/company_details/breadcrumb-edit'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">Company Details
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Edit your company details" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">
                    <form action="<?php echo site_url("admin/company_details/edit_company_details/$id"); ?>" method="post" enctype="multipart/form-data">
                        <?php foreach ($query->result() as $key): ?>
                        <div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>Bussiness Name</label> <div class='errors inline'>*</div> 
    <div class="igs-small"></div>
    <input name="Bussiness_Name" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Bussiness_Name',$key->Bussiness_Name); ?>">
    <div class='errors'>
        <?php echo form_error('Bussiness_Name'); ?>
    </div>
</div>
<div class="form-group">
    <label>Description</label> 
    <div class="igs-small"></div>
    <textarea name="Description"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('Description',$key->Description); ?></textarea>
    <div class='errors'>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div class="form-group">
    <label>Address</label> 
    <div class="igs-small">Location Address</div>
    <textarea name="Address"  id="inp-box" class="form-control f" rows="5"  placeholder="Type here" data-toggle="tooltip" data-placement="top"><?php echo set_value('Address',$key->Address); ?></textarea>
    <div class='errors'>
        <?php echo form_error('Address'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>Website</label>  
    <div class="igs-small">Website address if applicable</div>
    <input name="Website" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Website',$key->Website); ?>">
    <div class='errors'>
        <?php echo form_error('Website'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>Mobile Number</label> <div class='errors inline'>*</div> 
    <div class="igs-small">A valid mobile number so your customers can contact your business</div>
    <input name="Mobile_Number" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Mobile_Number',$key->Mobile_Number); ?>">
    <div class='errors'>
        <?php echo form_error('Mobile_Number'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-left">*</div> -->
    <label>Business Type</label>  
    <div class="igs-small">E.g Salon</div>
    <input name="Business_Type" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Business_Type',$key->Business_Type); ?>">
    <div class='errors'>
        <?php echo form_error('Business_Type'); ?>
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