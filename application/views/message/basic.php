<ul id="message" class="<?= $message->type ?>">
<?php 
	if(is_array($message->message)) :
		foreach ($message->message as $msg) : ?>
			<li><?= $msg ?></li>
<?php
		endforeach;
	else: ?>
	<li><?= $message->message ?></li>
<?php endif; ?>
</ul>
