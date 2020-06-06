// tim kiem
$(document).ready(function () {
	$(".TimKiemNangCao").on("click", function () {
		$(".showsearch-advanced").css('display', 'block');
		$(".TimKiemNangCao").css('display', 'none');
		$(".BoTimKiemNangCao").css('display', 'block');
		$(".BoTimKiemNangCao").on("click", function () {
			$(".showsearch-advanced").css('display', 'none');
			$(".TimKiemNangCao").css('display', 'block');
			$(".BoTimKiemNangCao").css('display', 'none');
		});
	});
	$("#province").change(function () {
		var idprovince = $(this).val();
		$.get("ajax/district/" + idprovince, function (data) {
			$("#district").html(data);
		});
	});
	$("#district").change(function () {
		var iddistrict = $(this).val();
		$.get("ajax/ward/" + iddistrict, function (data) {
			$("#ward").html(data);
		});
	});

});
// ajax dongia
// $(document).ready(function(){
// 	var value=$('#optionNews').val();
// 	$.get("ajax/loadgia/"+value,function(data){
// 		$("#idgia").html(data);
// 	});
// });

// $(document).ready(function(){
// 	$("#optionNews").change(function(){
// 		var id=$(this).val();
// 		$.get("ajax/dongia/"+id,function(data){
// 			$("#idgia").html(data);
// 		});
// 	});
// });
// ajax  province district ward

// ajax hinhthuc
$(document).ready(function () {
	$("#hinhthucdang").change(function () {
		var idhinhthuc = $(this).val();
		$.get("ajax/loaitinban/" + idhinhthuc, function (data) {
			$("#loaitinban").html(data);
		});
	});
});
// ajax donvi
$(document).ready(function () {
	$("#hinhthucdang").change(function () {
		$.get("ajax/donvi", function (data) {
			$("#donvi").html(data);
		});
	});
});
// ajax du an
$(document).ready(function () {
	$("#hinhthucdang").change(function () {
		$.get("ajax/donvi", function (data) {
			$("#donvi").html(data);
		});
	});
});
$(document).ready(function () {
	$("#showSearchAdvanced").click(function () {
		$(".searchadvanced").css("display", "block");
		$("#hideSearchBase").show();
		$("#showSearchAdvanced").hide();
	});
	$("#hideSearchBase").click(function () {
		$(".searchadvanced").css("display", "none");
		$("#hideSearchBase").hide();
		$("#showSearchAdvanced").show();
	});
});
// end tim kiem nang cao o trang nha dat 

