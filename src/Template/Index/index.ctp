<header>
    <div class="slider">
    <ul class="slides">
      <li>
        <?= $this->Html->image('9.jpg'); ?>
        <div class="caption center-align">
          <h2>RecipeJaar</h2>
          <h4 class="light grey-text text-lighten-3">A Jaar full of Surprises &amp; Happiness!</h4>
        </div>
      </li>
      <li>
        <?= $this->Html->image('5.jpg'); ?>
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <?= $this->Html->image('8.jpg'); ?>
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <?= $this->Html->image('6.jpg'); ?>
        <div class="caption left-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
</header>
<section>
    <!-- <div class="gap-50"></div> -->
    <div class="row">
      <div class="col s12 m12 l3 offset-l1">
    <ul class="collection with-header">
          <li class="collection-header"><h4 class="color">Most Loved Recipe</h4></li>
          <?php $i=0; foreach($posts as $post) { $i++; ?>
              <li class="collection-item"><?= $this->Html->link($post['title'],'/recipe/'.$post['id']); ?></li>
          <?php if($i == 10) break; } ?>
        </ul>
      </div>
      <div class="col s12 m12 l7 ">
        <div class="row">
          <div class="col s12 m12 l12">
            
          <?php $i=0; foreach($posts as $post) { $i++; ?>

            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title color"><?= $this->Html->link($post['title'],'/recipe/'.$post['id']); ?></span>
                <p><?= $this->Text->truncate($post['body'],200); ?></p>
              </div>
              <div class="card-action">
                <?= $this->Html->link('Read More','/recipe/'.$post['id']); ?>
                <?= $this->Html->link('Posted : '.$post['created'],'',['class'=>'right']); ?>
              </div>
            </div>

          <?php if($i == 5) break; } ?>

          </div>
        </div>
        </div>
    </div>
</section>