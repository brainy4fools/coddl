<div class="modal fade" id="modal-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="igs-small">Information text</div>
                            <input name="name" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value=""> </div>
                        <div class="form-group">
                            <label>label</label>
                            <textarea name="name" class="form-control f" rows="5" placeholder="Type here" data-toggle="tooltip" data-placement="top"></textarea>
                        </div>
                        <button type="submit" class="btn btn-purplet btn-s-xs pull-right f"> <strong>ok</strong>
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
       $('#i-rem').click(function() {
            $("#calendar").fullCalendar('removeEvents', '7b');
        });
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventMouseover: function(data, event, view) {
                tooltip = '<div class="tooltiptopicevent">' + 'Title: ' + data.title + '</br>' + 'ID: ' + data.id + '</div>';
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

            dayClick: function(date, jsEvent, view) {

                //alert('Clicked on: ' + date.format());
                //alert('Current view: ' + view.name);
                var date = date.format();

                $.ajax({
                        url: "<?php echo site_url('custom/calendar/add_event'); ?>",
                        type: 'post',
                        data: {date:date},
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


                        }
                    });
                

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
            events: [{
                title: 'All Day Event',
                start: '2017-12-01',
                backgroundColor: '#A6DBFE'
            }],
            eventDrop: function(event, delta, revertFunc) {
                alert(event.title + " was dropped on " + event.start.format() + "\n" + event.end.format());
            },
            eventResize: function(event, delta, revertFunc) {
                alert(event.title + " end is now " + event.start.format() + "\n" + event.end.format());
                
            }
        });


       
    });
</script>
</body>
</html>
