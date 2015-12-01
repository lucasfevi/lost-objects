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
        <?php foreach ($objects as $key => $object): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="#" class="object-name" data-lat="<?php echo $object['Objects']['latitude']; ?>" data-lng="<?php echo $object['Objects']['longitude']; ?>"><?php echo $object['Objects']['name']; ?></a>
                    </h4>
                </div>
                <p><?php echo nl2br($object['Objects']['description']); ?></p>
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Message
                </button>
            </div>
        </div>

        <hr>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="col-sm-4">
        <div id="searchMap"></div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap" async defer></script>
