<header>
  	<div class="parallax-container valign-wrapper">
      <div class="container"> 
          <div class="row center">
            <h2 class="header col s12 light" style="color:#ffffff;text-shadow:0 0 3px #333">List of all Recipes </h2>
          </div>
        <div class="parallax"><?= $this->Html->image('4.jpg'); ?></div>  
      </div>
    </div>
</header>
<div class="row">
<?php foreach($posts as $post) { ?>
  <div class="col s12 m4 l4">
  <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title"><?= $this->Html->link($post['title'],'/recipe/'.$post['id']); ?></span>
        <p><?= $this->Text->truncate($post['body'],200); ?></p>
      </div>
      <div class="card-action">
        <?= $this->Html->link('Read More','/recipe/'.$post['id']); ?>
        <?= $this->Html->link('Posted : '.$post['created'],'',['class'=>'right hide-on-med-only']); ?>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<div class="gap-20"></div>
<div class="center">
    <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
    <li class="active red darken-1"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!">6</a></li>
    <li class="waves-effect"><a href="#!">7</a></li>
    <li class="waves-effect"><a href="#!">8</a></li>
    <li class="waves-effect"><a href="#!">9</a></li>
    <li class="waves-effect"><a href="#!"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
  </ul>
</div>
