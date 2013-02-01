
 <?php get_header();?>
 <div class="content_block">
  <div class="left_column">
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- post -->
   <div class="post_block">
    <div class="date"><?php the_time('F'); ?>
    	<strong><?php the_time('j');?></strong><?php the_time('Y');?>
    </div>
    <div class="img"><a href="#">
    	<img src="<?php bloginfo(template_url); ?>/library/images/blog/img8.jpg" alt="" />
    </a></div>
    <h4><?php the_title();?></h4>
    <p><?php the_content(); ?></p>
    <div class="stat"><span><?php the_author() ?></span><span class="talk">70</span><span class="eye">117</span><span class="heart">25</span><a href="<?php the_permalink();?>">Read More</a></div>
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