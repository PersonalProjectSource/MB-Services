/*jshint jquery:true */

$(document).ready(function($) {
	"use strict";

	/* global google: false */
	/*jshint -W018 */

	/*-------------------------------------------------*/
	/* =  portfolio isotope
	/*-------------------------------------------------*/

	var winDow = $(window);
		// Needed variables
		var $container=$('.iso-call');
		var $filter=$('.filter');

		try{
			$container.imagesLoaded( function(){
				$container.trigger('resize');
				$container.isotope({
					filter:'*',
					layoutMode:'masonry',
					animationOptions:{
						duration:750,
						easing:'linear'
					}
				});
			});
		} catch(err) {
		}

		winDow.bind('resize', function(){
			var selector = $filter.find('a.active').attr('data-filter');

			try {
				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 750,
						easing	: 'linear',
						queue	: false,
					}
				});
			} catch(err) {
			}
			return false;
		});
		
		// Isotope Filter 
		$filter.find('a').click(function(){
			var selector = $(this).attr('data-filter');

			try {
				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 750,
						easing	: 'linear',
						queue	: false,
					}
				});
			} catch(err) {

			}
			return false;
		});


	var filterItemA	= $('.filter li a');

		filterItemA.on('click', function(){
			var $this = $(this);
			if ( !$this.hasClass('active')) {
				filterItemA.removeClass('active');
				$this.addClass('active');
			}
		});
	
	/*-------------------------------------------------*/
	/* = slider Testimonial
	/*-------------------------------------------------*/

	var slidertestimonial = $('.bxslider');
	try{		
		slidertestimonial.bxSlider({
			mode: 'vertical'
		});
	} catch(err) {
	}

	/* ---------------------------------------------------------------------- */
	/*	Contact Form
	/* ---------------------------------------------------------------------- */

