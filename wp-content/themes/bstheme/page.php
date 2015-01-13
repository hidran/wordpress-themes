
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
                </div>
                <?php
                the_post_thumbnail('medium', array('class'=>'image-responsive'));
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
            <?php  get_sidebar();?>
      </div>


<?php
get_footer();
?>  