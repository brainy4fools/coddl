<div class="modal fade" id="modal-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Bookings</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Time</label>
                                <div class="igs-small">You can set the duration after by clicking and dragging the square</div>
                                <input id="time" name="time" type="text"  class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top"  value="" readonly>
                            </div>


                            <?php $qc = my_clients(); ?>

                            
                            <div class="form-group">
                                <label>Select Client</label>
                                <select id='client' name="client" class="form-control f">
                                   <?php foreach ($qc->result() as $key): ?>
                                   <option value="<?php echo $key->id; ?>"><?php echo $key->First_Name; ?> <?php echo $key->Last_Name; ?></option>
                                   
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <?php $qs = my_services(); ?>

                            
                            <div class="form-group">
                                <label>Select Service</label>
                                <select id='service' name="service" class="form-control f">
                                   <?php foreach ($qs->result() as $key): ?>
                                   <option value="<?php echo $key->id; ?>"><?php echo $key->Service_name; ?> </option>
                                   
                                    <?php endforeach; ?>
                                </select>
                            </div>



                             <div class="form-group">
                            <label>Color</label>
                            <select id='class' name="class" class="form-control f">
                               <option value="blue">Blue</option>
                                                          
                                <option value="green">Green</option>
                                <option value="orange">Orange</option>
                                <option value="red">Red</option>
                                <option value="purple"> Purple</option>
                                
                            </select>
                        </div>
                        
                        <button id='s-submit' type="submit" class="btn btn-purplet btn-s-xs pull-right f"> <strong>Save</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- cancel appointment dialog -->
