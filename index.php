
 <?php get_header();?>
 <div class="content_block">
  <div class="left_column">
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- post -->
   <div class="post_block">
    <div class="date"><?php the_time('F'); ?>
    	<strong><?php the_time('j');?></strong><?php the_time('Y');?>
    </div>
    
    <h1><?php the_title();?></h1>
    <div class="stat"><span><?php the_author() ?></span>
	    <span class="talk">
	    <?php
	    $count = get_comments('post_id='.$post->ID);
	    echo count($count);
	    unset($count);
	    ?>
	    </span>
    </div>
    <?php the_content('Read More...');
	?>
    
   </div>
   <!-- /post -->
  <?php endwhile; ?>

  <?php if (function_exists('bones_page_navi')) { ?>
					            <?php bones_page_navi(); ?>
					        <?php } else { ?>
					             <div class="nav">
    <span>&nbsp;</span><a class="lposts" href="#">Newer Posts</a><a href="#">Older Posts</a>
   </div>
					        <?php } ?>		
  
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

   
  </div>
    <?php get_sidebar();?>
 </div>
 
</div>
<?php get_footer();?>