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


    <?php $this->load->view('admin/sent/breadcrumb-all'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">All sent
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="All sent" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">

                     <div class="row">
                        <div class="col-sm-10">
                             
                          
                        </div>
                        <div class="col-sm-2">
                           
                        </div>
                    </div>
                    
                    
                    <div class="table-responsive" style="margin-top:0px;">
                        <table class="table  b-t" id="example">
                            <thead>

                                <tr>
                                    <th class="" width="">Sent On</th>
                                    <th class="" width="">Staff Name</th>
                                    
<th class="" width="">Message</th>
<th class="" width="">Destination</th>





<th class="" width="">Booking Reference</th>

<th class="" width="">Message Name</th>
<th class="" width="">Status Code</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query->result() as $key): ?>
                                <tr>
                                   <td><?php echo my_pretty_date($key->sent_on) ?></td>
                                   <td><?php echo $key->staff_name ?></td>
                                    
<td><?php echo word_limiter($key->message,5); ?></td>
<td><?php echo $key->recipient ?></td>




<td><?php echo $key->booking_reference ?></td>

<td><?php echo $key->message_name ?></td>
<td><label class="label bg-success m-l-xs"><strong><?php echo $key->status_code ?></strong></label></td>

                                   
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

