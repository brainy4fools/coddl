<?php $this->load->view("_layout2"); ?>
<div class="pmf-container">
<div class="book">
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

    
    <div class="row bg-white" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <div class="row nice" >
                 <!-- the user can reset password -->
            <form action="<?php echo site_url("custom/cms_login/update_password/$key"); ?>" method="post" enctype="multipart/form-data">
               

                <div class="form-group">
                    <label>Update your password</label>
                    <div class="igs-small">Please make sure your password is at least 6 character long and contains at least one number</div>
                    <input name="password" type="password"  class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="">
                </div>

               <button type="submit" class="btn btn-purplet btn-s-xs pull-right f"> <strong>Update</strong></button>
               
            </form>
            </div>
            <div class="gap"></div>
           
        </div>
    </div>
    </div>
</div>
<?php $this->load->view("_footer2"); ?>