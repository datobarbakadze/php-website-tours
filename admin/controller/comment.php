<?php 
/**
*  user review class adding and removing
*/
class comment extends Image
{
	
	function list_comment()
	{
		$query = mysql_query("SELECT * FROM reviews ORDER BY id DESC") or die("can't connect");
		while ($fetch = mysql_fetch_array($query)) {
			$id = $fetch['id'];
			$image = $fetch['image'];
			$comment = $fetch['comment'];
			echo "
				<div class=\"comment_cont\" id=\"fullcoment_$id\">
			 		<img src=\"/comment_image/$image\" width=\"150px\" height=\"150px\" class=\"comment_image\">
			 		<form id=\"update_comment_form\">
	 						<input type=\"hidden\" name=\"id\" value=\"$id\">
							<input type=\"submit\" value=\"წაშლა\" id=\"comment_$id\" class=\"updatecomment high_font\">
					</form>
			 	</div>
			 	";
		}
	}
}
$comment = new comment();
 ?>

 <div class="container">
 	<div style="overflow:auto;">
 	<?php $comment->list_comment(); ?>
</div>
<h2 class="add_com_title">დაამატეთ კომენტარი</h2>
 	<div class="add_comment_cont">
 		
 		
 		<form id="comment_form" action="/admin/ajax.php/?func=add_comment" enctype="multipart/form-data" method="post">
 			
 			<input type="file" name="file" id="file" class="comfile" onchange="readURL(this);">
 			
 			<label class="add_image" for="file">+</label>
			<textarea style="margin-top:230px;" name="comm_desc" class="prod_text" maxlength="280" placeholder="აღწერა"></textarea>
			<input type="submit" value="დამატება" class="addcomment high_font">
		</form>
 	</div>

 </div>