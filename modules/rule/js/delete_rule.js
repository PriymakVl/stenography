$(document).ready(function() {
	$('#delete-rule').click(function() {
		var agree = confirm('Вы уверены?');
		var id_rule = $(this).attr('id_rule');
		if (agree) location.href = '/rule/delete?id_rule=' + id_rule;
	});

});