$(document).ready(function () {
	$("#moreLinkSearch").click(function () {
		$(".showAdressSearch select").css("display", "block");
		$("#moreLinkSearch").hide();
		$("#compactLinkSearch").show();
		$("#compactLinkSearch img").css("transform", "rotate(45deg)");
	});
	$("#compactLinkSearch").click(function () {
		$(".showAdressSearch select").css("display", "none");
		$("#moreLinkSearch").show();
		$("#compactLinkSearch").hide();
		$("#moreLinkSearch img").css("transform", "rotate(45deg)");
	});
});
// slide san pham
// end tim kiem nang cao o trang nha dat 
$(document).ready(function () {
	// Hàm active tab nào đó
	function activeTab(obj) {
		// Xóa class active tất cả các tab
		$('.tab-wrapper ul li').removeClass('active');

		// Thêm class active vòa tab đang click
		$(obj).addClass('active');

		// Lấy href của tab để show content tương ứng
		var id = $(obj).find('a').attr('href');

		// Ẩn hết nội dung các tab đang hiển thị
		$('.tab-item').hide();

		// Hiển thị nội dung của tab hiện tại
		$(id).show();
	}

	// Sự kiện click đổi tab
	$('.tab li').click(function () {
		activeTab(this);
		return false;
	});

	// Active tab đầu tiên khi trang web được chạy
	activeTab($('.tab li:first-child'));
});
$(document).ready(function () {
	$('.slider-for').slick({
		slidesToShow: 1,
		autoplay: true,
		slidesToScroll: 1,
		arrows: false,
		autoplaySpeed: 2000,
		fade: true,
		cssEase: 'linear',
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		focusOnSelect: true,
	});
	$('a[data-slide]').click(function (e) {
		e.preventDefault();
		var slideno = $(this).data('slide');
		$('.slider-nav').slick('slickGoTo', slideno - 1);
	});
	// $('.slider-for').slick({
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	autoplaySpeed: 3000,
	// 	arrows: false,
	// 	adaptiveHeight: false,
	// 	fade: true,
	// 	asNavFor: '.slider-nav'
	// });
	// $('.slider-nav').slick({
	// 	slidesToShow: 5,
	// 	slidesToScroll: 1,
	// 	asNavFor: '.slider-for',
	// 	Accessibility: true,
	// 	adaptiveHeight: false,
	// 	slidesPerRow: 4,
	// 	focusOnSelect: true
	// });
});
// su kien khi chon loai tin trong module dang tin tuc
$(document).ready(function () {
	$("#tin-thuong").show();
	$("#tin-vip-1").hide();
	$("#tin-vip-2").hide();
	$("#tin-vip-3").hide();
	$("#tin-dac-biet").hide();
	$("#tin-uu-dai").hide();
	$("#idgia").html(1727);
	$("#idngay").html(30);
	var a = parseInt($('#idgia').html());
	var b = parseInt($('#idngay').html());
	var c = Math.round(a * b);
	var d = Math.round(c * 10) / 100;
	var e = Math.round(c + d);
	$("#phiDangTin").html(c);
	$("#phiVAT").html(d);
	$("#thanhTien").html(e);
	$("#optionNews").change(function () {
		var value = $(this).val();
		if (value == 1) {
			$("#tin-thuong").show();
			$("#tin-vip-1").hide();
			$("#tin-vip-2").hide();
			$("#tin-vip-3").hide();
			$("#tin-dac-biet").hide();
			$("#tin-uu-dai").hide();
			$("#idgia").html(1727);
			$("#idngay").html(30);
			var a = parseInt($('#idgia').html());
			var b = parseInt($('#idngay').html());
			var c = Math.round(a * b);
			var d = Math.round(c * 10) / 100;
			var e = Math.round(c + d);
			$("#phiDangTin").html(c);
			$("#phiVAT").html(d);
			$("#thanhTien").html(e);
		} else if (value == 2) {
			$("#tin-thuong").hide();
			$("#tin-vip-1").hide();
			$("#tin-vip-2").hide();
			$("#tin-vip-3").hide();
			$("#tin-dac-biet").hide();
			$("#tin-uu-dai").show();
			$("#idgia").html(454545);
			$("#idngay").html(90);
			var a = parseInt($('#idgia').html());
			var b = parseInt($('#idngay').html());
			var c = Math.round(a);
			var d = Math.round(c * 10) / 100;
			var e = Math.round(c + d);
			$("#phiDangTin").html(c);
			$("#phiVAT").html(d);
			$("#thanhTien").html(e);

		} else if (value == 3) {
			$("#tin-thuong").hide();
			$("#tin-vip-1").hide();
			$("#tin-vip-2").hide();
			$("#tin-vip-3").show();
			$("#tin-dac-biet").hide();
			$("#tin-uu-dai").hide();
			$("#idgia").html(27272);
			$("#idngay").html(30);
			var a = parseInt($('#idgia').html());
			var b = parseInt($('#idngay').html());
			var c = Math.round(a * b);
			var d = Math.round(c * 10) / 100;
			var e = Math.round(c + d);
			$("#phiDangTin").html(c);
			$("#phiVAT").html(d);
			$("#thanhTien").html(e);
		} else if (value == 4) {
			$("#tin-thuong").hide();
			$("#tin-vip-1").hide();
			$("#tin-vip-2").show();
			$("#tin-vip-3").hide();
			$("#tin-dac-biet").hide();
			$("#tin-uu-dai").hide();
			$("#idgia").html(50000);
			$("#idngay").html(30);
			var a = parseInt($('#idgia').html());
			var b = parseInt($('#idngay').html());
			var c = Math.round(a * b);
			var d = Math.round(c * 10) / 100;
			var e = Math.round(c + d);
			$("#phiDangTin").html(c);
			$("#phiVAT").html(d);
			$("#thanhTien").html(e);
		} else if (value == 5) {
			$("#tin-thuong").hide();
			$("#tin-vip-1").show();
			$("#tin-vip-2").hide();
			$("#tin-vip-3").hide();
			$("#tin-dac-biet").hide();
			$("#tin-uu-dai").hide();
			$("#idgia").html(68181);
			$("#idngay").html(30);
			var a = parseInt($('#idgia').html());
			var b = parseInt($('#idngay').html());
			var c = Math.round(a * b);
			var d = Math.round(c * 10) / 100;
			var e = Math.round(c + d);
			$("#phiDangTin").html(c);
			$("#phiVAT").html(d);
			$("#thanhTien").html(e);
		} else {
			$("#tin-thuong").hide();
			$("#tin-vip-1").hide();
			$("#tin-vip-2").hide();
			$("#tin-vip-3").hide();
			$("#tin-dac-biet").show();
			$("#tin-uu-dai").hide();
			$("#idgia").html(168181);
			$("#idngay").html(30);
			var a = parseInt($('#idgia').html());
			var b = parseInt($('#idngay').html());
			var c = Math.round(a * b);
			var d = Math.round(c * 10) / 100;
			var e = Math.round(c + d);
			$("#phiDangTin").html(c);
			$("#phiVAT").html(d);
			$("#thanhTien").html(e);
		}
	});
});
// chon date
$(document).ready(function () {
	$('#date').datepicker({
		dateFormat: "mm/dd/yy",
		minDate: "+0D",
		maxDate: "+1Y",
	});
});
$(document).ready(function () {
	$('#dateEnd').datepicker({
		dateFormat: "mm/dd/yy",
		minDate: "+0D",
		maxDate: "+1Y"
	});
});
$(document).ready(function () {
	$("#dateEnd").change(function () {
		const date1 = $("#date").val();
		const date2 = $("#dateEnd").val();
		var start = new Date(date1);
		var end = new Date(date2);
		var days = (end - start) / 1000 / 60 / 60 / 24;
		days = days - (end.getTimezoneOffset() - start.getTimezoneOffset()) / (60 * 24);
		$(".countDate").html(days);
	});
});
// 
$(document).ready(function () {
	$("#idgia").html(1727);
	$("#idngay").html(30);
});

