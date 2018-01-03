                  <div class="pm-footer" >
                    <div class="book bord-b">
                    <div class="pm-bb" >

                        <div class="row " style="margin-left:30px; margin-right:30px; padding-top:50px;">
                          <img class="img-responsive" src="<?= $theme['footerlogo'];?>" alt="image" />
                        </div>
                        <div class="row m-t" style="margin-left:30px; margin-right:30px;">
                        
                        
                            <div class="col-sm-4" style="padding-bottom:50px;">
                                © coddl, LLC 2017 <br/>
                                <div class="coddl-about">coddl is a division of RmdWeb <br/> T: 01455 240 077</div>
                                
                                 
                            </div>
                            <div class="col-sm-4" style="padding-bottom:50px;">
                               
                                 
                            </div>
                            <div class="col-sm-2">
                              
                              <a href="">FAQs</a> <br/>
                              <a href="">Help</a> <br/>
                              <a href="">Contact</a> <br/>
                            </div>
                            <div class="col-sm-2">
                              <a href="">FAQs</a> <br/>
                              <a href="">Help</a> <br/>
                              <a href="">Contact</a> <br/>
                            </div>
                           
                        </div>
                    </div>
                    </div>
                </div>               
                    
                </section>        
            </section> 
        </section>
    </section>
    <!-- /.vbox -->
  </section>
</section>
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
        $(function() {
            $('.gallery a').lightbox();
        });
    });
</script>
</body>
</html>
