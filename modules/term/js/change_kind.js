$(document).ready(function() {
	$('#term-filter-type').change(function()
	{
		var type = $(this).val();
		var kind = $('input[name="kind"]:checked').val();
		location.href = '/term/list/?type=' + type + '&kind=' + kind;
	});

	$('input[name="kind"]:checked').change(function()
	{
		var type = $(this).val();
		var kind = $('#term-filter-type').val();
		location.href = '/term/list/?type=' + type + '&kind=' + kind;
	});
});