$(document).ready(function () {
	$("#DangKyTaiKhoan").click(function () {
		$.get("ajax/get-province", function (data) {
			$("#provincedk").html(data);
		});
	});
	// form dang ky

	$("#provincedk").click(function () {
		var id = $(this).val();
		$.get("ajax/get-district/" + id, function (data) {
			$("#districtdk").html(data);
		});
	});
	// $("#chooseDienTich").click(function () {
	// 	$.get("ajax/chooseDienTich", function (data) {
	// 		$("#chooseDienTich").html(data);
	// 	});
	// });
	$("#districtdk").change(function () {
		var id = $(this).val();
		$.get("ajax/get-ward/" + id, function (data) {
			$("#warddk").html(data);
		});
	});

	$("#district").change(function () {
		var id = $(this).val();
		$.get("ajax/getduan/" + id, function (data) {
			$("#duan").html(data);
		});
	});
	// $("#chooseMucGia").change(function () {
	// 	var id = $(this).val();
	// 	$.get("ajax/getduan/" + id, function (data) {
	// 		$("#duan").html(data);
	// 	});
	// });
	// ajax du an
	$("#duong").change(function () {
		var a = $("#province option:selected").text();
		var b = $("#district option:selected").text();
		var c = $("#ward option:selected").text();
		var d = $("#duan option:selected").text();
		var e = $("#duong").val();
		$("#diachi").val(e + " " + d + " " + a + " " + b + " " + c);
	});
	$("#hinhthucmua").change(function () {
		$.get("ajax/donvimua", function (data) {
			$("#donvi").html(data);
		});
	});
	$("#hinhthucmua").change(function () {
		var idhinhthuc = $(this).val();
		$.get("ajax/canmua/" + idhinhthuc, function (data) {
			$("#loaitinmua").html(data);
		});
	});
	$(document).change(function () {
		var a = parseInt($('#idgia').html());
		var b = parseInt($('#idngay').html());
		var c = Math.round(a * b);
		var d = Math.round(c * 10) / 100;
		var e = Math.round(c + d);
		$("#phiDangTin").html(c);
		$("#phiVAT").html(d);
		$("#thanhTien").html(e);
		$("#tien").val(e);
	});

	$('.nhadatban__mota').each(function (index, value) {
		var mota = $(this).html();
		if (mota.length > 500) {
			var motaSub = mota.substr(0, 100);
			$(this).text(motaSub);
			$(this).append("...");
		}
	})

});





