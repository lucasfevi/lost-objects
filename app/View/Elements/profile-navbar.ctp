<?php if ($this->Session->check('Auth.User.id')): ?>
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?php echo $this->Session->read('Auth.User.full_name'); ?> <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'view', 'userId' => $this->Session->read('Auth.User.id'))); ?>">My Profile</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>">Logout</a></li>
        </ul>
    </li>
</ul>
<?php endif; ?>