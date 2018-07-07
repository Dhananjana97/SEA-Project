var textarea_init;
$('document').ready(function(){
	textarea_init = $('textarea').text();
});
$('textarea').click(function(){
	if($(this).text()==textarea_init){
		$(this).css('color','#000');
		$(this).css('font-size','28px');
		$(':submit').removeAttr('disabled');
		$(this).text('');
	}
});