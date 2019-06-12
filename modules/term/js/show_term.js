$(document).ready(function() {
	$('#show-images-all').click(function(event) {
		if ($('.term-images-td img').is(":visible")) $(this).text('Показать изображения');
		else $(this).text('Скрыть изображения');
		$('.term-images-td').toggle();
		return false;
	});

});