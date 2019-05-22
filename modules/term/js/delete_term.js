$(document).ready(function() {
	$('#delete-term').click(function() {
		var agree = confirm('Вы уверены?');
		var id_term = $(this).attr('id_term');
		if (agree) location.href = '/term/delete?id_term=' + id_term;
	});

});