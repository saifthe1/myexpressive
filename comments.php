<!-- RECENT COMMENTS -->
   
<?php
	if(count($comments)>0)
	{ 
?>
<div class="recent_comment" id="comment-block">
<h3>RECENT COMMENTS</h3>

<ul>
<?php    
    foreach($comments as $comment) :
?>
<li>
<div class="avatar"><img src="<?php bloginfo(template_url);?>/library/images/avatar.jpg" alt="" /></div>
<div class="desc">
<div class="author"><?php echo $comment->comment_author; ?></div>
<div class="date"><?php
    $arr = explode(" ",$comment->comment_date);
    $datearr = explode("-",$arr[0]);
    echo date('j F Y',mktime(0,0,0,$datearr[1],$datearr[2],$datearr[0]));
    ?>
</div>
<p><?php echo $comment->comment_content; ?></p>
<div class="reply"></div>
</div>
</li>
<?php
endforeach;
?>
</ul>
</div>

   <!-- /RECENT COMMENTS -->
<?php
	} 
?>
   <!-- LEAVE A COMMENT -->
   <div class="leave_comment">
    <h3>leave a comment</h3>
    <form method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
     <p><input type="text" value="Name" id="name2" name="author" /><input type="text" value="E-mail" id="email2" name="email" /></p>
     <p><textarea id="message2" name="comment">Comments</textarea></p>
     <p class="submit"><button>Submit</button></p>
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
    </form>
   </div>
   <!-- /LEAVE A COMMENT -->