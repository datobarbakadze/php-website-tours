<?php 
/**
* 
*/
class bg_img
{
	
	function list_pages()
	{
		$query = mysql_query("SELECT * FROM pages") or die("Can't connect");
		while ($fetch = mysql_fetch_array($query)) {
			$page = $fetch['page_name'];
			echo "

				<form action=\"/admin/ajax.php/?func=bg_image\" method=\"POST\" enctype=\"multipart/form-data\">
				&nbsp;&nbsp;&nbsp;&nbsp;$page &nbsp;&nbsp;&nbsp;&nbsp;
			 		<input type=\"hidden\" name=\"page\" value=\"$page\">
			 		<input type=\"file\" name=\"file\">
			 		<input type=\"submit\" name=\"add_page\">
			 	</form>
			";
		}
	}
}
$bg_img = new bg_img();
 ?>

 <div class="container">
 	<?php $bg_img->list_pages() ?>
 </div>