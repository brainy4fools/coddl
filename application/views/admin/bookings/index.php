<?php $this->load->view('_layout'); ?>
<div class="pmf-container">

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


    <?php $this->load->view('admin/bookings/breadcrumb-all'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">All bookings
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="All bookings" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">

                     <div class="row">
                        <div class="col-sm-10">
                             
                          
                        </div>
                        <div class="col-sm-2">
                            <a href="<?php echo site_url('admin/bookings/new_bookings_view'); ?>">
                                <button type="submit" class="btn btn-purplet btn-s-xs pull-right f" id="">
                                <i class="fa fa-plus"></i> <strong>New bookings</strong></button>
                            </a>
                        </div>
                    </div>
                    <div class="line"></div>
                    
                    <div class="table-responsive" style="margin-top:0px;">
                        <table class="table  b-t" id="example">
                            <thead>

                                <tr>
                                    
                                    <th class="" width="">Client First Name</th>
<th class="" width="">Client Last Name</th>
<th class="" width="">Staff First Name</th>
<th class="" width="">Staff Last Name</th>
<th class="" width="">Booking Date Time</th>
<th class="" width="">Booking Date</th>
<th class="" width="">Booking Time</th>
<th class="" width="">Booking Reference</th>
<th class="" width="">Service Name</th>
<th class="" width="">Business Name</th>
<th class="" width="">Location Name</th>
<th class="" width="">Location Phone</th>
<th class="" width="">Booking End Date Time</th>
<th class="" width="">Color</th>
<th class="" width="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query->result() as $key): ?>
                                <tr>
                                   
                                    <td><?php echo $key->CLIENT_FIRST_NAME ?></td>
<td><?php echo $key->CLIENT_LAST_NAME ?></td>
<td><?php echo $key->STAFF_FIRST_NAME ?></td>
<td><?php echo $key->STAFF_LAST_NAME ?></td>
<td><?php echo $key->BOOKING_DATE_TIME ?></td>
<td><?php echo $key->BOOKING_DATE ?></td>
<td><?php echo $key->BOOKING_TIME ?></td>
<td><?php echo $key->BOOKING_REFERENCE ?></td>
<td><?php echo $key->SERVICE_NAME ?></td>
<td><?php echo $key->BUSINESS_NAME ?></td>
<td><?php echo $key->LOCATION_NAME ?></td>
<td><?php echo $key->LOCATION_PHONE ?></td>
<td><?php echo $key->BOOKING_END_DATE_TIME ?></td>
<td><?php echo $key->color ?></td>

                                    <td>
                                        <?php echo anchor( "admin/bookings/edit_bookings_view/$key->id", 'Edit',array('class' => 'm-edit')); ?>
                                        <?php echo anchor( "admin/bookings/delete_bookings/$key->id", 'Delete',array('class' => 'm-delete')); ?> 
                                    </td>
                                </tr>
                                <?php endforeach; ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php $this->load->view('_footer'); ?>

