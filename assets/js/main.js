	$(function() {
	  $('#big').click(function() {
	  	var fontSize = parseInt($("html").css("font-size"));
	  	if(fontSize < 20) {
				fontSize = fontSize + 1 + "px";
				localStorage.setItem('font', fontSize);
				$("html").css({'font-size': fontSize});
	  	}
	  });
	  $('#small').click(function() {
	  	var fontSize = parseInt($("html").css("font-size"));
	  	if(fontSize > 11) {
				fontSize = fontSize - 1 + "px";
				localStorage.setItem('font', fontSize);
				$("html").css({'font-size': fontSize});
			}
	  });
	  $('.close-menu').click(function() {
	  	$(".accessibility").css('display', 'none');
	  	$('.open-menu').css('display', 'block')
	  	localStorage.setItem('access-menu', 'false');
	  });
	  $('.open-menu').click(function() {
	  	$(".accessibility").css('display', 'block');
	  	$('.open-menu').css('display', 'none')
	  	localStorage.setItem('access-menu', 'true');
	  });
	  if (localStorage.getItem('font') != '') {
	    $("html").css({'font-size': localStorage.getItem('font')});
	  }
	  if (localStorage.getItem('connected') == 'true') {
	    $("#button-change").html("Publier un projet");
	    $("#button-change").attr("href", "/nouveau-projet.php");
	  }
	  if (localStorage.getItem('access-menu') == 'false') {
	  	$(".accessibility").css('display', 'none');
	  }
	  if (localStorage.getItem('access-menu') == 'false') {
	  	$(".open-menu").css('display', 'block');
	  }
		$('#color').click(function() {
			if (localStorage.getItem('color') == 'false' || localStorage.getItem('color') == '') {
				$("html").css('color', 'black');
				$(".black").addClass('mono_btn_b');
				$(".white").addClass('mono_btn_w');
	  		$("#search-area").addClass('mono_wb');
	  		$("#bar").addClass('mono_input');
	  		$(".students").addClass('mono_wb');
	  		$("#view").addClass('mono_wb');
	  		$("footer").css({
	  			'border-bottom' : '10px solid black',
	  		});
	  		$("#logo").attr('src', '/assets/img/logo_mono.png');
	  		localStorage.setItem('color', 'true');
	  	} else {
	  		localStorage.setItem('color', 'false');
	  		$(location).attr('href','http://www.remi-rubis.fr/');
	  	}
	  });
	  if (localStorage.getItem('color') == 'true') {
	  		$("html").css('color', 'black');
	  		$("#cta .btn").addClass('mono_btn_w');
	  		$("#search-area").addClass('mono_wb');
	  		$("#bar").addClass('mono_input');
	  		$(".sear-bar-form .btn").addClass('mono_btn_b');
	  		$(".students").addClass('mono_wb');
	  		$(".project-square .btn").addClass('mono_btn_b');
	  		$(".black").addClass('mono_btn_b');
	  		$("#view").addClass('mono_wb');
	  		$("footer").css({
	  			'border-bottom' : '10px solid black',
	  		});
	  }
	})