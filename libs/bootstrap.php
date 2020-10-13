<?php
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);
include "./libs/connect.php";
include "./libs/conf.php";
	if(isset($_GET['url'])){
		$url = mysql_real_escape_string($_GET['url']);
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		if(isset($url[0])){
			if($url[0] == "ajax"){
			}else{
			$file = "./controller/" . constant($url[0]) . ".php";
			if(file_exists($file)){
				echo "<div id='main'>";
				require $file;
				if(class_exists(constant($url[0]))){
					$ext = constant($url[0]);
				$class = new $ext;
				}else{
                    header('Location: /');
				}
			}else{
				header('Location: /');
			}
			}
			echo "</div>";
			
		}
	}else
		require "./controller/index.php";