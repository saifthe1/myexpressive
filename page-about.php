<?php get_header();?> 
 <div class="content_block">
  <!-- about -->
  <div class="left_column_about about_block">
   
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?> 
	<p><?php _e('Sorry, this page does not exist.'); ?></p> 
<?php endif; ?>
  </div>
  <aside class="right_column_about">
  <div></div>
  </aside>
  
  <!-- /about -->
  <!-- team -->
  
 </div>
 
</div>

<?php get_footer();?>