<div class="modal fade" id="cancel-appointment">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"> Appointment Details</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12">
                       
                       <div id="m-i"></div>

                       <input type="text" name="ref" id="ref" value="" style="display:none;"/>

                       <button id='c-cancel' type="submit" class="btn btn-purplet btn-s-xs f"> <strong>Send Cancel text</strong>
                        </button>

                        <button id='c-confirm' type="submit" class="btn btn-purplet btn-s-xs f m-l"> <strong>Send Confirm text</strong>
                        </button>

                        <button id='r-remove' type="submit" class="btn btn-purplet btn-s-xs f m-t"> <strong>Just remove</strong>
                        </button>

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



 <script type="text/javascript">


   
    $(document).ready(function(event) {
      


       //submit modal
       $('#s-submit').click(function(){

        date = $( "#time" ).val();
        
        classt = $('#class').val();
        client = $('#client').val();
        service = $('#service').val();
       
        

        $.ajax({
                url: "<?php echo site_url('custom/calendar/add_event'); ?>",
                type: 'post',
                data: {date:date,classt:classt,client:client,service:service},
                dataType: 'json',
                success: function (data) {
                

                

                var eventData;
                eventData = {
                    id: data.id,
                    title: data.title,
                    start: date,
                    end: data.end,
                    className: data.class
                    
                };
                $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                $('#calendar').fullCalendar('unselect');
                $('#modal-form').modal('hide');
                $('#title').val("");

                }
            });



       });


        $('#c-cancel').click(function(){

            var id = $('#ref').val();

             $.ajax({
                url: "<?php echo site_url('custom/calendar/cancel_event'); ?>",
                type: 'post',
                data: {id:id},
                dataType: 'text',
                success: function (data) {
                

                

                    }
                });
                $("#calendar").fullCalendar('removeEvents', id);
                $('#cancel-appointment').modal('hide');

        });

        $('#c-confirm').click(function(){

            var id = $('#ref').val();

             $.ajax({
                url: "<?php echo site_url('custom/calendar/confirm_event'); ?>",
                type: 'post',
                data: {id:id},
                dataType: 'text',
                success: function (data) {
                

                

                    }
                });
                
                $('#cancel-appointment').modal('hide');

        });

        $('#r-remove').click(function(){

            var id = $('#ref').val();

             $.ajax({
                url: "<?php echo site_url('custom/calendar/cancel_event_r'); ?>",
                type: 'post',
                data: {id:id},
                dataType: 'text',
                success: function (data) {
                

                

                    }
                });
                $("#calendar").fullCalendar('removeEvents', id);
                $('#cancel-appointment').modal('hide');

        });


   



        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventMouseover: function(data, event, view) {

                    var id = data.id;

                    tooltip = '<div class="tooltiptopicevent">' + '<b>Info: Ref</b> ' + data.id + ' ' + data.title + ' ' + data.mobile + ' Cost '+data.cost+ ' With '+ data.staff +'</div>';
            


                    $("body").append(tooltip);
                    $(this).mouseover(function(e) {
                        $(this).css('z-index', 10000);
                        $('.tooltiptopicevent').fadeIn('500');
                        $('.tooltiptopicevent').fadeTo('200', 1.9);
                    }).mousemove(function(e) {
                        $('.tooltiptopicevent').css('top', e.pageY + 10);
                        $('.tooltiptopicevent').css('left', e.pageX + 20);
                    });



                
            },
            eventMouseout: function(data, event, view) {
                $(this).css('z-index', 8);
                $('.tooltiptopicevent').remove();
            },
             //test to delete
             eventClick: function(calEvent, jsEvent, view) {
                
                var id = calEvent.id;
                $('#ref').val(id);

                 // id: '
                 // title: '
                 // start: '
                 // end: '
                 // className:
                 // mobile: '
                 // cost: '
                 // staff: '


                $('#m-i').html(calEvent.staff + calEvent.id + calEvent.title + calEvent.mobile + calEvent.cost);

                $('#cancel-appointment').appendTo("body").modal('show');
                
                


                


            },

           

            dayClick: function(date, jsEvent, view) {
                
                if(view.name != 'month')
                {
                    $('#time').val(date.format());
                    $('#modal-form').appendTo("body").modal('show');
                }


            },


            contentHeight: 800,
            columnFormat: 'ddd D MMM',
            allDaySlot: false,
            nowIndicator: true,
            slotDuration: '00:15',
            firstDay: 1,
            defaultView: 'agendaWeek',
            minTime: "08:00",
            maxTime: "18:00",
            eventOverlap: false,
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectHelper: true,
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [

            <?php foreach ($query->result() as $key) : ?>
            {
                    id: '<?php echo $key->BOOKING_REFERENCE; ?>',
                    title: '<?php echo $key->SERVICE_NAME; ?> <?php echo $key->CLIENT_FIRST_NAME; ?>',
                    start: '<?php echo $key->BOOKING_DATE_TIME; ?>',
                    end: '<?php echo $key->BOOKING_END_DATE_TIME; ?>',
                    className: '<?php echo $key->color; ?>',
                    mobile: '<?php echo $key->CLIENT_MOBILE; ?>',
                    cost: '<?php echo $key->SERVICE_COST; ?>',
                    staff: '<?php echo $key->STAFF_FIRST_NAME; ?>'
            },
            <?php endforeach; ?>


            ],
            eventDrop: function(event, delta, revertFunc) {
                //alert(event.id + " was dropped on " + event.start.format() + "\n" + event.end.format());
                var id = event.id;
                var start = event.start.format();
                var end = event.end.format();


                $.ajax({
                url: "<?php echo site_url('custom/calendar/move_event'); ?>",
                type: 'post',
                data: {id:id,start:start,end:end},
                dataType: 'text',
                success: function (data) {
                
                    alert('Send reschedule message?');
            

                }
            });



            },
            eventResize: function(event, delta, revertFunc) {
                //alert(event.title + " end is now " + event.start.format() + "\n" + event.end.format());
                var id = event.id;
                var start = event.start.format();
                var end = event.end.format();


                $.ajax({
                url: "<?php echo site_url('custom/calendar/resize_event'); ?>",
                type: 'post',
                data: {id:id,start:start,end:end},
                dataType: 'text',
                success: function (data) {
                

            

                }
            });
                
            }
        });


       
    });
</script>
</body>
</html>
