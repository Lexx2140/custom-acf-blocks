<?php
/**
 * Block Name: Featured Business
 *
 * This is the template that displays the featured business block.
 */

 // create id attribute for specific styling
 $id = 'featured-business-' . $block['id'];

 // create align class ("alignwide") from block setting ("wide")
 $align_class = $block['align'] ? 'align' . $block['align'] : '';

 ?>
 <div id="<?php echo $id; ?>" class="testimonial <?php echo $align_class; ?>">
   <h3><?php the_field('block_title'); ?></h3>
   <?php $post_object = get_field('select_a_business'); ?>
   <?php $featured_img_url = get_the_post_thumbnail_url($post_object->ID,'full'); ?>

   <p><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo $post_object->post_title; ?></a></p>
   <?php

   if (get_field('display_featured_image') == 'Yes') {
     // code to run if the above is true
     ?>
     <p><a href="<?php get_permalink( $post_object ); ?>"><?php echo get_the_post_thumbnail( $post_object, 'thumbnail' ); ?></a></p>
     <?php
   } 
   ?>

 </div>
