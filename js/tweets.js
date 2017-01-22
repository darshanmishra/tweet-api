$(document).ready(function () {
$("#keyword_form").on("submit", function (e){
		e.preventDefault();
		$.ajax({
        url: 'getTweet.php',
        type: 'GET',
		data: $(this).serialize(),
        success: function(response) {
			var tt = "<BR><BR>";
            if (typeof response.errors === 'undefined' || response.errors.length < 1) {
				$.each(response.statuses, function (key, val) {
					tt += "<div class='col-md-4 btn-top-margin'><div class='col-md-12 border p-10 div-hover'>Created at : "+val.created_at+"<BR>"
					+"USER : "+val.user.name+"<BR>"
					+"Location : "+val.user.location+"<BR>"+
						"Tweet : "+val.text+"</div></div>";
				});
                
				$('.tweets-container').html(tt);
            } else {
                $('.tweets-container p:first').text('Response error');
            }
        },
        error: function(errors) {
            $('.tweets-container p:first').text('Request error');
        }
    });
});
});