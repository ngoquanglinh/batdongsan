$(document).ready(function(){
	$("#showSearchAdvanced").click(function(){
		$(".searchadvanced").css("display","block");
		$("#hideSearchBase").show();
		$("#showSearchAdvanced").hide();
	});
	$("#hideSearchBase").click(function(){
		$(".searchadvanced").css("display","none");
		$("#hideSearchBase").hide();
		$("#showSearchAdvanced").show();
	});
});
 // end tim kiem nang cao o trang nha dat 

$(document).ready(function(){
	$("#moreLinkSearch").click(function(){
		$(".showAdressSearch select").css("display","block");
		$("#moreLinkSearch").hide();
		$("#compactLinkSearch").show();
		$("#compactLinkSearch img").css("transform","rotate(45deg)");
	});
	$("#compactLinkSearch").click(function(){
		$(".showAdressSearch select").css("display","none");
		$("#moreLinkSearch").show();
		$("#compactLinkSearch").hide();
		$("#moreLinkSearch img").css("transform","rotate(45deg)");
	});
});