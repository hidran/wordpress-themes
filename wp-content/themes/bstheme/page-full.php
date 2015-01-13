<?php
/**
 * Template Name: Sin sidebar
 */
?>
<?php

get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              page-full
        <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                <div class="page-header">
                    <h1><?= the_title() ?></h1>
                </div>
                <?php
                the_content();
            }
        } else { ?>
            <div class="page-header">
                <h1>Falta contenido</h1>
            </div>
           
           
      <?php
        }
       
        ?>
             
        </div>
           
      </div>


<?php
get_footer();
?>  