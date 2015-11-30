<div class="row clearfix well">
    <div class="col-md-8 column">
        <blockquote>
            <p><?php echo $this->Session->read('Auth.User.full_name') ?></p>
            <small>Info</small>
            <small>Random Info</small>
            <small>blah blah blahn</small>
        </blockquote>
    </div>
    <div class="col-md-2 column">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal" data-whatever="First and Last Name">
            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Message
        </button>
    </div>
</div>
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
                                <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#foundObjectId">Add Found Object</button>
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
                                <button class="btn btn-primary btn-block" type="button">Add Lost Object</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>