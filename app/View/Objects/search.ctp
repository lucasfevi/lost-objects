<?php
echo $this->Html->script('http://code.jquery.com/jquery-1.11.3.min.js');
echo $this->Html->script('search-objects');
?>
<div class="row">
    <legend>Search Results</legend>
    <div class="col-sm-8">
        <?php for ($i = 0; $i < 15; $i++): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="media-body">
                    <h4 class="media-heading"><a href="#">Object Post Title</a></h4>
                </div>
                <p>post description. blah blah blah blah blah blah  blah blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-comment" aria-hidden="true" ></span> Message
                </button>
            </div>
        </div>

        <hr>
        <?php endfor; ?>
    </div>
    <div class="col-sm-4">
        <div id="searchMap"></div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap" async defer></script>
