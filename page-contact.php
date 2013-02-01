<?php get_header();?> 
 <div class="content_block">
  <div class="contact_left">
   <!-- contact map -->
   <div class="contact_map">
    <h3>find us on map</h3>
    <p>Curabitur sapien neque, eleifend eget commodo varius, imperdiet vitae ante. Integer auctor tellus sed nibh sodales aliquam molestie non eros. Fusce sem nibh, fringilla sed commodo non, feugiat ut quam. Mauris convallis bibendum dui, at porttitor lectus accumsan et. Maecenas dignissim cursus iaculis.</p>
    <div class="map">
	 <!-- Google Maps Element Code -->
	 <iframe frameborder=0 marginwidth=0 marginheight=0 border=0 style="border:0;margin:0;width:100%;height:372px;" src="http://www.google.com/uds/modules/elements/mapselement/iframe.html?maptype=roadmap&f=q&latlng=38.884351954342684%2C-77.10668563842773&mlatlng=38.87997%2C-77.10677&maddress1=Arlington%2C%20VA&mtitle=Scripteers" scrolling="no" allowtransparency="true"></iframe>
	 <!-- /Google Maps Element Code -->
    </div>
   </div>
   <!-- /contact map -->
   <!-- contact form -->
   <div class="contact_form">
    <h3>send us a message</h3>
    <form method="post" action="#">
     <p>
     	<input type="text" value="Name" id="name2" name="txtname" />
     	<input type="text" value="E-mail" id="email2" name="txtemail" /></p>
     <p><textarea id="message2" name="txtcomment">Comments</textarea></p>
     <p class="submit"><button>Submit</button></p>
    </form>
   </div>
   <!-- /contact form -->
  </div>
  
  <div class="contact_right">
   <!-- contact info -->
   <div class="contact_info">
    <h3><span>contact info</span></h3>
    <ul>
     <li><a href="mailto:hello@saifmulla.com">hello@saifmulla.com</a></li>
    </ul>
   </div>
   <!-- /contact info -->
   <!-- DROP US A LINE -->
   <div class="drop_line">
    <h3><span>drop us a line</span></h3>
    <p>Curabitur sapien neque, eleifend eget commodo varius, imperdiet vitae ante. Integer auctor tellus sed nibh sodales aliquam molestie non eros. Fusce sem nibh, fringilla sed commodo non, feugiat ut quam. Mauris convallis bibendum dui, at porttitor lectus accumsan et. Maecenas dignissim cursus iaculis.</p>
   </div>
   <!-- /DROP US A LINE -->
  </div>
 </div>
 
</div>

<?php get_footer();?>