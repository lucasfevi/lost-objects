<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Login</div>
        </div>

        <div style="padding-top: 30px;" class="panel-body">

            <?php if ($this->Session->check('Message.error')): ?>
            <div class="alert alert-danger col-sm-12">
                <?php echo $this->Flash->render('error'); ?>
            </div>
            <?php endif; ?>

            <form class="form-horizontal" role="form" method="post">

                <div style="margin-bottom: 25px;" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="data[User][email]" value="<?php if (isset($this->data['User']['email'])) echo $this->data['User']['email']; ?>" placeholder="E-mail">
                </div>

                <div style="margin-bottom: 25px;" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="data[User][password]" placeholder="Password">
                </div>

                <div style="margin-top: 10px;" class="form-group">
                    <div class="col-sm-12 controls">
                        <button type="submit" class="btn btn-success">Sign In</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid #888; padding-top: 15px; font-size: 85%;" >
                            <p>Need to Sign up? <a href="<?php echo $this->Html->url(array('action' => 'add')); ?>"> Sign up Here</a></p>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
