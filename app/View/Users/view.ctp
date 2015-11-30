<div class="row clearfix well">
    <div class="col-md-8 column">
        <blockquote>
            <p><?php echo $this->Session->read('Auth.User.full_name') ?></p>
            <small>Info</small>
            <small>Random Info</small>
            <small>blah blah blahn</small>
        </blockquote>
    </div>
    <?php if ($this->request->params['userId'] != $this->Session->read('Auth.User.id')): ?>
    <div class="col-md-2 column">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal" data-whatever="First and Last Name">
            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Message
        </button>
    </div>
    <?php endif; ?>
</div>
<?php if ($this->request->params['userId'] == $this->Session->read('Auth.User.id')): ?>
    <?php echo $this->element('lost-and-found'); ?>
<?php endif; ?>