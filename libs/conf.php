<?php 

			/**
			* 
			*/	

			//html lang	

			//pages
			define("tours-in-georgia","tour");
			define("transfers-in-georgia","transfer");
			define("blog-about-georgian-tourism","blog");
			define("error","error");
			define("explore-about-realgeorgiatours","about");
			define("contact","contact");
			
/*
			if(!isset($_COOKIE['lang']) || $_COOKIE['lang']=="ka"){
				define("HTML_LANG","ka");
	        }else if($_COOKIE['lang']=="de"){
	        	define("HTML_LANG","de");
	        }
			define("AUTHOR","Jimsher Bedianashvili");



					if(isset($_GET['url'])){
						$url = mysql_real_escape_string($_GET['url']);
						$url = rtrim($url, '/');
						$url = explode('/', $url);

							//maing pages
						if(isset($url[0]) && !isset($url[1])){
							$mainpage_name = $url[0];
							$query = mysql_query("SELECT * FROM pages WHERE page_name='$mainpage_name'") or die("Can't connect");
							$fetch =mysql_fetch_array($query);
					          $title = $fetch['page_title'];
					          $description = $fetch['page_description'];
					        define("MAIN_TITLE",$title);
					        define("MAIN_DESCRIPTION",$description);

					        //single article 
						}elseif ($url[0]=="product") {
							$name = $url[1];
							$query = mysql_query("SELECT * FROM prduct WHERE name='$name'") or die("Can't connect");
							$fetch = mysql_fetch_array($query);
							$name = $fetch['name'];
							$description = $fetch['description'];
							
					        define("MAIN_TITLE",$name);
					        define("MAIN_DESCRIPTION",$description);
					    }elseif (!isset($url[0])) {
					    	$mainpage_name = $url[0];
							$query = mysql_query("SELECT * FROM pages WHERE page_name='home'") or die("Can't connect");
							$fetch =mysql_fetch_array($query);
					          $title = $fetch['page_title'];
					          $description = $fetch['page_description'];
					        define("MAIN_TITLE",$title);
					        define("MAIN_DESCRIPTION",$description);
					    }

							//home page
				}else{
					$query = mysql_query("SELECT * FROM pages WHERE page_name='home'") or die("Can't connect");
					$fetch =mysql_fetch_array($query);
						if(!isset($_COOKIE['lang']) || $_COOKIE['lang']=="ka"){
					          $title = $fetch['page_title'];
					          $description = $fetch['page_description'];
					        }else if($_COOKIE['lang']=="de"){
					          $title = $fetch['de_page_title'];
					          $description = $fetch['de_page_description'];
					        }
						define("MAIN_TITLE",$title);
					    define("MAIN_DESCRIPTION",$description);
				}


*/
 ?>