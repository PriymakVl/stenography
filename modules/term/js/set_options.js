$(document).ready(function() {
	$('#term-filter-type').change(function()
	{
		var type = $(this).val();
		var hide = $('input[name="hide"]:checked').val();
		location.href = '/term/options/?type=' + type + '&hide=' + hide;
	});

	$('input[name="hide"]').change(function()
	{
		var hide = $(this).val();
		var type = $('#term-filter-type').val();
		location.href = '/term/options/?type=' + type + '&hide=' + hide;
	});
});