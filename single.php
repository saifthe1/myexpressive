<?php get_header(); ?>
 
 <div class="content_block">
  <div class="left_column">
   <!-- post -->
   <?php 
   $comments = get_comments('post_id='.$post->ID);
   	if ( have_posts() ) : while ( have_posts() ) : the_post();
   ?>

   <div class="post_block">
    <div class="date"><?php the_time('F'); ?><strong><?php the_time('j');?></strong><?php the_time('Y');?></div>    
    <h1><?php the_title();?></h1>
    <div class="tagsdiv"><?php the_tags('<p class="tagslist">',' ','</p>'); ?></div>
    <div class="stat">
    	<span><?php the_author();?></span>
    	<span class="talk"><a href="#comment-block" class="commentclick" title="see comments"><?php echo count($comments);?></a></span>
    </div>     
    <p><?php the_content(); ?></p>
    
   </div>
   <!-- /post -->
   <?php endwhile; else: ?> <p><?php _e('Sorry, this page does not exist.'); ?></p> 
   <?php endif; ?>
	
	<!-- call to comments file -->
	<?php comments_template(); ?>
  </div>
  <?php get_sidebar(); ?>
 </div>
 
</div>

<?php get_footer();?>