//
// 	// Variable to store your files
// 	var files;
// 	// Add events
// 	$('input[type=file]').on('change', prepareUpload);
// 	// Grab the files and set them to our variable
// 	function prepareUpload(event)
// 	{
// 		files = event.target.files;
// 	}
//
// 	$('form').on('submit', uploadFiles);
// 	console.log('started ...');
// 	// Catch the form submit and upload the files
// 	function uploadFiles(event)
// 	{
// 		console.log('fonction script public ... ');
// 		event.stopPropagation(); // Stop stuff happening
// 		event.preventDefault(); // Totally stop stuff happening
// 		// START A LOADING SPINNER HERE
// 		// Create a formdata object and add the files
// 		var data = new FormData();
// 		$.each(files, function(key, value)
// 		{
// 			data.append("demande_devis[document]", value);
// 		});
//
// 		data.append('demande_devis[nomSociete]', $('#demande_devis_nomSociete').val());
// 		data.append('demande_devis[email]', $('#demande_devis_mail').val());
// 		data.append('demande_devis[telephone]', $('#demande_devis_telephone').val());
// 		data.append('demande_devis[message]', $('#demande_devis_message').val());
// 		data.append('demande_devis[submit]', $('#demande_devis_submit').val());
//
// 		$.ajax({
// 			url: $('#contact-form').attr('data-route'),
// 			type: 'POST',
// 			data: data,
// 			cache: false,
// 			dataType: 'json',
// 			processData: false, // Don't process the files
// 			contentType: false, // Set content type to false as jQuery will tell the server its a query string request
// 			success: function(data, textStatus, jqXHR)
// 			{
// 				if(typeof data.error === 'undefined')
// 				{
// 					// Success so call function to process the form
// 					console.log('success ajax');
// //                            submitForm(event, data);
// 				}
// 				else
// 				{
// 					// Handle errors here
// 					console.log('ERRORS: ' + data.error);
// 				}
// 			},
// 			error: function(jqXHR, textStatus, errorThrown)
// 			{
// 				// Handle errors here
// 				console.log('ERRORS: ' + textStatus);
// 				// STOP LOADING SPINNER
// 			}
// 		});
// 	}










    //
	// var submitContact = $('#submit_contact'),
	// 	message = $('#msg');
    //
	// submitContact.on('click', function(e) {
	// 	console.log('sonde 2');
	// 	console.log($('#contact-form').attr('data-route'));
	// 	console.log('sonde file', $(this));
    //
	// 	e.preventDefault();
    //
	// 	var $this = $(this);
	// 	var file = new FormData();
	//
	// 	$.ajax({
	// 		type: "POST",
	// 		url: $('#contact-form').attr('data-route'),
	// 		dataType: 'json',
	// 		cache: false,
	// 		enctype: 'multipart/form-data',
	// 		data: $('#contact-form').serialize(),
	// 		// data: file,
	// 		success: function(data) {
    //
	// 			if(data.info !== 'error'){
	// 				$this.parents('form').find('input[type=text],textarea,select').filter(':visible').val('');
	// 				message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
	// 			} else {
	// 				message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
	// 			}
	// 		}
	// 	});
	// });

	
	/* ---------------------------------------------------------------------- */
	/*	Contact Map
	/* ---------------------------------------------------------------------- */
	var contact = {"lat":"-33.880641", "lon":"151.204298"}; //Change a map coordinate here!

	try {
		var mapContainer = $('#map');
		mapContainer.gmap3({
			action: 'addMarker',
			marker:{
				options:{
					icon : new google.maps.MarkerImage('images/marker.png')
				}
			},
			latLng: [contact.lat, contact.lon],
			map:{
				center: [contact.lat, contact.lon],
				zoom: 16
				},
			},
			{action: 'setOptions', args:[{scrollwheel:false}]}
		);
	} catch(err) {

	}

	/* ---------------------------------------------------------------------- */
	/*	magnific-popup
	/* ---------------------------------------------------------------------- */

	try {
		// Example with multiple objects
		$('.zoom').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});

	} catch(err) {

	}

	/* ---------------------------------------------------------------------- */
	/*	Header animate after scroll
	/* ---------------------------------------------------------------------- */

	(function() {

		var docElem = document.documentElement,
			didScroll = false,
			changeHeaderOn = 50;
			document.querySelector( 'header' );
		function init() {
			window.addEventListener( 'scroll', function() {
				if( !didScroll ) {
					didScroll = true;
					setTimeout( scrollPage, 100 );
				}
			}, false );
		}
		
		function scrollPage() {
			var sy = scrollY();
			if ( sy >= changeHeaderOn ) {
				$( 'header' ).addClass('active');
			}
			else {
				$( 'header' ).removeClass('active');
			}
			didScroll = false;
		}
		
		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}
		
		init();
		
	})();

	/* ---------------------------------------------------------------------- */
	/*	menu responsive
	/* ---------------------------------------------------------------------- */
	var menuClick = $('a.elemadded'),
		navbarVertical = $('.nav-menu');
		
	menuClick.on('click', function(e){
		e.preventDefault();

		if( navbarVertical.hasClass('active') ){
			navbarVertical.removeClass('active');
		} else {
			navbarVertical.addClass('active');
		}
	});

	winDow.bind('resize', function(){
		navbarVertical.removeClass('active');
	});

});

	//Quote Form
	var submitQuote = $('#submit-quote'),
		message = $('#quote-msg');

	submitQuote.on('click', function(e){
		e.preventDefault();

		var $this = $(this);
		
		$.ajax({
			type: "POST",
			url: 'quote.php',
			dataType: 'json',
			cache: false,
			data: $('#quote-form').serialize(),
			success: function(data) {

				if(data.info !== 'error'){
					$this.parents('form').find('input[type=text],textarea').filter(':visible').val('');
					$this.parents('form').find('select').filter(':visible');
					message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
				} else {
					message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
				}
			}
		});
	});