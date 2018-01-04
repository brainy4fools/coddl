<div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px; min-height:800px;  ">
    
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


    <?php $this->load->view('admin/textanywhere/breadcrumb-new'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold">New textanywhere
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="Add new textanywhere" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body">
                    <form action="<?php echo site_url('admin/textanywhere/new_textanywhere'); ?>" method="post" enctype="multipart/form-data">
                        

                         <div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>Password</label>  
    <div class="igs-small"></div>
    <input name="Password" type="text" class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('Password'); ?>">
    <div class='errors'>
        <?php echo form_error('Password'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>External</label>  
    <div class="igs-small"></div>
    <input name="External" type="text" class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('External'); ?>">
    <div class='errors'>
        <?php echo form_error('External'); ?>
    </div>
</div>
<div class="form-group">
    <!-- <div class="errors pull-right">* This field is required</div> -->
    <label>label</label>  
    <div class="igs-small"></div>
    <input name="label" type="text" class="form-control" placeholder="Type here" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('label'); ?>">
    <div class='errors'>
        <?php echo form_error('label'); ?>
    </div>
</div>

                        
                        <button type="submit" class="btn btn-purplet btn-s-xs pull-right" id=""> <i class="fa fa-check"></i> <strong>Save</strong> </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>