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
                            <?php if (!empty($lost_objects)): ?>
                                <?php foreach ($lost_objects as $key => $object): ?>
                                <p>
                                    <strong><?php echo $object['Objects']['name']; ?></strong>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'objects', 'action' => 'edit', $object['Objects']['id'])); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                    <br/>
                                    <?php echo mb_strimwidth($object['Objects']['description'], 0, 200, '...'); ?>
                                </p>
                                <hr>
                                <?php endforeach; ?>
                            <?php else: ?>
                            <p><strong>No object lost posted!</strong></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="panel-found">
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-md-8">
                            <?php if (!empty($found_objects)): ?>
                                <?php foreach ($found_objects as $key => $object): ?>
                                <p>
                                    <strong><?php echo $object['Objects']['name']; ?></strong>
                                    <a href="<?php echo $this->Html->url(array('controller' => 'objects', 'action' => 'edit', $object['Objects']['id'])); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a><br/>
                                    <?php echo mb_strimwidth($object['Objects']['description'], 0, 200, '...'); ?>
                                </p>
                                <hr>
                                <?php endforeach; ?>
                            <?php else: ?>
                            <p><strong>No object found posted!</strong></p>
                            <?php endif; ?>
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