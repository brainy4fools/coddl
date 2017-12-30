
<?php $this->load->view("_layout2"); ?>
<div class="pmf-container" >
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
                        <h3 class="text-center">Login to access your Account</h3>
                        <h5 class="text-center">No <strong>contract</strong>. No <strong>credit card</strong> required.</h5>
                    </div>

                    <form  action="<?php echo site_url('custom/cms_login/validate_login'); ?>" method="post" enctype="multipart/form-data">
                      
                    
                    
                    <div class="col-sm-12">
                        <div class="form-group nice-pad">
                            <div class="igs-small"></div>
                            <input name="name" type="text" class="form-control f" placeholder="Username" data-toggle="tooltip" data-placement="top" value="<?php echo set_value('name'); ?>">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group nice-pad">
                            <div class="igs-small"></div>
                            <input name="password" type="password" class="form-control f" placeholder="Password" data-toggle="tooltip" data-placement="top" value="">
                        </div>
                    </div>
                    

                    <div class="col-sm-12">
                        <div class="form-group nice-pad">
                            <button type="submit" class="btn btn-purplet btn-lg btn-block f"> <strong>Login</strong></button>
                        </div>
                    </div>

                    </form>
                    <div class="col-sm-12">
                        <div class="conditions-container">
                             <h5 class="text-center"> <a href="<?php echo site_url('forgot-password') ?>">Forgot your password?</a>   </h5>
                             <h5 class="text-center"> <a href="<?php echo site_url('Try-us-for-free') ?>">Register</a>   </h5>
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