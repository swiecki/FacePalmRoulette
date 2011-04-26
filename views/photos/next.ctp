<?php //debug($photo) ?>
<div class="photos view">
<h2><?php  __('Photo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo[0]['Photo']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo[0]['Photo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo[0]['Photo']['url']; ?>
			&nbsp;
		</dd>
	</dl>
	<img src="<?php echo $photo[0]['Photo']['url']; ?>" /><br/>
	<?php echo $this->Html->link('Random Photo', '/', array('class' => 'button')); ?>
</div>

