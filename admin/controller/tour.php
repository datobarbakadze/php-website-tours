<?php 
/**
* 
*/
class tour
{
	
	function list_porduct()
	{
		$query = mysql_query("SELECT * FROM prduct") or die("can't connect");
		while ($fetch = mysql_fetch_array($query)) {
			$id = $fetch['id'];
			$name = $fetch['title'];
			$cost = $fetch['cost'];
			$kal = $fetch['kal'];
			$description = $fetch['description'];
			$image = $fetch['img'];
			echo "
				<div class=\"prod_cont\">
					<img src=\"/views/img/$image\" width=\"150px\" height=\"150px\" class=\"prod_image\">
					<form action=\"/ajax.php/?func=updateprod\">
						<div class=\"prod_title high_font\">$name</div>
						<a href=\"/admin/days/$name\" class=\"days high_font\">UPDATE TOUR</a>
					</form>
				</div>
			";
		}
	}

	function check_it()
    {
        if(isset($_GET['aurl'])){
        $url = mysql_real_escape_string($_GET['aurl']);
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        	if(!isset($url[1])){
        		$checker==0;
        	}elseif($url[1]=="add"){
                $checker=1;
            }elseif ($url[1]=="update") {
                $checker = 2;
            }elseif ($url[1]=="prices") {
            	$checker = 3;
            }else{
            	header('Location: /admin');
            }

            return $checker;
        }
    }
    public function get_id(){
    	$url = mysql_real_escape_string($_GET['aurl']);
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        echo $url[2];
    }

    public function get_tours(){
    	$query = mysql_query("SELECT * FROM tour") or die("Can't connect");
    	$a=1;
    	while ($fetch = mysql_fetch_array($query)) {
    		$title = substr($fetch['top_title'],0,25)."...";
    		$id = $fetch['id'];
    		echo "
    			<table class=\"list_cont\">
    				<tr>
    					<th>$a.</th>
						<th><span class=\"tour_title low_font\">$title</span></th>
						<th><a href=\"/admin/tour/prices/$id\" class=\"update_tour articlelistupdate high_font\" style=\"background-color:orange;\" id=\"$id\">PRICES</a></th>
						<th><a class=\"update_tour articlelistupdate high_font\" id=\"$id\">UPDATE</a></th>
						<th><a class=\"delete_tour articlelistdelete high_font\" id=\"$id\">DELETE</a></th>

					</tr>
				</table>
    		";
    		$a++;
    	}
    }
    public function add(){}
    public function prices(){}

    public function get_activity(){
    	$query = mysql_query("SELECT * FROM activities") or die("Can't connect");
    	while ($fetch = mysql_fetch_array($query)) {
    		$id = $fetch['id'];
    		$name = $fetch['name'];
    		echo "
    			<tr>
					<th style=\"text-transform: capitalize;\">$name</th> 
					<th><input type=\"radio\" value=\"on\"  name=\"$name\">On<input type=\"radio\" name=\"$name\" value=\"off\" checked>Off</th> 
				</tr>
    		";
    	}
    }
    public function get_inclusion(){
    	$query = mysql_query("SELECT * FROM inclusions") or die("Can't connect");
    	while ($fetch = mysql_fetch_array($query)) {
    		$id = $fetch['id'];
    		$name = $fetch['name'];
    		echo "
    		<form>
    			<tr>
					<th style=\"text-transform: capitalize;\">$name </th> 
					<th><input type=\"radio\" value=\"on\"  name=\"$name\">On<input type=\"radio\" value=\"off\"  name=\"$name\" checked>Off</th> 
				</tr>
			<form>
    		";
    	}
    }

}

$tour = new tour();
 ?>

<div class="container">

	<?php if($tour->check_it() == 0){ ?>
		<a href="/admin/tour/add" class="high_font add_tour_main">ADD TOUR</a>
		<?php $tour->get_tours(); ?>

	<?php }elseif ($tour->check_it() == 1) {?>
	<a href="/admin/tour" class="articlelistupdate back_btn"><< BACK TO TOURS</a>
		<form id="add_tour_form" class="low_font" action="/admin/ajax.php?func=cool_fun"  enctype="multipart/form-data" method="post">
				<div class="field_title high_font">Tour Title:</div>
			<input type="text" name="title" class="input_texts low_font">
				<div class="field_title high_font">Tour Description:</div>
			<textarea class="tour_desc input_texts"  class="input_texts tour_desc low_font" name="description"></textarea>
				<div class="field_title high_font">Tour start place:</div>
			<input  class="input_texts low_font" type="text" name="start_place">
				<div class="field_title high_font">Tour end place</div>
			<input  class="input_texts low_font" type="text" name="end_place">
				<div class="field_title high_font">Places included in tour</div>
			<input  class="input_texts low_font" type="text" name="places"><br><br><br>
			<div class="numbers">
				<input type="number" name="cost" class="input_number" min="0" value="0"> $<br>
				<select class="input_number" name="level">
					<option value="0">none</option>
					<option value="1">Easy</option>
					<option value="2">Medium</option>
					<option value="3">Hard</option>
				</select> level<br>
				<input type="number" name="duration_day" class="input_number" min="0" value="0"> days<br>
				<input type="number" name="duration_hr" class="input_number" min="0" max="24" value="0"> hours<br>
			</div>
			<table class="activities">
				<tr><th><h2 style="margin-top:0px;color:#0073AA;">Activities</h2></th></tr>
				<?php $tour->get_activity(); ?>
			</table>

			<table class="inclusions">
				<tr><th><h2 style="margin-top:0px;color:#0073AA;">Inclusions</h2></th></tr>
				<?php $tour->get_inclusion(); ?>
			</table>
			<div class="images_cont">
				<input type="file" name="file" id="file" class="comfile" onchange="readURL(this);">

				<label class="add_image" for="file">MAP</label>

				<input type="file" name="file1" id="file1" class="comfile1" onchange="readURLsecond(this);">

				<label class="add_image1" for="file1">MAIN</label>
			</div>
			<input type="submit" name="add_tour" class="add_tour high_font" value="ADD TOUR">
		</form>

	<?php }elseif ($tour->check_it() == 2) { ?>

	<?php }elseif($tour->check_it() == 3){ ?>
		<div class="price_container">
			<h2 style="color:orange;">Prices for: - Tbilisi foodie tour for summer vaction</h2>
			<table class="list_price_cont">
				<tr>
					<td><b>Quantity</b></td>
					<td><b>Price</b></td>
					<td><b>Action</b></td>
				</tr>
				<tr>
					<td>1</td>
					<td>20 $</td>
					<td><a class="articlelistdelete">DELETE</a></td>
				</tr>
				<tr>
					<td>2</td>
					<td>35 $</td>
					<td><a class="articlelistdelete">DELETE</a></td>
				</tr>
			</table>
			<br><br>

			<form id="prices_form" action="/admin/ajax.php?func=add_price" method="post">
				<table class="form_tb">
					<tr>
						<td><input type="number" name="quantity" class="pr_form" value="0"></td>
						<td><input type="number" name="price" class="pr_form" value="0"> $</td>
						<input type="hidden" name="id" value="<?php $tour->get_id(); ?>">
						<td><input type="submit" value="INSERT" class="submit_price articlelistupdate"></td>
					</tr>
				</table>
			</form>
		</div>
	<?php }?>

	
</div>