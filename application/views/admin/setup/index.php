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


    <?php $this->load->view('admin/setup/breadcrumb-all'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold shade-t">All setup
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="All setup" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body shade-b">

                     <div class="row">
                        <div class="col-sm-10">
                             
                          
                        </div>
                        <div class="col-sm-2">
                            <a href="<?php echo site_url('admin/setup/new_setup_view'); ?>">
                                <button type="submit" class="btn btn-purplet btn-s-xs pull-right f" id="">
                                <i class="fa fa-plus"></i> <strong>New setup</strong></button>
                            </a>
                        </div>
                    </div>
                    <div class="line"></div>
                    
                    <div class="table-responsive" style="margin-top:0px;">
                        <table class="table  b-t" id="example">
                            <thead>

                                <tr>
                                    
                                    <th class="" width="">Enable Notifications</th>
<th class="" width="">Send By</th>
<th class="" width="">Reminder Advance Notice</th>
<th class="" width="">Sms Template</th>
<th class="" width="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query->result() as $key): ?>
                                <tr>
                                   
                                    <td><?php echo $key->Enable_Notifications ?></td>
<td><?php echo $key->Send_by ?></td>
<td><?php echo $key->Reminder_advance_notice ?></td>
<td><?php echo $key->SMS_Template ?></td>

                                    <td>
                                        <?php echo anchor( "admin/setup/edit_setup_view/$key->id", 'Edit',array('class' => 'm-edit')); ?>
                                        <?php echo anchor( "admin/setup/delete_setup/$key->id", 'Delete',array('class' => 'm-delete')); ?> 
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

