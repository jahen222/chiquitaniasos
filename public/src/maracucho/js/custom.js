$(document).ready( function() {
	$("#menu-lateral .nav-link").hover( function(){
		$(this).children(".loading").toggleClass("hide");
	});
});
