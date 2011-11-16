jQuery(document).ready(function(){
	$('.accordion .head').click(function() {
		$(this).next().toggle();
		return false;
	}).next().hide();
});