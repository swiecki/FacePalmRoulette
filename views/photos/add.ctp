<div class="photos form">
<?php echo $this->Form->create('Photo');?>
	<fieldset>
		<legend><?php __('Add Photo'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index'));?></li>
	</ul>
</div>