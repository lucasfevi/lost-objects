<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
            <div style="float: right; font-size: 85%; position: relative; top: -10px;">
                <a id="signInLink" href="<?php echo $this->Html->url(array('action' => 'login')); ?>">Sign In</a>
            </div>
        </div>
        <div class="panel-body" >
            <form action="<?php echo $this->Html->url(array('action' => 'add')); ?>" id="signUpForm" class="form-horizontal" role="form" method="post">
                <?php if (isset($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $k1 => $field): ?>
                        <?php foreach ($field as $k2 => $error): ?>
                            <p>- <?php echo $error; ?></p>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <?php if ($this->Session->check('Message.success')): ?>
                <div class="alert alert-success">
                    <p><?php echo $this->Flash->render('success'); ?></p>
                </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="email" name="data[User][email]" placeholder="Email Address" value="<?php if (isset($this->data['User']['email'])) echo $this->data['User']['email']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="firstName" name="data[User][first_name]" placeholder="First Name" value="<?php if (isset($this->data['User']['first_name'])) echo $this->data['User']['first_name']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="lastName" name="data[User][last_name]" placeholder="Last Name" value="<?php if (isset($this->data['User']['last_name'])) echo $this->data['User']['last_name']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" id="password" name="data[User][password]" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-default">Sign up</button>
                    </div>
                  </div>
            </form>
         </div>
    </div>
</div>