<?php $this->load->view("_layout2"); ?>
<div class="pmf-container">
   
   <div class="book">
    



    <div class="row bg-grey" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <div class="row nice">
                <div class="try-container">

                    <div class="row" style="margin-left:30px; margin-right:30px;">
                        <?php if (isset($errors)): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="fa fa-times"></i> 
                            </button> 
                            <i class="fa fa-ban-circle"></i>
                            <?php echo $errors; ?> 
                        </div>
                        <?php endif; ?>
                    </div>
                            
                                
                            
                       


                    <div class="col-sm-12">
                        <h3 class="text-center">Get Started with a Free Account</h3>
                        <h5 class="text-center">No <strong>contract</strong>. No <strong>credit card</strong> required.</h5>
                    </div>
                    <form action="<?php echo site_url('custom/cms_login/sign_up'); ?>" method="post" enctype="multipart/form-data">
                        <div class="col-sm-6">
                            <div class="form-group nice-pad">
                                <input name="first_name" type="text" class="form-control f" placeholder="First Name" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('first_name'); ?>">
                                <div class="errors">
                                    <?php echo form_error('first_name'); ?> 
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group nice-pad">
                                <input name="surname" type="text" class="form-control f" placeholder="Surname" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('surname'); ?>">
                            <div class="errors">
                                    <?php echo form_error('surname'); ?> 
                                    
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group nice-pad">
                                <div class="igs-small"></div>
                                <input name="business_email" type="text" class="form-control f" placeholder="Business Email" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('business_email'); ?>">
                                <div class="errors">
                                    <?php echo form_error('business_email'); ?> </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group nice-pad">
                                <div class="igs-small"></div>
                                <input name="phone" type="text" class="form-control f" placeholder="Phone number or Mobile" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('phone'); ?>">
                                <div class="errors">
                                    <?php echo form_error('phone'); ?> </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3 text-md ">
                            I'd like a demo:
                        </div>
                        <div class="col-sm-4">
                            <label class="switch ">
                                <input type="checkbox"> <span></span> </label>
                        </div>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group nice-pad">
                                <button type="submit" class="btn btn-purplet btn-lg btn-block f"> <strong>Get Started</strong></button>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-12">
                        <div class="conditions-container">
                            <h5 class="text-center">By Clicking this button you agree to the <a href="<?php echo site_url('terms-and-conditions'); ?>">terms & conditions</a>  and anti-spam policy </h5>
                            <h5 class="text-center"> <a href="<?php echo site_url('Log-in') ?>">Login</a>   </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
    </div>
    </div>
</div>
<?php $this->load->view("_footer2"); ?>