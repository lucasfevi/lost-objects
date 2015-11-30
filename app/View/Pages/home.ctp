<div class="jumbotron">
    <div class="container">
        <h1>Lost Objects</h1>
        <p>Lost Objects is a crowd sourced website that enables user to find their lost items or help others find their lost items.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Sign In</h2>
            <p>If you have an account with Lost Objects already, sign in!</p>
            <p><a class="btn btn-success" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'login')); ?>" role="button">Sign In &raquo;</a></p>
        </div>
        <div class="col-md-6">
            <h2>Sign Up</h2>
            <p>If you do not have an account with Lost Object already, use the sign up button to create a profile.</p>
            <p><a class="btn btn-success" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'add')); ?>" role="button">Sign Up &raquo;</a></p>
        </div>
    </div>

    <hr>
</div>