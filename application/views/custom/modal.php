<?php $this->load->view("_layout"); ?>
<div class="pmf-container">
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div class="form-group">
            <label>Name</label>
            <div class="igs-small"></div>
            <input name="name" type="text" class="form-control f" placeholder="Type here" data-toggle="tooltip" data-placement="top" value=""> </div>
        <div class="form-group">
            <label>Information</label>
            <textarea name="name" id="inp-box" class="form-control f" rows="5" data-maxlength="this" data-required="true" placeholder="Type here" data-toggle="tooltip" data-placement="top"></textarea>
        </div> <a href="#modal-form" class="btn btn-purplet btn-s-xs pull-right f" data-toggle="modal"><strong>Add</strong></a> </div>
</div>
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
<?php $this->load->view("_footer"); ?>