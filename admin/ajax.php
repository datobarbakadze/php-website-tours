<?php 
session_start();
require "../libs/connect.php";
require "../libs/image.php";
header('Content-Type: text/html; charset=utf-8');
if(!isset($_SESSION['username']) or !isset($_GET['func'])){
	header('Location: /admin/');
}else{
$func = mysql_real_escape_string($_GET['func']);

		class ajax extends Image{
			function add_price(){
				if ($_POST['quantity'] && $_POST['price'] && $_POST['id']) {
					$quantity = $_POST['quantity'];
					$price = $_POST['price'];
					$id = $_POST['id'];
					$query = mysql_query("INSERT INTO prices VALUES('','$id', '$quantity', '$price')") or die("Can't cnonect");
					echo "success";
				}else
					echo "fail";
				
			}
			function cool_fun(){

				//map image file
				
				if(isset($_FILES['file']) && isset($_FILES['file1'])){
					$file = $_FILES['file'];
				
					$tmp = $file['tmp_name'];
					$name = $file['name'];
					$file_name = str_shuffle("qwertyuiopasdfghj123456");
					$type = substr($file['type'], 6);
					$rand_num = rand(1,50000);
					$path = "../tour_images/".$file_name."_".$rand_num.".".$type;
					move_uploaded_file($tmp,$path);
					$fullname = $file_name."_".$rand_num.".".$type;

					//main image file
					$file_m = $_FILES['file1'];
					$tmp_m = $file_m['tmp_name'];
					$name_m = $file_m['name'];
					$file_name_m = str_shuffle("qwertyuiopasdfghj123456");
					$type_m = substr($file_m['type'], 6);
					$rand_num_m = rand(1,50000);
					$path_m = "../tour_images/".$file_name_m."_".$rand_num_m.".".$type_m;
					$fullname_m = $file_name_m."_".$rand_num_m.".".$type_m;
					move_uploaded_file($tmp_m,$path_m);


					/* strings */
					$title = mysql_real_escape_string($_POST['title']);
					$description = mysql_real_escape_string($_POST['description']);
					$start_place = mysql_real_escape_string($_POST['start_place']);
					$end_place = mysql_real_escape_string($_POST['end_place']);
					$level = mysql_real_escape_string($_POST['level']);
					$places = mysql_real_escape_string($_POST['places']);
					$cost = mysql_real_escape_string($_POST['cost']);
					$duration_day = mysql_real_escape_string($_POST['duration_day']);
					$duration_hr = mysql_real_escape_string($_POST['duration_hr']);
					$hiking = mysql_real_escape_string($_POST['hiking']);
					$camping = mysql_real_escape_string($_POST['camping']);
					$climbing = mysql_real_escape_string($_POST['climbing']);
					$meals = mysql_real_escape_string($_POST['meals']);
					$transport = mysql_real_escape_string($_POST['transport']);
					$accomodation = mysql_real_escape_string($_POST['accomodation']);
					mysql_query("INSERT INTO tour VALUES('','$title',
						'$description',
						'$start_place',
						'$end_place',
						'$places',
						'$cost',
						'$level',
						'$duration_day',
						'$duration_hr',
						'$fullname_m',
						'$fullname'
					)") OR die("Can't connect");
					$last_id =  mysql_insert_id();
					mysql_query("INSERT INTO on_activity VALUES('$hiking','$camping','$climbing','$last_id')") or die("Can't connect");
					mysql_query("INSERT INTO on_inclusion VALUES('$meals','$transport','$accomodation','$last_id')") or die("Can't connect");
					echo "success";
				}else
					echo "fail";
			}
			//updating lang variables
			function update_lang(){
				$id = mysql_real_escape_string($_POST['id']);
				$word = mysql_real_escape_string($_POST['word']);
				$query = mysql_query("UPDATE lang SET word='$word' WHERE id='$id'") or die("Cant connect");
				if($query){
					echo "success";
				}

			}
			
			//inserting lang variables
			function insert_lang(){
				$lang = mysql_real_escape_string($_POST['lang']);
				$word = mysql_real_escape_string($_POST['word']);
				$query = mysql_query("INSERT INTO lang VALUES('', '$lang', '$word')") or die(mysql_error());
				if($query){
					echo "success";
				}

			}
			//update product
			function updateprod(){
				if($_POST['id']){
					$id = (int) mysql_real_escape_string($_POST['id']);
					$cost = (int) mysql_real_escape_string($_POST['cost']);
					$kal = (int) mysql_real_escape_string($_POST['kal']);
					$desc = mysql_real_escape_string($_POST['desc']);

					mysql_query("UPDATE prduct SET cost='$cost',
						kal='$kal',
						description	= '$desc'
						WHERE id='$id'
						") or die(mysql_error());
					echo "success";
				}else
					echo "შეცდომა დაუკავშირდით დეველოპერს";
			}

			//updating page title and the description
			function submit_page(){
				if($_POST['id'] && !empty($_POST['title']) && !empty($_POST['desc'])){

					$id = (int) mysql_real_escape_string($_POST['id']);
					$title = mysql_real_escape_string($_POST['title']);
					$desc = mysql_real_escape_string($_POST['desc']);
					mysql_query("UPDATE pages SET page_title='$title',
						page_description='$desc'
						WHERE id='$id'
						") or die(mysql_error());
					echo "success";
				}
			}

			//update review
			function add_comment(){
				$file = $_FILES['file'];
				$desc = $_REQUEST['comm_desc'];
				$tmp = $file['tmp_name'];
				$name = $file['name'];
				$file_name = str_shuffle("qwertyuiopasdfghj123456");
				$type = substr($file['type'], 6);
				$rand_num = rand(1,50000);
				$path = "../images/".$file_name."_".$rand_num.".".$type;
				$full_file_name = $file_name."_".$rand_num.".".$type;
				$thumbpath = "../comment_image/";
				move_uploaded_file($tmp,$path);
				$this->createThumb($path, $thumbpath, FALSE, 400, 400, false, $quality = 72);
				unlink($path);
				$insert = mysql_query("INSERT INTO reviews VALUES('','$desc','$full_file_name')") or die("Can't connect");
				echo "success";
			}
			//add image
			function add_image(){
				$xhr = $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'; 
				$day = $_REQUEST['day'];
				$menu = $_REQUEST['menu'];
				$file = $_FILES['image'];
				$tmp = $file['tmp_name'];
				$name = $file['name'];
				$file_name = str_shuffle("qwertyuiopasdfghj123456");
				$type = substr($file['type'], 6);
				$rand_num = rand(1,50000);
				$full_file_name = $file_name."_".$rand_num.".".$type;
				$path = "../images/".$full_file_name;
				move_uploaded_file($tmp,$path);
				
				$thumbpath = "../day_thumbs/";
				$inner_thumb = "../day_images/";
				$this->createThumb($path, $thumbpath, FALSE, 400, 400, false, $quality = 72);
				$this->createThumb($path, $inner_thumb, FALSE, 1280, 720, false, $quality = 72);
				unlink($path);
				$insert = mysql_query("INSERT INTO images VALUES('','$full_file_name','$day','$menu')") or die("Can't connect");
				$query = mysql_query("SELECT * FROM images ORDER BY id DESC") or die("Can't connect");
				$fetch = mysql_fetch_array($query);
				$id=$fetch['id'];
				echo "success+".$full_file_name."+".$id;
			}
			function add_main(){
				if ($_POST['add_main']) {
					$menu = mysql_real_escape_string($_POST['menu']);
					$path = "../images/";
					$file_name = str_shuffle("qwertyuiopasdfghj123456");
					$inner_thumb = "../product_image/";
				    $path = $path . $file_name ."_".basename( $_FILES['file']['name']);
				    $full_name = $file_name ."_".basename( $_FILES['file']['name']);
				    if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
				      echo "The file ".  basename( $_FILES['file']['name']). 
				      " has been uploaded";
				      $this->createThumb($path, $inner_thumb, FALSE, 1280, 720, false, $quality = 72);
				      unlink($path);
				      mysql_query("UPDATE prduct SET main_image='$full_name' WHERE name='$menu'") or die("can't connect");
				      header("Location: /admin/product");
				    } else{
				        echo "There was an error uploading the file, please try again!";
				    }
				    
				}
				    
			}

			function bg_image(){
				if ($_POST['add_page']) {
					$page = mysql_real_escape_string($_POST['page']);
					$path = "../bg_image/";
					$file_name = str_shuffle("qwertyuiopasdfghj123456");
				    $path = $path . $file_name ."_".basename( $_FILES['file']['name']);
				    $full_name = $file_name ."_".basename( $_FILES['file']['name']);
				    if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
				      echo "The file ".  basename( $_FILES['file']['name']). 
				      " has been uploaded";
				      mysql_query("UPDATE pages SET image='$full_name' WHERE page_name='$page'") or die("can't connect");
				      header("Location: /admin/bg_img");
				    } else{
				        echo "There was an error uploading the file, please try again!";
				    }
				    
				}
			}
			function delete_image(){
				$id=(int) mysql_real_escape_string($_POST['id']);
				$query = mysql_query("SELECT * FROM images WHERE id='$id'") or die("cant connect");
				$fetch = mysql_fetch_array($query);
				$image = $fetch['image'];
				unlink("../day_thumbs/".$image);
				unlink("../day_images/".$image);
				mysql_query("DELETE FROM images WHERE id='$id'") or die("Can't connect");
				echo "success";
			}

			//update review
			function delete_coment(){
				if(isset($_REQUEST['id'])){

					$id = (int) mysql_real_escape_string($_REQUEST['id']);
					$query = mysql_query("SELECT * FROM reviews WHERE id='$id'") or die("Cant connect");
					$fetch = mysql_fetch_array($query);
					$image = $fetch['image'];
					if(unlink("../comment_image/".$image)){}
					mysql_query("DELETE FROM reviews WHERE id='$id' ") or die(mysql_error());
					echo "success";
				}
			}
		}

		$ajaxclass = new ajax();
		$ajaxclass->$func();
}
 ?>