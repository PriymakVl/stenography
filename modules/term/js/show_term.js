$(document).ready(function() {
	$('#show-images-all').click(function(event) {
		var text = $(this).text();
		if (text = 'Скрыть изображения') $(this).text('Показать изображения');
		else $(this).text('Скрыть изображения');
		$('.term-images img').toggle();
		return false;
	});

	$('#show-names-all').click(function(event) {
		if ($('.term-name').is(":visible")) $(this).text('Показать слова');
		else $(this).text('Скрыть слова');
		$('.term-name a').toggle();
		return false;
	});

});