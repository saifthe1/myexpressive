<div class="footer">
 <footer>
 
 <!-- FLICKR STREAM -->
  <div class="flickr">
   <h3>flickr stream</h3>
   <ul>
    <li><a href="#"><img src="images/flickr/img.jpg" alt="" /></a></li>
    <li><a href="#"><img src="images/flickr/img2.jpg" alt="" /></a></li>
    <li><a href="#"><img src="images/flickr/img3.jpg" alt="" /></a></li>
    <li><a href="#"><img src="images/flickr/img.jpg" alt="" /></a></li>
    <li><a href="#"><img src="images/flickr/img2.jpg" alt="" /></a></li>
    <li><a href="#"><img src="images/flickr/img3.jpg" alt="" /></a></li>
   </ul>
  </div>
 <!-- /FLICKR STREAM -->
  
 <!-- LATEST TWEETS -->
  <div class="tweets">
   <h3>latest tweets</h3>
   <ul>
    <li><a href="#">@ John Doe</a> Integer nec est semper metus ultricies ndumit itae. <em><a href="#">3 days ago</a></em></li>
    <li><a href="#">@ John Doe</a> Integer nec est semper metus ultricies ndumit itae. <em><a href="#">5 days ago</a></em></li>
    <li><a href="#">@ John Doe</a> Integer nec est semper metus ultricies ndumit itae. <em><a href="#">7 days ago</a></em></li>
   </ul>
  </div>
 <!-- /LATEST TWEETS -->
 
 </footer>
</div>

<div class="copyright">
<div class="wraper">
  <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
  <nav>
  <!-- bottom menu -->
   <ul>
<!--     <li><a href="index.html">home</a></li> -->
<!--     <li><a href="about.html">about us</a></li> -->
<!--     <li><a href="portfolio.html">portfolio</a></li> -->
<!--     <li><a href="blog.html">blog</a></li> -->
<!--     <li><a href="contact.html">contact</a></li> -->
   <?php wp_page_menu(array( 'show_home' => 'Home', 'sort_column' => 'menu_order',
   'exclude' => '2','menu_class'  => '')); ?>
   </ul>
  <!-- /bottom menu -->
  </nav>
</div>
</body>
</html> 