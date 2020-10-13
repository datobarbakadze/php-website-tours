$(document).ready(function(){
	$('input[name=q_man]').change(function(){
		var valu = $(this).val();
		


			$.ajax({

			url: '/ajax.php/?func=calculate',



			data: 'tour_id=3&q='+valu,



			type: 'POST',

			success: function(out){
				var price = out+" $";
				$('.calc_price').html(price);

			}



			});




	});
});