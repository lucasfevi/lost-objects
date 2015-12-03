<?php
echo $this->Html->script('add-objects');
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
                <input type="text" class="form-control" id="objectName" name="data[Objects][name]" value="<?php if (isset($this->data['Objects']['name'])) echo $this->data['Objects']['name']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="objectDescription" class="col-sm-2 control-label">Description:</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="objectDescription" name="data[Objects][description]"><?php if (isset($this->data['Objects']['description'])) echo $this->data['Objects']['description']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="objectCategory" class="col-sm-2 control-label">Category:</label>
            <div class="col-sm-6">
                <?php echo $this->Form->input('category_id', array(
                    'type'     => 'select',
                    'label'    => false,
                    'name'     => 'data[Objects][category_id]',
                    'class'    => 'form-control',
                    'id'       => 'objectCategory',
                    'options'  => $categories,
                    'empty'    => '(choose one)',
                    'selected' => (isset($this->data['Objects']['category_id'])) ? $this->data['Objects']['category_id'] : ''
                )); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <label class="radio-inline">
                    <input type="radio" name="data[Objects][type]" value="found" <?php if (isset($this->data['Objects']['type']) && $this->data['Objects']['type'] == 'found') echo 'checked'; ?>> Found
                </label>
                <label class="radio-inline">
                    <input type="radio" name="data[Objects][type]" value="lost" <?php if (isset($this->data['Objects']['type']) && $this->data['Objects']['type'] == 'lost') echo 'checked'; ?>> Lost
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
                <input type="hidden" name="data[Objects][latitude]" id="lat" value="<?php echo (isset($this->data['Objects']['latitude'])) ? $this->data['Objects']['latitude'] : '40.51396228669715'; ?>">
                <input type="hidden" name="data[Objects][longitude]" id="lng" value="<?php echo (isset($this->data['Objects']['longitude'])) ? $this->data['Objects']['longitude'] : '-88.99067401885986'; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </fieldset>
</form>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
