$(document).ready(function() {
	$('#hide-images').click(function() {
		let text = $(this).text();
		if (text == 'Скрыть изображ.') $(this).text('Показать изображ.');
		else $(this).text('Скрыть изображ.');
		$('.rule-examples img').toggle();
	});

	$('#hide-words').click(function() {
		let text = $(this).text();
		if (text == 'Скрыть слова') $(this).text('Показать слова');
		else $(this).text('Скрыть слова');
		$('.rule-examples span').toggle();
	});

});