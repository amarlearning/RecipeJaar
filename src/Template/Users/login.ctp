<div class="index large-4 large-offset-4 medium-4 medium-offset-4 coloums">
	<div style="width: 100%;height: 100px"></div>
	<div class="panel">
		<h3 style="text-align: center;">Login Form</h3>
		<?= $this->Form->create(); ?>
		<?= $this->Form->input('email'); ?>
		<?= $this->Form->input('password', array('type'=>'password')); ?>
		<?= $this->Form->submit('Submit', array('class'=>'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>