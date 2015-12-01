<form method="post" class="form-horizontal">
    <fieldset>
        <legend>Send Message</legend>
        <div class="form-group">
            <label for="to" class="col-sm-2 control-label">To:</label>
            <div class="col-sm-6">
                <p class="form-control-static"><?php echo $info['userName']; ?></p>
            </div>
        </div>
        <div class="form-group">
            <label for="about" class="col-sm-2 control-label">About:</label>
            <div class="col-sm-6">
                <p class="form-control-static"><?php echo $info['objectName']; ?></p>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message:</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="message" name="data[Message][message]"><?php if (isset($this->data['Message']['message'])) echo $this->data['Message']['message']; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </fieldset>
</form>
