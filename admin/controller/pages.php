<?php 
/**
* 
*/
class pages
{
	
	function get_pages()
	{
		$query = mysql_query("SELECT * FROM pages") or die("Can't connect");
		while($fetch = mysql_fetch_array($query)){
			$name = $fetch['page_name'];
			$title = $fetch['page_title'];
			$desc = $fetch['page_description'];
			$id = $fetch['id'];
			echo "
			<form>
				<div class=\"page_container\">
					<div class=\"title_show\"><a href=\"/$name\" target=\"_blank\"><b>$name</b></a></div>
			 		<input type=\"text\" name=\"title_$id\" placeholder=\"გვერდის სათაური \" class=\"inputing\" value=\"$title\">
			 		<textarea name=\"desc_$id\" class=\"inputing in_text\" placeholder=\"გვერდის აღწერა \">$desc</textarea>
			 		<div class=\"submit_page high_font articlelistupdate\" id=\"page_$id\">განახლება</div>
			 	</div>
			 	<br><br>
			</form>
			";
		};
	}

}
	$pages = new pages();
 ?>
 <div class="container">
 	
 	<?php $pages->get_pages(); ?>
 	
 </div>