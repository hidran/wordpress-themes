<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= wp_title('-', true, 'right').' '.bloginfo('name')?></title>



    
    <?php
    wp_head()
    ?>
  </head>

  <body>

  

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=bloginfo('url')?>"><?=bloginfo('name')?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
          $defaults = array(
           
              'menu'            => 'header-menu',
              'container'       => 'false',
              
              'menu_class'      => 'nav navbar-nav'
             
          );

          wp_nav_menu( $defaults );
          ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
