$(document).ready(function(){
	//upload function

	$('#add_tour_form').validate({ // initialize the plugin
		rules: {
            title: {
                required: true,
                minlength:1
            },
            description: {
                required: true,
                minlength:1
            },
            start_place: {
                required: true,
                minlength:1
            },
            end_place: {
                required: true,
                minlength:1
            },
            places: {
                required: true,
                minlength:1
            },
            cost: {
                required: true,
                minlength:1,
                min:1
            },
            duration_day: {
            	digits:true,
            	minlength:1,
            	 min:1
            },
            duration_hr: {
            	digits:true,
            	minlength:1,
            	 min:1
            },
            file: {
            	required: true
            },
            file1: {
            	required: true
            }

        }, 
        errorPlacement: function(){
       		 return false;
    	},
    	submitHandler: function () {
			var form = $('#add_tour_form').serializeArray();
			console.log(form);
			$('#add_tour_form').ajaxSubmit({
			    success : function (response) {
			            if (response=="success") {
			            	$('.error_bar').html("Tour has been added!").slideDown().delay(3000).slideUp();
			            }else if(response=="fail"){
			            	$('.error_bar').css({'border-bottom':'#c9302c','background-color':'rgba(201,48,42,0.7)'}).html("Please Choose both images to add the tour!").slideDown().delay(3000).slideUp();
			            }else{
			            $('.error_bar').css({'border-bottom':'#c9302c','background-color':'rgba(201,48,42,0.7)'}).html("ERROR! contact the developer").slideDown().delay(3000).slideUp();

			            }
			            console.log(response);
			        }
			    });
			}

	});
	$('#prices_form').validate({
		rules:{
			quantity:{
				required:true
			},
			price:{
				required:true
			}
		},
		errorPlacement: function(){
       		 return false;
    	},
    	submitHandler: function () {
		$('#prices_form').ajaxSubmit({
		    success : function (response) {
		            if (response=="success") {
		            	$('.error_bar').html("Price has been added").slideDown().delay(3000).slideUp();
		            }else if(response=="fail"){
		            	$('.error_bar').css({'border-bottom':'#c9302c','background-color':'rgba(201,48,42,0.7)'}).html("Sorry Error!").slideDown().delay(3000).slideUp();
		            }else{
		            	alert(response);
		            $('.error_bar').css({'border-bottom':'#c9302c','background-color':'rgba(201,48,42,0.7)'}).html("ERROR! contact the developer").slideDown().delay(3000).slideUp();

		            }
		            console.log(response);
		        }
		    });
		}
	});


	$('input[name=places]').tags();
	//uplioad day image

	//update comment
	$('.updatecomment').click(function(event){
		event.preventDefault();
		var id = $(this).attr("id").split('_')[1];
		$.ajax({
			url: "/admin/ajax.php/?func=delete_coment",
			data:'id='+id,
			type:'POST',
			success: function(response){
				if(response=="success"){
					$('#fullcoment_'+id).hide(700);
				}else{
					$('.error_bar').slideDown(300).css('color','red').text("Error while adding comment!").delay(500).slideUp(300);
				}
			}
		});
	});


		//updating lang function
		$('.save_btn').click(function(){
			var id = $(this).attr("id");
			var word = $('#word_'+id).val();
			 $.ajax({url: "/admin/ajax.php/?func=update_lang",
			 	data:'id='+id+'&word='+word,
			 	type:'POST',
			  success: function(result){
		        if(result=="success"){
		        	$('.error_bar').slideDown(300).text("Lang has been pdated! ").delay(500).slideUp(300);
		        }else{
		        	alert("ერრორი დაუკავშირდით დეველოპერს!");
		        }
		    }});
	    
	}); 

	//inserting lang function
	$('.add_btn').click(function(){
			var lang = $('.insert').val();
			var word = $('#word').val();
			//alert(ka);
		  	//alert(de);
		  	//alert(lang);
			 $.ajax({url: "/admin/ajax.php/?func=insert_lang",
			 	data:'lang='+lang+'&word='+word,
			 	type:'POST',
			  success: function(result){

		        if(result=="success"){
		        	$('.error_bar').slideDown(300).text("lang has been added! ").delay(500).slideUp(300);
		        }else{
		        	alert(result);
		        }
		    }});
	    
	}); 

	//update product
	$('.addprod').click(function(event){
			event.preventDefault();
			var id = $(this).attr("id").split("_")[1];
			var cost = $('#cost_'+id).val();
			var prod_kal = $('#kal_'+id).val();
			var prod_desc = $('#text_'+id).val();
			 $.ajax({url: "/admin/ajax.php/?func=updateprod",
			 	data:'id='+id+'&cost='+cost+'&kal='+prod_kal+'&desc='+prod_desc,
			 	type:'POST',
			  success: function(result){
		        if(result=="success"){
		        	$('.error_bar').slideDown(300).text("product has been updated added! ").delay(500).slideUp(300);
		        }else{
		        	alert(result);
		        }
		    }});
	    
	}); 










	//update page
	$('.submit_page').click(function(){
		var id = $(this).attr("id").split("_")[1];
		var title = $('[name=title_'+id+']').val();
		var desc = $('[name=desc_'+id+']').val();
		$.ajax({url: "/admin/ajax.php/?func=submit_page",
			 	data:'id='+id+'&title='+title+'&desc='+desc,
			 	type:'POST',
			  success: function(result){
		        if(result=="success"){
		        	$('.error_bar').slideDown(300).text("Page has been updated! ").delay(1000).slideUp(300);
		        }else{
		        	alert(result);
		        }
		    }});
	});
       

       //add image to days
	 $('input[name=image]').on("change",function(){
			var params = $(this).attr("id").split("_");
			day = params[0];
			menu = params[1];
		    var bar = $('#bar_'+day);
		    var percent = $('#percent_'+day);
		    var status = $('#status');
			var options = { 
				data:{day:day,menu:menu},
		        beforeSubmit:  function(){

		        	status.empty();
		            var percentVal = '0%';
		            bar.width(percentVal);
		            percent.html(percentVal);
		        },  // pre-submit callback 
		        uploadProgress:       function(event, position, total, percentComplete){
		        	var percentVal = percentComplete + '%';
		            bar.width(percentVal);
		            percent.html(percentVal);
		        },
		        success: function(response) {
		        	var txt = response.split('+');
			           if(txt[0]=="success"){
		        			var id=txt[2];
		        			var image = txt[1];
		        			$('#day_'+day).append("<div class='image_day' id='image_"+id+"'></div>");
		        			$("#image_"+id).css("background-image","url('../day_thumbs/"+image+"')")
		        		}else{
		        			$('.error_bar').slideDown(300).text("error occured while adding the image! ").delay(500).slideUp(300);
		        		}
			    },
			    error: function(){
			    	alert("error");
			    }	
	    	}
		    $('#day_form_'+day).ajaxSubmit(options);
    });
	 //delete image
	 $('.delete_day_image').click(function(event){
		var id = $(this).attr("id");
		$.ajax({
			url: "/admin/ajax.php/?func=delete_image",
			data:'id='+id,
			type:'POST',
			success: function(response){
				if(response=="success"){
					$('#image_'+id).hide(700);
				}else{
					$('.error_bar').slideDown(300).css('color','red').text("Error while adding comment!").delay(500).slideUp(300);
				}
			}
		});
	});
//end of jquery //@@@@
});

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.add_image')
                        .css({'background-image':"url('"+e.target.result+"')",'border':'none','border-radius':'180px'})
                        .width(180)
                        .height(180)
                        .html("");
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLsecond(input){
        	if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.add_image1')
                        .css({'background-image':"url('"+e.target.result+"')",'border':'none','border-radius':'180px'})
                        .width(180)
                        .height(180)
                        .html("");
                };

                reader.readAsDataURL(input.files[0]);
            }
        }



