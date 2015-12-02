<?php echo $this->Html->script('view-conversations'); ?>
<div class="col-md-3">
    <ul id="conversationNames" class="nav nav-pills nav-stacked">
        <?php foreach ($conversations as $key => $conversation): ?>
        <li role="presentation" <?php if ($key == 0) echo 'class="active"'; ?>>
            <a href="#conversation<?php echo $conversation['Conversation']['id']; ?>" aria-controls="conversation<?php echo $conversation['Conversation']['id']; ?>" role="tab" data-toggle="tab"><?php echo $conversation['Conversation']['name']; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="col-md-9">
    <div class="tab-content" id="conversationMessages">
        <?php foreach ($conversations as $k1 => $conversation): ?>
        <div role="tabpanel" class="tab-pane <?php if ($k1 == 0) echo 'active'; ?>" id="conversation<?php echo $conversation['Conversation']['id']; ?>">
            <div class="well">
                <?php foreach ($conversation['Message'] as $k2 => $message): ?>
                    <?php if ($message['user_id'] == $this->Session->read('Auth.User.id')): ?>
                    <p tabindex="10" class="text-right"><?php echo $message['message']; ?></p>
                    <?php else: ?>
                    <p tabindex="10" class="text-left text-primary"><?php echo $message['message']; ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
                <form class="form-send-message" action="<?php echo $this->Html->url(array('action' => 'send')); ?>" method="post">
                    <div class="input-group" style="width: 100%">
                        <input style="width: 100%" type="text" name="data[Message][message]" class="form-control message">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Send</button>
                        </span>
                    </div>
                    <input type="hidden" name="data[Message][conversation_id]" value="<?php echo $conversation['Conversation']['id']; ?>">
                    <input type="hidden" name="data[Message][user_id]" value="<?php echo $this->Session->read('Auth.User.id'); ?>">
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>