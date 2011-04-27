<?php //debug($photo) ?>
<div class="photos view">
<h2><?php  __('Photo');?></h2>
	<h2 class="imagetitle"><?php echo $photo[0]['Photo']['title']; ?></h2>
	<img src="<?php echo $photo[0]['Photo']['url']; ?>" /><br/>
	<?php echo $this->Html->link('Random Photo', '/', array('class' => 'button')); ?>
</div>

