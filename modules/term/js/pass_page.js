$(document).ready(function() {

	$('#pass_page').click(function(event) {
		event.preventDefault();
		var page = prompt('Введите номер страницы');
		if (!+page) return alert('Вы ввели не число');
		location.href = '/term/list?page=' + page;
	});

});