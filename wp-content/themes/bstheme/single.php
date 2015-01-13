
<?php
get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                page
        <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                <div class="page-header">
                    <h1><?= the_title() ?></h1>
                    <p>
                        <em>
                        Scritto da :<?=the_author()?>
                        Fecha: <?=the_time('l j, F Y')?>
                        Categoria :<?=the_category(', ')?>
                        </em>
                    </p>
                </div>
                <?php
                the_post_thumbnail('medium', array('class'=>'image-responsive'));
                the_content();
                echo "<hr>";
                comments_template();
            }
        } else { ?>
            <div class="page-header">
                <h1>Falta contenido</h1>
            </div>
           
           
      <?php
        }
       
        ?>
             
        </div>
            <?php  get_sidebar('blog');?>
      </div>


<?php
get_footer();
?>  