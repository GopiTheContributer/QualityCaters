$(document).ready(function(){
	$('#currentYear').text((new Date).getFullYear());
});

//date time picker code
$( function() {
	$( "#eventDate" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
//end of date time picker code

jQuery(function($) {'use strict';
//Responsive Nav
$('li.dropdown').find('.fa-angle-down').each(function(){
	$(this).on('click', function(){
		if( $(window).width() < 768 ) {
			$(this).parent().next().slideToggle();
		}
		return false;
	});
});

//Fit Vids
if( $('#video-container').length ) {
	$("#video-container").fitVids();
}

//Initiat WOW JS
new WOW().init();

// portfolio filter
$(window).load(function(){

	$('.main-slider').addClass('animate-in');
	$('.preloader').remove();
	//End Preloader

	if( $('.masonery_area').length ) {
		$('.masonery_area').masonry();//Masonry
	}

	var $portfolio_selectors = $('.portfolio-filter >li>a');

	if($portfolio_selectors.length) {

		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});

		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	}

});


$('.timer').each(count);
function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
}

// Search
$('.fa-search').on('click', function() {
	$('.field-toggle').fadeToggle(200);
});

// Contact form
var form = $('#main-contact-form');
form.submit(function(event){
	event.preventDefault();
	var form_status = $('<div class="form_status"></div>');
	$.ajax({
		url: $(this).attr('action'),
		beforeSend: function(){
			form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
		}
	}).done(function(data){
		form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
	});
});

// Progress Bar
$.each($('div.progress-bar'),function(){
	$(this).css('width', $(this).attr('data-transition')+'%');
});

if( $('#gmap').length ) {
	var map;

	map = new GMaps({
		el: '#gmap',
		lat: 43.04446,
		lng: -76.130791,
		scrollwheel:false,
		zoom: 16,
		zoomControl : false,
		panControl : false,
		streetViewControl : false,
		mapTypeControl: false,
		overviewMapControl: false,
		clickable: false
	});

	map.addMarker({
		lat: 43.04446,
		lng: -76.130791,
		animation: google.maps.Animation.DROP,
		verticalAlign: 'bottom',
		horizontalAlign: 'center',
		backgroundColor: '#3e8bff',
	});
}


});


//login button click functionality
$('#btnModalFooter').click(function(){

	if(($('#username').val() == '' || $('#username').val() == null
	|| $('#password').val() == '' || $('#password').val() == null))
	{
		$('#err').fadeIn(1000);
		$('#err').empty().addClass('login-error-msg').text('Invalid username and password.');
		setTimeout(function () { $('#err').fadeOut(); }, 3000);
		$('#username').focus();
		return;
	}

	let username = $('#username').val();
	let password = $('#password').val();

	//if login success
	$.ajax({
		url:'validationcheck.php',
		type:'POST',
		dataType:'json',
		data: { 'username': username,
		'password': password
	},
	success: function(result){
		if(result == 'invalid login')
		{
			$('#err').fadeIn(1000);
			$('#err').empty().addClass('login-error-msg').text('Invalie username and password.');
			setTimeout(function () { $('#err').fadeOut(); }, 3000);

			$('#username').val('');
			$('#password').val('');
			$('#username').focus();

			return;
		}

		window.location.href = 'dashboard.php';
	},
	error: function(xhr, status, error){
		var err = eval(xhr.responseText);
		alert(err.Message);
	}
});

});
//end og login functionality

//order button click function
$('#btnOrder').click(function(){

	//validating order form
	if($('#address').val() == '' || $('#referredphoneno').val() == '' || $('#referredby').val() == ''
	|| $('#event').val() == '' || $('#noOfPersons').val() == '' || $('#eventDate').val() == '' ||
	$('#email').val() == '' || $('#name').val() == ''){
		$('#orderErrorMessagee').fadeIn(1000);
		$('#orderErrorMessagee').empty().addClass('login-error-msg').text('All the fields are mandatory to place the order.');
		setTimeout(function () { $('#orderErrorMessagee').fadeOut(); }, 3000);
		$('#name').focus();
		return;
	}

	//saving form data for local variabel
	let address = $('#address').val();
	let referredPhoneNo = $('#referredphoneno').val();
	let referredBy = $('#referredby').val();
	let eventValue = $('#event').val();
	let noOfPersons = $('#noOfPersons').val();
	let eventDate = $('#eventDate').val();
	let email = $('#email').val();
	let name = $('#name').val();


	$.ajax({
		url:'bookorder.php',
		type:'POST',
		dataType:'json',
		data:{'address': address,
		'referredPhoneNo': referredPhoneNo,
		'referredBy': referredBy,
		'eventValue': eventValue,
		'noOfPersons': noOfPersons,
		'eventDate': eventDate,
		'email': email,
		'name': name
	},
	success:function(result){
		if(result == 'New record created successfully'){
			$('#orderErrorMessagee').fadeIn(1000);
			$('#orderErrorMessagee').empty().addClass('success-error-msg').text('Order placed successfully. We will get in touch with you as soon as possible.');
			setTimeout(function () { $('#orderErrorMessagee').fadeOut(); }, 3000);

			$('#address').val('');
			$('#referredphoneno').val('');
			$('#referredby').val('');
			$('#event').val('');
			$('#noOfPersons').val('');
			$('#eventDate').val('');
			$('#email').val('');
			$('#name').val('');

			$('#name').focus();
			return;
		}
		else{
			alert('not inserted');
			return;
		}
	},
	error:function (xhr, status, error) {
		var err = eval(xhr.responseText);
		console.log(err);
	}
});


});
//end of order button click function

//contact button press event
$('#btnContactSubmit').click(function() {
	debugger;
	let givenEmail = $('#contactEmail').val();

	if($('#contactName').val() == '' || givenEmail == ''){
		setTimeout(function() { $('#contact-message').empty().addClass('contact-error-msg').text('All fields are mandatory')}, 3000);
		$('#contactName').focus();
		return;
	}
	debugger;
	if(givenEmail != ''){
		var validateEmailFormat = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		if (!validateEmailFormat.test(givenEmail)){
			setTimeout(function(){$('#contact-message').empty().addClass('contact-error-msg').text('Email not in format')}, 3000);
			return;
		}
	}

	$.ajax({
		url:'contact.php',
		data:{'contactName': $('#contactName').val(), 'contactMail': $('#contactEmail').val(), 'message': $('#message').val()},
		dataType:'json',
		type:'POST',
		success:function(contactResult){
			if(contactResult== 'contact added')
			{
				setTimeout(function() { $('#contact-message').empty().removeClass('contact-error-msg').text('Thanks for contacting us.')}, 3000);

				$('#contactName').val('');
				$('#contactEmail').val('');
				$('#message').val('');
				$('#contactName').focus();
			}else {}
		},
		error:function(xhr, status, error){var err = eval(xhr.responseText);
			console.log(err);}
		});

	});
