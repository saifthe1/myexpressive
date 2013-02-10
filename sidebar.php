<aside class="right_column">
   <!-- CATEGORIES -->
   <div class="cat_list">
    <h3><span>Categories</span></h3>
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
   <div class="other_list">
    <h3><span>Older Posts</span></h3>
    <ul>
<!--      <li><a href="#">January</a></li> -->
<!--      <li><a href="#">February</a></li> -->
<!--      <li><a href="#">March</a></li> -->
<!--      <li><a href="#">April</a></li> -->
<!--      <li><a href="#">May</a></li> -->
<!--      <li><a href="#">June</a></li> -->
<!--      <li><a href="#">July</a></li> -->
<!--     </ul> -->
    <?php 
    					wp_get_archives( array( 
								'type' => 'alpha', 
    							'limit' => 10, 
    							'format' => 'custom',
    							'echo' => 1,
    							'before' => '<li>',
    							'after' => '</li>') 
    					); 
    ?>
    </ul>
   </div>
   <!-- /ARCHIVES -->
  
  </aside>