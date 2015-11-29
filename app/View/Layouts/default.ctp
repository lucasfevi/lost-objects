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

        echo $this->Html->css('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css');
        echo $this->Html->css('styles.css');

        echo $this->Html->script('http://code.jquery.com/jquery-1.10.2.min.js');
        echo $this->Html->script('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js');

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
                <a class="navbar-brand" href="#" style="color: #006dcc;">Lost Objects</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php echo $this->Flash->render(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>
</body>
</html>
