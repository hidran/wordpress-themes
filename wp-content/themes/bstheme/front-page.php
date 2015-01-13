<?php get_header();?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          <?php
            $conditions = array(
                'post_type'=>'post',
                'category_name'=>'imagenes'
          
            );
          $q = new WP_Query($conditions);
            
          ?>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                 <?php if(have_posts()) {
                     while(have_posts()){
                         the_post();
                   
                     ?>
                     <li data - target = "#carousel-example-generic" active="<?=$q->current_post==0?'active':''?>" data-slide-to ="<?= $q->current_post?>" ></li >
                 <?php
                     }  
                }       
                 ?>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
                <?php rewind_posts();?>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <?php if(have_posts()) {
                      while(have_posts()){
                          the_post();

                          ?>
                          <li data - target = "#carousel-example-generic" active="<?=$q->current_post==0?'active':''?>" data-slide-to ="<?= $q->current_post?>" ></li >
                      <?php
                      }
                  }
                  ?>
                  <div class="item <?=$q->current_post==0?'active':''?>">
                      <img src="..." alt="...">
                      <div class="carousel-caption">
                          ...
                      </div>
                  </div>
                  <div class="item">
                      <img src="..." alt="...">
                      <div class="carousel-caption">
                          ...
                      </div>
                  </div>
                  ...
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          <?php
         if(have_posts()){
              while(have_posts()){
                  the_post();
                  the_content();
              }
          }
          ?>
       </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
            <?php
            if( dynamic_sidebar('frontleft'));
            ?>
          </div>
        <div class="col-md-4">
            <?php
            if( dynamic_sidebar('frontcenter'));
            ?>      </div>
        <div class="col-md-4">
            <?php
            if( dynamic_sidebar('frontright'));
            ?>       </div>
      </div>

     <? get_footer();?>