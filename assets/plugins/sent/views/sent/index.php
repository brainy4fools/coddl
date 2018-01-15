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
                            <a href="<?php echo site_url('admin/sent/new_sent_view'); ?>">
                                <button type="submit" class="btn btn-purplet btn-s-xs pull-right f" id="">
                                <i class="fa fa-plus"></i> <strong>New sent</strong></button>
                            </a>
                        </div>
                    </div>
                    <div class="line"></div>
                    
                    <div class="table-responsive" style="margin-top:0px;">
                        <table class="table  b-t" id="example">
                            <thead>

                                <tr>
                                    
                                    <th class="" width="">Message Name</th>
<th class="" width="">Message</th>
<th class="" width="">Recipient</th>
<th class="" width="">Sent On</th>
<th class="" width="">Type</th>
<th class="" width="">Unique Reference</th>
<th class="" width="">Status Code</th>
<th class="" width="">Status Desc</th>
<th class="" width="">Status Update</th>
<th class="" width="">Booking Reference</th>
<th class="" width="">Staff Name</th>
<th class="" width="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query->result() as $key): ?>
                                <tr>
                                   
                                    <td><?php echo $key->message_name ?></td>
<td><?php echo $key->message ?></td>
<td><?php echo $key->recipient ?></td>
<td><?php echo $key->sent_on ?></td>
<td><?php echo $key->type ?></td>
<td><?php echo $key->unique_reference ?></td>
<td><?php echo $key->status_code ?></td>
<td><?php echo $key->status_desc ?></td>
<td><?php echo $key->status_update ?></td>
<td><?php echo $key->booking_reference ?></td>
<td><?php echo $key->staff_name ?></td>

                                    <td>
                                        <?php echo anchor( "admin/sent/edit_sent_view/$key->id", 'Edit',array('class' => 'm-edit')); ?>
                                        <?php echo anchor( "admin/sent/delete_sent/$key->id", 'Delete',array('class' => 'm-delete')); ?> 
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

