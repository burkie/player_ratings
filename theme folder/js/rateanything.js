	$(document).ready(function() {
		$('div').each(function() {
			if(this.id.match('rate_')){
				$(this).load('//news.arseblog.com/rateanything.php?id='+this.id.replace('rate_',''));
			}
		});
	});
	
	function addRating(div_id,rating){
	 $.ajax({
	   type: "GET",
	   url: "//news.arseblog.com/rateanything.php",
	   data: "id="+div_id+"&rating="+rating,
	   success: function(data){
		 $('#rate_'+div_id).hide().html(data).fadeIn('slow');
	   }
	});
	}
