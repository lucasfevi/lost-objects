<div class="row clearfix">
    <div class="col-md-12 column">
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
                    <div class="row clearfix">
                        <div class="col-md-8 column">
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
                            <div class="col-md-3 column">
                                <button class="btn btn-primary btn-block" type="button">Add Lost Object</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="panel-found">
                    <div class="row clearfix">
                        <div class="col-md-8 column">
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
                            <div class="col-md-3 column">
                                <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#foundObjectId">Add Found Object</button>
                            </div>
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

<div class="modal fade" id="foundObjectId" tabindex="-1" role="dialog" aria-labelledby="foundObjectLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Found Object:</label>
                        <input type="text" class="form-control" id="found-object">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Location:</label>
                        <input type="text" class="form-control" id="location">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Found Object Description:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Publish Found Object</button>
            </div>
        </div>
    </div>
</div>