<?php 
/**
*Template name: Home Template
*/
?>
<?php
////
$arguments = array('post_type' => 'project');
$projects_query = new WP_Query($arguments);
?>

<section class="home-banner">
<?php //always start your WP Loop?>
<?php while (have_posts()) :?>
    <?php the_post();?>
    <?php //can use this for my banner image ?>
    <?php //the featured image attatched to LL POSTS/ pages are rendered using the_post_thumbnail function ?> 
    <?php the_post_thumbnail();?>
    <?php  /// the content in the WYSIWYG Editor?>
    <?php the_content();?>
<?php endwhile;?>

</section>

<?php
    if ( $projects_query->have_posts() ): ?>
    <?php while ( $projects_query->have_posts() ): ?>
        <?php $projects_query->the_post(); ?>
        <h1> <?php the_field('client');?></h1> 
        <h2><?php the_field('project_name'); ?></h2>
        <img src="<?php the_field ('thumbnail');?>" />
        <?php if (have_rows('tech_stack') ): ?> 
            <?php while ( have_rows ('tech_stack')): ?>
                <?php the_row();?>
                   <p> <?php the_sub_field('languages'); ?> </p>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile;?>
<?php endif; ?>



<!-- <?php

// check if the repeater field has rows of data
if( have_rows('repeater_field_name') ):

 	// loop through the rows of data
    while ( have_rows('repeater_field_name') ) : the_row();

        // display a sub field value
        the_sub_field('sub_field_name');

    endwhile;

else :

    // no rows found

endif;

?>
 -->













<!-- <?php 
///* echo renders html onto the page inside php
echo'<h1>Here is html inside php </h1> ';

?>

<h1>Here is my html outside php</h1>

<section class="banner">
    <?php the_post_thumbnail();?>
</section>

<h2> welcome to my portfolio</h2> -->