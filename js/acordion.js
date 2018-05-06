/* POWERED BY ESBERFES */
var active = null;	

$(".acrodion-element").click(function(){
	let child = $(this).find(".acordion-content");
	if($(child).is(":visible")){
		child.slideUp(500);
	} else {
		child.slideDown(500);
		if(active !== null && !active.is(child)) active.slideUp(500);
		active = child;
	}
});