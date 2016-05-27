<section>
	<div class="container">
	<div class="gap-50"></div>
		<div class="row">
        <div class="col s12 m12 l12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><h4><?php echo $result[0]['title']; ?></h4></span>
              <div class="gap-30"></div>
              <?= $this->Text->autoParagraph($result[0]['body']); ?>
            </div>
            <div class="card-action">
              	<div class="chip">
    				<?php echo 'Posted by '.$get[$result[0]['user_id']-1]['name'] ?>
  				</div>
              <?= $this->Html->link('Posted on : '.$result[0]['created'],'',['class'=>'right hide-on-small-only']); ?>
            </div>
          </div>
        </div>
      </div>
	</div>
</section>