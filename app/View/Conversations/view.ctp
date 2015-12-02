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
        <div role="tabpanel" class="tab-pane fade <?php if ($k1 == 0) echo 'in active'; ?>" id="conversation<?php echo $conversation['Conversation']['id']; ?>">
            <div class="well">
                <?php foreach ($conversation['Message'] as $k2 => $message): ?>
                    <?php if ($message['user_id'] == $this->Session->read('Auth.User.id')): ?>
                    <p tabindex="10" class="text-right"><?php echo $message['message']; ?></p>
                    <?php else: ?>
                    <p tabindex="10" class="text-left text-primary"><?php echo $message['message']; ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>