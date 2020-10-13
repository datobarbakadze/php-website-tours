<?php 
require "./libs/connect.php";

header('Content-Type: text/html; charset=utf-8');
if(!isset($_GET['func'])){
	header('Location: /');
}else{
	$func = mysql_real_escape_string($_GET['func']);
}
class ajax{
			function send_mail(){
				if($_POST['name'] && $_POST['email'] && $_POST['message']){
					$string = str_shuffle("123456789");
					$name = $_POST['name'];
					$email = $_POST['email'];
					$message = $_POST['message'];
					$header = array(
					'Content-type: text/html'
					);
					$msg = "<b>Client name: </b>".$name."<br><br><b>Client email: </b>".$email."<br><br><br><b>Client message:<br></b>".$message;
					$sentto = "firstfood01@gmail.com";
					$msg = wordwrap($msg,70);
					$subject = "MESSAGE #".$string;
					if(mail($sentto,$subject,$msg,implode("\r\n",$header))){
					     echo "Sent!";
					}else
					    echo "ERROR!";
					}else
					   echo "ERROR!";
			}

			function prod_email(){
				if($_POST['name'] && $_POST['privatenumber'] && $_POST['address'] && $_POST['last_name'] && $_POST['phone']){
					$string = str_shuffle("123456789");
					$name = $_POST['name'];
					$phone = $_POST['phone'];
					$privatenumber = $_POST['privatenumber'];
					$address = $_POST['address'];
					$menu = $_POST['menu'];
					$last_name = $_POST['last_name'];
					$header = array(
					'Content-type: text/html'
					);
					$msg = "<b style='font-size:30px;'>Menu - </b> <b style='font-size:30px;color:#b1c848;'>".$menu."</b><br><br><b>Client name: </b>".$name." ".$last_name."<br><br><b>Client private number: </b>".$privatenumber."<br><br><b>Client address: </b>".$address."<br><br><b>Client phone:<br></b>".$phone;
					$sentto = "firstfood01@gmail.com";
					$msg = wordwrap($msg,70);
					$subject = "ORDER #".$string;
					if(mail($sentto,$subject,$msg,implode("\r\n",$header))){
					     echo "Sent!";
					}else
					    echo "ERROR!";
					}else
					   echo "ERROR!";
			}

			function get_images(){
				if(isset($_POST['day'])){
					header('Content-Type: application/json');
					$day =(int) mysql_real_escape_string(htmlentities($_POST['day']));
					$menu = mysql_real_escape_string(htmlentities($_POST['menu']));

					$image_query = mysql_query("SELECT * FROM images WHERE day='$day' AND menu='$menu' ORDER BY id DESC") or die("Error!");
					$arr = [];
					while($image_fetch = mysql_fetch_assoc($image_query)){
						$name = $image_fetch['image'];
						array_push($arr, $name);
					}
					header('Content-Type: application/json');
					echo json_encode(array("images" => $arr));
				}else
					echo "Error!";
			}

			function calculate(){
				if($_POST['tour_id']){
					$q = (int) $_POST['q'];
					$id = (int) $_POST['tour_id'];
					$query = mysql_query("SELECT * FROM prices WHERE tour_id=$id AND quantity=$q") or die("Can't connect");
					$fetch = mysql_fetch_array($query);
					$price = $fetch['price'];
					echo $price;
				}else 
					echo "wrong";
			}
}

$ajaxclass = new ajax();
$ajaxclass->$func();
 ?>