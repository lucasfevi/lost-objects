<?php
echo $this->Html->script('http://code.jquery.com/jquery-1.11.3.min.js');
echo $this->Html->script('search-objects');
?>
<div class="row">
    <legend>Search Results</legend>
    <div class="col-sm-8">
        <?php if (empty($objects)): ?>

        <p>No objects found with your search criteria.</p>

        <?php else: ?>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <?php foreach ($objects as $key => $object): ?>

            <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="heading<?php echo $object['Objects']['id']; ?>">

                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $object['Objects']['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $object['Objects']['id']; ?>">
                            <?php echo $object['Objects']['name']; ?>
                        </a>
                    </h4>

                </div>

                <div id="collapse<?php echo $object['Objects']['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $object['Objects']['id']; ?>">

                    <div class="panel-body">

                        <p><?php echo nl2br($object['Objects']['description']); ?></p>

                        <button type="button" class="btn btn-primary btn-location" data-lat="<?php echo $object['Objects']['latitude']; ?>" data-lng="<?php echo $object['Objects']['longitude']; ?>">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Location
                        </button>

                        <?php if ($this->Session->read('Auth.User') && $this->Session->read('Auth.User.id') != $object['Objects']['user_id']): ?>

                        <a href="<?php echo $this->Html->url(array('controller' => 'conversations', 'action' => 'create', $object['Objects']['id'])); ?>" class="btn btn-default">
                            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Message
                        </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <hr>

        <?php endforeach; ?>

        </div>

        <?php endif; ?>
    </div>
    <div class="col-sm-4">
        <div id="searchMap"></div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap" async defer></script>
