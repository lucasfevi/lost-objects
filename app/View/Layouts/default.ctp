<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php if (isset($title)): ?>
        Lost Objects - <?php echo $title; ?>
        <?php else: ?>
        Lost Objects
        <?php endif; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
        echo $this->Html->css('styles.css');

        echo $this->Html->script('http://code.jquery.com/jquery-1.11.3.min.js');
        echo $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')); ?>" style="color: #006dcc;">Lost Objects</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="col-sm-4 col-md-4">
                    <form style="width: 100%;" action="<?php echo $this->Html->url(array('controller' => 'objects', 'action' => 'search')); ?>" class="navbar-form navbar-left" role="search" method="post">
                        <div class="form-group" style="width: 100%;">
                            <input style="width: 100%;" type="text" class="form-control" name="q" placeholder="Search for object" value="<?php if (isset($this->data['q'])) echo $this->data['q']; ?>">
                        </div>
                    </form>
                </div>
                <?php echo $this->element('profile-navbar'); ?>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php echo $this->fetch('content'); ?>
    </div>
</body>
</html>
