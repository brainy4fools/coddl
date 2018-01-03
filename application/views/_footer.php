<div class="modal fade" id="sms-schedule">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">SMS Message</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12">
                       Hi Sarah, this is a friendly reminder about your appointment with Business on 2018-03-02 13:00, to cancel text 0123456789.
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
  <script src="<?php echo(base_url()."resources") ?>/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
  <!-- Bootstrap -->
  <script src="<?php echo(base_url()."resources") ?>/js/bootstrap.js" type="text/javascript"></script>
  <!-- app -->
  <script src="<?php echo(base_url()."resources") ?>/js/app.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/app.plugin.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/app.data.js" type="text/javascript"></script>
  <!-- fuelux -->
  <script src="<?php echo(base_url()."resources") ?>/js/fuelux/fuelux.js" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="<?php echo(base_url()."resources") ?>/js/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- combodate -->
  <script src="<?php echo(base_url()."resources") ?>/js/libs/moment.min.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/combodate/combodate.js" type="text/javascript"></script>

  <!-- parsley -->
  <script src="<?php echo(base_url()."resources") ?>/js/parsley/parsley.min.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()."resources") ?>/js/parsley/parsley.extend.js" type="text/javascript"></script>

  
  <script src="<?php echo(base_url()."resources") ?>/js/jscolor/jscolor.js" type="text/javascript"></script>


   <!--<script src="./layerslider/js/jquery.js" type="text/javascript"></script>-->

<?php if ($slider) : ?>

  <script src="<?php echo(base_url()) ?>/layerslider/js/greensock.js" type="text/javascript"></script>
  <!-- LayerSlider script files -->
  <script src="<?php echo(base_url()) ?>/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
  <script src="<?php echo(base_url()) ?>/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

<?php endif; ?>

  <!-- datatables -->
  <script src="<?php echo(base_url()."resources") ?>/js/datatables/jquery.dataTables.min.js" type="text/javascript"></script>

   <!-- smart menus -->
   <script src="<?php echo(base_url()."resources") ?>/js/jquery.smartmenus.js"></script>


   <script src="<?php echo(base_url()) ?>/Responsive-Lightbox/jquery.lightbox.js"></script>

  


 <script type="text/javascript">


   
    $(document).ready(function(event) {



        <?php if ($slider) : ?>
        $("#layerslider").layerSlider({
            pauseOnHover: false,
            skinsPath: '<?php echo (base_url());?>layerslider/skins/'
        });

        <?php endif; ?>
        // SmartMenus init
        $(function() {
            $('#main-menu').smartmenus({
                mainMenuSubOffsetX: -1,
                subMenusSubOffsetX: 10,
                subMenusSubOffsetY: 0
            });
        });
        // SmartMenus mobile menu toggle button
        $(function() {
            var $mainMenuState = $('#main-menu-state');
            if ($mainMenuState.length) {
                // animate mobile menu
                $mainMenuState.change(function(e) {
                    var $menu = $('#main-menu');
                    if (this.checked) {
                        $menu.hide().slideDown(250, function() {
                            $menu.css('display', '');
                        });
                    } else {
                        $menu.show().slideUp(250, function() {
                            $menu.css('display', '');
                        });
                    }
                });
                // hide mobile menu beforeunload
                $(window).bind('beforeunload unload', function() {
                    if ($mainMenuState[0].checked) {
                        $mainMenuState[0].click();
                    }
                });
            }
        });

        $('#example').dataTable( {
        "iDisplayLength": 50

        });


        $(function() {
            $('.gallery a').lightbox();
        });

        $('#preview').click(function(){
            $('#sms-schedule').appendTo("body").modal('show');
        });



    });
</script>
</body>
</html>
