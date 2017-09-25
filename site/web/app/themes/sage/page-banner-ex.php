<?php
/**
* Template Name: Example of Template
*/
?>

<?php
    if(have_posts()):?> 
    <?php while(have_posts()):?>
        <?php   the_post();?>
        <section class="banner-example">
        <?php ///shows title of page?>
            <?php the_title();?>
            <?php ///shows cpntent in WYSIWYG?>
            <?php the_title();?>

            <?php the_post_thumbnail();?>
        
        </section>
    <?php endwhile;?>
<?php endif; ?>

<?php colons replace bracket in php ?>