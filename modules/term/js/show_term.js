$(document).ready(function() {
	$('#show-images').click(function(event) {
		event.preventDefault();
		console.log($('#test').is(":visible"));
		if ($('#test').is(":visible")) {
			alert();
			$('#test').css('visibility', 'hidden');
			$(this).text('Показать');
		}
		else {
			$('#test').css("visibility", "visible");
			$(this).text('Скрыть');
		}
	});

});