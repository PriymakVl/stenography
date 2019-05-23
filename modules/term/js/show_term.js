$(document).ready(function() {
	$('#show-images').click(function() {
		if ($('#term-images-td').is(":visible")) {
			$('#term-images-td').css('visibility', 'hidden');
			$(this).text('Показать');
		}
		else {
			$('#term-images-td').css('visibility', 'visible');
			$(this).text('Скрыть');
		}
	});

});