<?php
echo $this->Html->script('add-objects');
// echo $this->Html->script('https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap');
?>
<form method="post" class="form-horizontal">
    <fieldset>
        <legend>Add Object</legend>
        <?php if (isset($errors)): ?>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <div class="alert alert-danger">
                    <?php foreach ($errors as $k1 => $field): ?>
                        <?php foreach ($field as $k2 => $error): ?>
                            <p>- <?php echo $error; ?></p>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="form-group">
            <label for="objectName" class="col-sm-2 control-label">Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="objectName" name="data[Objects][name]">
            </div>
        </div>
        <div class="form-group">
            <label for="objectDescription" class="col-sm-2 control-label">Description:</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="objectDescription" name="data[Objects][description]"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="objectCategory" class="col-sm-2 control-label">Category:</label>
            <div class="col-sm-6">
                <select class="form-control" id="objectCategory" name="data[Objects][category_id]">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <label class="radio-inline">
                    <input type="radio" name="data[Objects][type]" value="found"> Found
                </label>
                <label class="radio-inline">
                    <input type="radio" name="data[Objects][type]" value="lost"> Lost
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Location:</label>
            <div class="col-sm-6">
                <div id="floating-panel">
                    <input id="address" type="textbox" value="Normal, IL">
                    <button id="btnAddress" type="button" class="btn btn-default btn-xs">Go</button>
                </div>
                <div id="map" style="height: 300px;"></div>
                <input type="hidden" name="data[Objects][latitude]" id="lat" value="40.51396228669715">
                <input type="hidden" name="data[Objects][longitude]" id="lng" value="-88.99067401885986">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </fieldset>
</form>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap" async defer></script>
