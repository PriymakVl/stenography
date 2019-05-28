$(document).ready(function() {
	$('#show-images-all').click(function(event) {
		if ($('.term-images-td img').is(":visible")) $(this).text('Показать');
		else $(this).text('Скрыть');
		$('.term-images-td img').toggle();
		return false;
	});

});