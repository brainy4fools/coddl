<div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px; min-height:800px;  ">

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


    <?php $this->load->view('admin/textanywhere/breadcrumb-all'); ?>
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading font-bold">All textanywhere
                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="top" data-content="All textanywhere" title="" data-original-title="<button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;>×</button>Info"> <i class="fa fa-question"></i> <strong></strong> </div>
            </header>
            <section class="panel">
                <div class="panel-body">

                     <div class="row">
                        <div class="col-sm-10">
                             
                          
                        </div>
                        <div class="col-sm-2">
                            <a href="<?php echo site_url('admin/textanywhere/new_textanywhere_view'); ?>">
                                <button type="submit" class="btn btn-purplet btn-s-xs pull-right" id="">
                                <i class="fa fa-plus"></i> <strong>New textanywhere</strong></button>
                            </a>
                        </div>
                    </div>
                    <div class="line"></div>
                    
                    <div class="table-responsive" style="margin-top:0px;">
                        <table class="table table-striped b-t text-sm" id="example">
                            <thead>

                                <tr>
                                    
                                    <th class="" width="">Password</th>
<th class="" width="">External</th>
<th class="" width="">label</th>
<th class="" width="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query->result() as $key): ?>
                                <tr>
                                   
                                    <td><?php echo $key->Password ?></td>
<td><?php echo $key->External ?></td>
<td><?php echo $key->label ?></td>

                                    <td>
                                        <?php echo anchor( "admin/textanywhere/edit_textanywhere_view/$key->id", 'Edit'); ?>
                                        <?php echo anchor( "admin/textanywhere/delete_textanywhere/$key->id", 'Delete'); ?> 
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

