
<div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px; min-height:800px;  ">
    
    <!-- breadcrumb -->
       <div class="row" style="margin-left:30px; margin-right:30px;">
          <div class="col-sm-12">
            <!-- .breadcrumb -->
            <ul class="breadcrumb">
              <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> <?php echo ('Dashboard'); ?></a></li>
              <li class='active'><a href="<?php echo site_url('admin/field_builder'); ?>"><i class="fa fa-list-ul"></i> <?php echo('Field Builder');?></a></li>
              <li> <a href="#">Add new field</a> </li>
              
            </ul>
                  
            </div>
        </div> 
        <!-- end breadcrumb -->

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

    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="col-sm-12">
            <header class="panel-heading ">
                <div class="inline font-bold">
                    <?php echo $title; ?> 
                  </div>


                <div class="pull-right btn btn-sm  btn-info btn-rounded" data-toggle="popover" data-html="true" data-placement="bottom" data-content='<?php echo anchor('admin/help/fields', 'Help', 'attributs'); ?>' title="" data-original-title='<button type="button" class="close pull-right" data-dismiss="popover">&times;</button>Info'> <i class="fa fa-question"></i> <strong></strong> 
                </div>
            </header>
            <?php $atts= array( 'data-validate'=>'parsley'); echo form_open_multipart('admin/field_builder/save_field/1',$atts); ?>
            
            <section class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Name</label>
                        <div class="errors pull-left">*</div>
                        <div class="igs-small">What this field will be called in the control panel. 
                          (This <strong>MUST</strong> be unique and must not contain numbers or spaces)</div>
                        <input name="handle" type="text" 
                         
                        class="form-control" placeholder="Type here" 
                        data-toggle="tooltip" data-placement="top" 
                         value="<?php echo set_value('handle'); ?>"> 
                    </div>
                    <div class='errors'><?php echo form_error('handle'); ?></div>
                    <div class="form-group">
                        <label>Instructions</label>
                        <div class="igs-small">Helper text to guide the author</div>
                        <input name="instructions" type="text" 
                         
                        class="form-control" placeholder="Type here"
                         data-toggle="tooltip" data-placement="top" 
                         title="" value="<?php echo set_value('instructions'); ?>"> 
                    </div>
                    <div class="form-group">
                        <label>Field Type</label>
                        <div class="errors pull-left">*</div>
                        <div class="igs-small">Specify the field type</div>
                        <select name="type" class="form-control m-b" id="type">
                           
                            <option value="plain-text">Plain Text</option>
                            <option value="multi-line">Multi-line Box</option>
                            <option value="rich-text">Rich Text Box</option>
                            <option value="drop-down">Drop Down</option>
                            <option value="check-box">Check Boxes</option>
                            <option value="color">Color</option>
                            <option value="file-upload">File Upload</option>
                            <option value="number">Number</option>
                            <option value="date">Date</option>
                            <option value="switch">Switch</option>
                        </select>
                        <div class='errors'><?php echo form_error('type'); ?></div>
                    </div>
                    <div class="pm-check-box" style="display:none;">
                        <!-- dynamic dropdown and checkboxes -->
                        <div class="btn btn-purplet btn-s-xs" id="add-block2"><strong>Add Another</strong>
                        </div>
                        <div class="small-gap"></div>
                        <div class="form-group">
                            <label>Check Box values</label>
                            <input name="opts-name" type="text" 
                            data-maxlength="200" class="form-control" 
                            placeholder="Type option here" 
                            data-toggle="tooltip" 
                            data-placement="top" title="" value=""> </div>
                        <div id="my-content2"> </div>
                    </div>
                    <div class="pm-drop-down" style="display:none;">
                        <!-- dynamic dropdown and checkboxes -->
                        <div class="btn btn-purplet btn-s-xs" id="add-block"><strong>Add Another</strong>
                        </div>
                        <div class="small-gap"></div>
                        <div class="form-group">
                            <label>Drop Down values</label>
                            <input name="opts-name2" type="text"  
                            data-maxlength="200" class="form-control" 
                            placeholder="Type option here" 
                            data-toggle="tooltip" 
                            data-placement="top" title="" value=""> </div>
                        <div id="my-content"> </div>
                    </div>
                    <div class="pm-plain-text" style="display:none;">
                        <div class="form-group">
                            <label>Max Length </label>
                            <div class="igs-small">The maximum length of characters the field is allowed to have.</div>
                            <input name="maxchars" id="maxchars" type="text" 
                            data-maxlength="20" class="form-control" 
                            placeholder="" data-toggle="tooltip" 
                            data-placement="top" title="" value="<?php echo set_value('maxchars'); ?>"> 
                            <div class='errors'><?php echo form_error('maxchars'); ?></div>
                        </div>
                    </div>
                    <div class="pm-file-upload" style="display:none;">
                        <div class="form-group">
                            <label>Select Allowed File types </label>
                            <div class="igs-small">Choose the file types which are allowed.</div>
                            <input name="filetypes" id="filetypes" 
                            type="text" data-maxlength="20" 
                            class="form-control" 
                            placeholder="gif|jpg|png" data-toggle="tooltip" 
                            data-placement="top" title="" value="<?php echo set_value('filetypes'); ?>">
                            <div class='errors'><?php echo form_error('filetypes'); ?></div> 
                        </div>
                        <div class="form-group">
                            <label>Limit</label>
                            <div class="igs-small">Limit the number of uploads </div>
                            <input name="limit" type="text" data-maxlength="200"
                             class="form-control" placeholder="Type here" 
                             data-toggle="tooltip" data-placement="top" 
                             title="" value="1"  readonly> 
                             <div class='errors'><?php echo form_error('limit'); ?></div>
                         </div>
                    </div>
                    <div class="pm-number" style="display:none;">
                        <div class="form-group">
                            <label>Min Value </label>
                            <div class="igs-small">Minimum</div>
                            <input name="min" id="min" type="text" 
                            data-maxlength="20" class="form-control" 
                            placeholder="" data-toggle="tooltip" 
                            data-placement="top" title="" value="<?php echo set_value('min'); ?>"> 
                            <div class='errors'><?php echo form_error('min'); ?></div>
                        </div>
                        <div class="form-group">
                            <label>Max Value</label>
                            <div class="igs-small">Maximum </div>
                            <input name="max" type="text" 
                            data-maxlength="200" 
                            class="form-control" 
                            placeholder="Type here" 
                            data-toggle="tooltip" 
                            data-placement="top" title="" value="<?php echo set_value('max'); ?>"> 
                            <div class='errors'><?php echo form_error('max'); ?></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-purplet btn-s-xs "><strong>Save</strong>
                    </button>

                    <?php echo form_close(); ?>
                </div>
            </section>
        </div>
    </div>
</div>