$(document).ready(function() {
	
	$answer = $("#answer");

	$("#submitSearch").on("click", function() {

		$word = $("#search").val();

		$.post("handler.php",{word:$word}, function(data) {
			$answer.text(JSON.parse(data));
		});	
	});

	

});