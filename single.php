<?php get_header(); ?>
 
 <div class="content_block">
  <div class="left_column">
   <!-- post -->
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <div class="post_block">
    <div class="date"><?php the_time('F'); ?><strong><?php the_time('j');?></strong><?php the_time('Y');?></div>
    <div class="img"><a href="#"><img src="<?php bloginfo(template_url); ?>/library/images/blog/img8.jpg" alt="" /></a></div>
    <h3><?php the_title();?></h3>
    <p><?php the_content(); ?></p>
    <div class="stat"><span>rohit</span><span class="talk">70</span><span class="eye">117</span><span class="heart">25</span></div>
   </div>
   <!-- /post -->
   <!-- RECENT COMMENTS -->
   <div class="recent_comment">
    <h3>RECENT COMMENTS</h3>
    <ul>
     <li>
      <div class="avatar"><img src="images/avatar.jpg" alt="" /></div>
      <div class="desc">
       <div class="author">John Doe</div>
       <div class="date">1 June 2012 | at 2:00 pm</div>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dolor eros, suscipit necer interdum ut, semper pulvinar tortor. Fusce id enim sapien, non lacinia urna.</p>
       <div class="reply"><a href="#">REPLY</a></div>
      </div>
      <ul>
	     <li>
	      <div class="avatar"><img src="images/avatar.jpg" alt="" /></div>
	      <div class="desc">
	       <div class="author">John Doe</div>
	       <div class="date">1 June 2012 | at 2:00 pm</div>
	       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dolor eros, suscipit necer interdum ut, semper pulvinar tortor. Fusce id enim sapien, non lacinia urna.</p>
	       <div class="reply"><a href="#">REPLY</a></div>
	      </div>
	     </li>
      </ul>
     </li>
    </ul>
   </div>
   <?php endwhile; else: ?> <p><?php _e('Sorry, this page does not exist.'); ?></p> 
   <?php endif; ?>
   <!-- /RECENT COMMENTS -->
   <!-- LEAVE A COMMENT -->
   <div class="leave_comment">
    <h3>leave a comment</h3>
    <form method="post" action="#">
     <p><input type="text" value="Name" id="name2" /><input type="text" value="E-mail" id="email2" /></p>
     <p><textarea id="message2">Comments</textarea></p>
     <p class="submit"><button>Submit</button></p>
    </form>
   </div>
   <!-- /LEAVE A COMMENT -->
  </div>
  <?php get_sidebar(); ?>
 </div>
 
</div>

<?php get_footer();?>