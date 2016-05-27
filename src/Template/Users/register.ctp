<div class="index large-4 medium-4 large-offset-4 medium-offset-4 coloums">
	<div style="height:50px;width:100%"></div>	
	<div class="panel">
		<h3>Registration Form</h3>
		<?= $this->Form->create($user); ?>
		<?= $this->Form->input('name'); ?>
		<?= $this->Form->input('email'); ?>
		<?= $this->Form->input('password', array('type'=>'password')); ?>
		<?= $this->Form->submit('Register',array('class'=>'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>