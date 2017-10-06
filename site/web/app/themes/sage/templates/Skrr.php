<?php
/**
* Template Name: Claps
*/
?>

<?php if (have_posts()) : ?>
    <h1>blah</h1>
    <?php while(have_posts()) : ?>
    <?php the_post();?>
    <?php endwhile;?>
<?php else : ?>
    <p>NOTHING FOUND</p>
<?php endif; ?>


<?php
