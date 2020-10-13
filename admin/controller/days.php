<?php 
/**
* 
*/
class days extends Image
{
	function check_it(){
		if(isset($_GET['aurl'])){
		$url = mysql_real_escape_string($_GET['aurl']);
		$url = rtrim($url, '/');
		$url = explode('/', $url);

			if(isset($url[1])){
			}else{
				header("Location: /admin");
			}
		}
	}
	function list_it()
	{
		$url = mysql_real_escape_string($_GET['aurl']);
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		$menu = $url[1];
		$query = mysql_query("SELECT * FROM days") or die("Can't connect");
		while ($fetch = mysql_fetch_array($query)) {
			$day = $fetch['day'];
			$id = $fetch['id'];
			echo "
				<h3 class=\"high_font day_title\">$day</h3>
			 	<div class=\"images_container\" id=\"day_$id\">
			 	";

			 	$image_query = mysql_query("SELECT * FROM images WHERE menu='$menu' AND day='$id'") or die(mysql_errno());
			 	while($image_fetch = mysql_fetch_array($image_query)){
			 		$image = $image_fetch['image'];
			 		$fid = $image_fetch['id'];
			 		echo "
			 				<div class=\"image_day\" id=\"image_$fid\" style=\"background-image:url('../day_thumbs/$image');\">
					 			<div class=\"delete_day_image\" id=\"$fid\">წაშლა</div>
					 		</div>
			 		";
			 	}

			 	echo "
			 	</div>
			 	<form class=\"day_form\" id=\"day_form_$id\" action=\"/admin/ajax.php/?func=add_image\" method=\"post\" enctype=\"multipart/form-data\">
			 	<input type=\"hidden\" name=\"params\">
			 		<div for=\"day_img\" class=\"label_day low_font\">
			 		<input type=\"file\" name=\"image\" id=\"".$id."_".$menu."\" class=\"day_img\" >
			 		აირჩიე ფაილი</div>
			 		<div class=\"progress\">
					    <div class=\"bar\" id=\"bar_$id\"><div class=\"percent\" id=\"percent_$id\">0%</div ></div >
					    
					</div>
					<div class=\"status\"></div>
			 	</form>
			";
		}
	}
	function add_main(){
		$url = mysql_real_escape_string($_GET['aurl']);
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		$menu = $url[1];
		echo "
				<form action=\"/admin/ajax.php/?func=add_main\" method=\"POST\" enctype=\"multipart/form-data\">
			 		<input type=\"hidden\" name=\"menu\" value=\"$menu\">
			 		<input type=\"file\" name=\"file\">
			 		<input type=\"submit\" name=\"add_main\">
			 	</form>
		";
	}
}
$day = new days();
$day->check_it();
 ?>
 <div class="container">
 	<?php $day->add_main(); ?>
 	<?php $day->list_it(); ?>





 </div>