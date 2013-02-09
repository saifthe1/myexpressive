<aside class="right_column">
   <!-- CATEGORIES -->
   <div class="cat_list">
    <h3><span>Categories</span></h3>
<!--     <ul> -->
<!--      <li><a href="#">Web Design</a></li> -->
<!--      <li class="web-development active"><a href="#">Development</a></li> -->
<!--      <li class="link-building"><a href="#">Link Building</a></li> -->
<!--      <li class="optimization"><a href="#">Optimization</a></li> -->
<!--      <li class="photography"><a href="#">Photography</a></li> -->
<!--      <li class="graphic-design"><a href="#">Graphic Design</a></li> -->
<!--      <li class="illustration"><a href="#">Illustration</a></li> -->
<!--     </ul> -->
    <ul>
    <?php 
    $categories = get_categories();
    foreach($categories as $category) {
    	echo '<li class="'.strtolower($category->name).'">
    		<a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a>
     		</li>';
    }
    
    ?>
    </ul>
   </div>
   <!-- /CATEGORIES -->
   <!-- ARCHIVES -->
   <div class="arch_list">
    <h3><span>Archives</span></h3>
    <ul>
     <li><a href="#">January</a></li>
     <li><a href="#">February</a></li>
     <li><a href="#">March</a></li>
     <li><a href="#">April</a></li>
     <li><a href="#">May</a></li>
     <li><a href="#">June</a></li>
     <li><a href="#">July</a></li>
    </ul>
   </div>
   <!-- /ARCHIVES -->
  
  </aside>