<?php $this->load->view("_mobilelayout"); ?>

        <div class="header b-b m-white">
            <div class="row" style="margin-left:30px; margin-right:30px;">
                <div id="s-header">
                     

                    
                       <div class="col-xs-4 text-center"> <a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-angle-left "></i>Back</a></div>
                       <div class="col-xs-4 text-center"> <strong>All sent</strong></div>
                       <div class="col-xs-4 text-center"> <a href="#" id='add'>Add sent+</a></div>
                    
                </div>
            </div>
        </div>
        <section class="scrollable wrapper">
 
            <!-- for the alert msgs -->
            <div id="e-msg"class="row h-hidden" style="margin-left:30px; margin-right:30px;">
                  <div class="alert alert-danger">
                    
                    <strong>You have errors!</strong> <div id="errs"></div>
                  </div>
            </div>


            <div class="row" id="s-content-new">
                



                <div class="panel-group m-b" id="accordion">
                    <?php foreach ($query->result() as $key): ?>
                    <div class="panel">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key->id ?>">
                            <div class="panel-heading">
                                
                                <div class="pull-right"> <i class="fa fa-angle-down big"></i> </div>
                                
                            </div>
                        </a>
                        <div id="collapse<?php echo $key->id ?>" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body ">
                                <?php echo $key->message_name ?></br>
<?php echo $key->message ?></br>
<?php echo $key->recipient ?></br>
<?php echo $key->sent_on ?></br>
<?php echo $key->type ?></br>
<?php echo $key->unique_reference ?></br>
<?php echo $key->status_code ?></br>
<?php echo $key->status_desc ?></br>
<?php echo $key->status_update ?></br>
<?php echo $key->booking_reference ?></br>
<?php echo $key->staff_name ?></br>

                                <div class="edit" id="<?php echo $key->id ?>">Edit</div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>
<!-- /.vbox -->
</section>
</body>

</html>
<!-- jquery -->
<script src="<?php echo(base_url('resources')) ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo(base_url('resources')) ?>/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo(base_url('resources')) ?>/js/bootstrap.js" type="text/javascript"></script>
<!-- app -->
<script src="<?php echo(base_url('resources')) ?>/js/app.js" type="text/javascript"></script>
<script src="<?php echo(base_url('resources')) ?>/js/app.plugin.js" type="text/javascript"></script>
<script src="<?php echo(base_url('resources')) ?>/js/app.data.js" type="text/javascript"></script>
<!-- fuelux -->
<script src="<?php echo(base_url('resources')) ?>/js/fuelux/fuelux.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo(base_url('resources')) ?>/js/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- combodate -->
<script src="<?php echo(base_url('resources')) ?>/js/libs/moment.min.js" type="text/javascript"></script>
<script src="<?php echo(base_url('resources')) ?>/js/combodate/combodate.js" type="text/javascript"></script>
<script src="<?php echo(base_url()) ?>/Responsive-Lightbox/jquery.lightbox.js"></script>
<script type="text/javascript">
$(document).ready(function(event) {

    $('#content').on("click", '#demo', function(event) {
      
          
          $('#content').fadeOut(400,function(){
               window.location = "<?php echo site_url('admin/sent/index_mobile'); ?>";
            });

      });



    $('#add').click(function(e) {

        var id = 'x';
        $.ajax({
            url: "<?php echo site_url('admin/sent/new_sent_view_mobile'); ?>",
            type: 'post',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(data) {

                $('body').fadeOut('fast', function() {

                    $("#s-header").html(data.h);
                    $("#s-content-new").html("<li class='mpanel'>" + data.f + "</li>");
                    $('body').fadeIn('fast');
                });

            }
        });

    });


     // edit button on index page
  
    $('.edit').click(function(e) {

        var id = $(this).attr('id');
        $.ajax({
            url: '<?php echo site_url("admin/sent/edit_sent_view_mobile"); ?>',
            type: 'post',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(data) {

                $('body').fadeOut('fast', function() {


                    $("#s-header").html(data.h);
                    $("#s-content-new").html("<li class='mpanel'>" + data.f + "</li>");
                    $('body').fadeIn('fast');
                });

            }
        });

    });

     $('#content').on("click", '.update', function(event) {

        //serialize the _POST values in the form
        var dataString = $('form').serialize();
        
        
        $.ajax({
            url: '<?php echo site_url("admin/sent/edit_sent_mobile"); ?>',
            type: 'post',
            data: dataString,
            dataType: 'json',
            success: function(data) {

                if (data.f === "fail") {
                    $('#errs').html(data.err);
                    $('#e-msg').removeClass('h-hidden');
                } else {

                   

                    window.location.href = "<?php echo site_url('admin/sent/index_mobile'); ?>";
                }

            }
        });

    });

     $('#content').on("click", '.delete', function(event) {

        //serialize the _POST values in the form
        var dataString = $('form').serialize();
        
        var id = $(this).attr('id');
        $.ajax({
            url: '<?php echo site_url("admin/sent/delete_sent_mobile"); ?>',
            type: 'post',
            data: dataString,
            dataType: 'json',
            success: function(data) {

                if (data.f === "fail") {
                    
                } else {

                    

                    window.location.href = "<?php echo site_url('admin/sent/index_mobile'); ?>";
                }

            }
        });

    });




    // save function
    $('#content').on("click", '#save', function(event) {

        //serialize the _POST values in the form
        var dataString = $('form').serialize();

        $.ajax({
            url: "<?php echo site_url('admin/sent/new_sent_mobile'); ?>",
            type: 'post',
            data: dataString,
            dataType: 'json',
            success: function(data) {

                if (data.f === "fail") {
                    $('#errs').html(data.err);
                    $('#e-msg').removeClass('h-hidden');
                } else {

                    

                    window.location.href = "<?php echo site_url('admin/sent/index_mobile'); ?>";
                }


            }
        });

    });





  


    $(function() {
        $('.gallery a').lightbox();
    });

});
</script>
</body>

</html>