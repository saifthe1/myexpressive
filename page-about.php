<?php get_header();?> 
 <div class="content_block">
  <!-- about -->
  <div class="about_block">
   <div><img src="<?php bloginfo(template_url);?>/library/images/img4.jpg" alt="" /></div>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?> 
	<p><?php _e('Sorry, this page does not exist.'); ?></p> 
<?php endif; ?>
  </div>
  
  <!-- /about -->
  <!-- team -->
  
 </div>
 
</div>

<?php get_footer();?>