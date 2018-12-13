$(document).ready(function(){

	getDay();
	
	$(".float-button").click(function() {
		
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) $('.float-button').fadeIn();
			else $('#goTop').fadeOut();
		});
		$('.float-button').click(function () {
			$('body,html').animate({scrollTop: 0}, 'slow');
		});

	});

	$(".account").click(function() {
		$('.menu-account').slideToggle(200);
	});	
	
});


function validateForm() {
	if (validateSearch()) {
		return true;
	} else {
		$('#search').attr("placeholder", "Vui lòng nhập lại");
		$('#search').val("");
		return false;
	}
}

function validateSearch() {
	var field = $('#search').val();
	var filter = /^\S*(\w+\s*){1,4}$/;

	if (filter.test(field) == false) {
		return false;
	} else {
		return true;
	}
}



function getDay()
{
	var day = new Date();
	var t = day.getDay();
	
	var thu = ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"];
	
	var today = day.getDate() + "/" + day.getMonth() + "/" + day.getFullYear();
	

	$('.thu').html(thu[Number(t)]);
	$('.date').html(today);

	var hour = day.getHours();
	if (hour >= 5 && hour < 12)
	{
		$('.loi-chao').html("Chào buổi sáng !");
	}
	else if (hour >= 12 && hour < 18)
	{
		$('.loi-chao').html("Chúc bạn buổi chiều tốt lành !");
	}
	else
	{
		$('.loi-chao').html("Chúc bạn có buổi tối vui vẻ !");
	}
}

