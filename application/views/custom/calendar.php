<?php $this->load->view("_calendarhead"); ?>

<body>

    <div class="row" >

       
      <div id="credits" class='pull-right'>Credits:  <?php echo $this->session->userdata('credits'); ?></div>
    </div>
    <div id='calendar'>




    </div>
     <div id="create-event">-</div>
</body>
<?php $this->load->view("_calendarfooter"); ?>