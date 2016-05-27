<?php
$cakeDescription = 'RecipeJaar : Jaar full of Suprise & Happiness';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'); ?>
    <?php if($var) : ?>
        <?= $this->Html->css('materialize.css') ?>
        <?= $this->Html->css('main.css') ?>
    <?php else :?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?php endif; ?>
    
    <?= $this->Html->script('jquery.min.js'); ?>
    <?= $this->Html->script('materialize.js'); ?>
    <?= $this->Html->script('script.js'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
<?php if($var) : ?>
<!-- materialize work -->

   <nav class="red darken-2">
    <div class="nav-wrapper container red darken-2">
      <a href="/" class="brand-logo hide-on-med-and-down">RecipeJaar</a>
      <a href="/" class="brand-logo hide-on-large-only center">RecipeJaar</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">Menu</a>
      <ul class="right hide-on-med-and-down">
        <li><?= $this->Html->link('Home', '/') ?></li>
        <li><?= $this->Html->link('About', '/about') ?></li>
        <li><?= $this->Html->link('Recipes', '/recipe') ?></li>
        <li><?= $this->Html->link('Kitchen', '/') ?></li>
        <li><?= $this->Html->link('Contact', '/contact') ?></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li style="color:#000" class="collection-header center"><h4>Menu</h4></li>
        <li><?= $this->Html->link('Home', '/') ?></li>
        <li><?= $this->Html->link('About', '/about') ?></li>
        <li><?= $this->Html->link('Recipes', '/recipe') ?></li>
        <li><?= $this->Html->link('Kitchen', '/') ?></li>
        <li><?= $this->Html->link('Contact', '/contact') ?></li>
      </ul>
    </div>
  </nav>

<?php else : ?>
    <?php if($loggedIn) : ?>
        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1><?= $this->Html->link('RecipeJaar', '/') ?></h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right">    
                    <?php if($loggedIn) : ?>
                    <li><?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']); ?></li>
                    <?php else : ?>
                    <li><?= $this->Html->link('Register', ['controller' => 'Users', 'action' => '']); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    <?php else : ?>       
        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1><?= $this->Html->link('RecipeJaar','/') ?></h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right">
                </ul>
            </div>
        </nav>
    <?php endif; ?> 
<?php endif; ?>
    

    <?php if($var) : ?>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    <?php else : ?> 
        <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <?php endif; ?>

    <?php if($var) : ?>
        <footer class="page-footer red darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">RecipeJaar</h5>
                <p class="grey-text text-lighten-4">A Jar full of Suprises &amp; Happiness!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Say Hi!</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Google+</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Copyright (c) 2016 <?= $this->Html->link('RecipeJaar','/users'); ?> All Rights Reserved.
            <span class="right">Made with <span style="color: #e74c3c">&hearts;</span> in India</span>
            </div>
          </div>
        </footer>
    <?php endif; ?>

</body>
</html>




