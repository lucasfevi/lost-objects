<div class="row clearfix">
    <div class="col-md-12">
        <div class="col-md-3">
            <a href="<?php echo $this->Html->url(array('controller' => 'objects', 'action' => 'add')); ?>" class="btn btn-primary btn-block" type="button">Add Object</a>
        </div>
        <div>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#panel-lost" data-toggle="tab">Lost Objects</a>
                </li>
                <li>
                    <a href="#panel-found" data-toggle="tab">Found Objects</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="panel-lost">
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-md-8">
                            <p>
                                <strong>Lost Frisbee</strong><br/>
                                I found a lost frisbee in the quad at ISU
                            </p>
                            <hr>
                            <p>
                                <strong>Lost Iphone</strong><br/>
                                I found an Iphone by the bone student center
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="panel-found">
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-md-8">
                            <p>
                                <strong>Looking for a notebook</strong><br/>
                                I lost my chemistry notebook in Anderson Park
                            </p>
                            <hr>
                            <p>
                                <strong>Laptop</strong><br/>
                                My laptop was left in the old unioin on the first floor
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>