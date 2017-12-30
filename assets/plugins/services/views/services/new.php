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


    <?php $this->load->view('admin/services/breadcrumb-new'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">New services
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Add new services" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">
                    <form action="<?php echo site_url('admin/services/new_services'); ?>" method="post" enctype="multipart/form-data">
                        

                         <div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Service_name</label> <div class='errors inline'>*</div> 
    <div class="igs-small">Enter service name e.g Blow Dry</div>
    <input name="Service_name" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Service_name'); ?>">
    <div class='errors'>
        <?php echo form_error('Service_name'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Duration</label>  
    <div class="igs-small"></div>
    <input name="Duration" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Duration'); ?>">
    <div class='errors'>
        <?php echo form_error('Duration'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Retail_Price</label>  
    <div class="igs-small"></div>
    <input name="Retail_Price" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Retail_Price'); ?>">
    <div class='errors'>
        <?php echo form_error('Retail_Price'); ?>
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