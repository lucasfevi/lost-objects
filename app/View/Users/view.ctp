<div class="row clearfix well">
    <div class="col-md-8 column">
        <blockquote>
            <p><?php echo $user['User']['full_name']; ?></p>
        </blockquote>
    </div>
    <?php if ($this->Session->read('Auth.User') && $this->request->params['userId'] != $this->Session->read('Auth.User.id')): ?>
    <div class="col-md-2 column">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal" data-whatever="First and Last Name">
            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Message
        </button>
    </div>
    <?php endif; ?>
</div>
<?php echo $this->element('lost-and-found'); ?>
