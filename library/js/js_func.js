$(function() {
	var myName = $('#name');
	myName.focus(function() { if ($(this).val() == 'Your Name') {$(this).val('');} });
	myName.blur(function() { if ($(this).val() == '') {$(this).val('Your Name');} });		
	var myEmail = $('#email');
	myEmail.focus(function() { if ($(this).val() == 'Your Email') {$(this).val('');} });
	myEmail.blur(function() { if ($(this).val() == '') {$(this).val('Your Email');} });		
	var myMsg = $('#message');
	myMsg.focus(function() { if ($(this).val() == 'Your Message') {$(this).val('');} });
	myMsg.blur(function() { if ($(this).val() == '') {$(this).val('Your Message');} });	
	var myName2 = $('#name2');
	myName2.focus(function() { if ($(this).val() == 'Name') {$(this).val('');} });
	myName2.blur(function() { if ($(this).val() == '') {$(this).val('Name');} });		
	var myEmail2 = $('#email2');
	myEmail2.focus(function() { if ($(this).val() == 'E-mail') {$(this).val('');} });
	myEmail2.blur(function() { if ($(this).val() == '') {$(this).val('E-mail');} });		
	var myMsg2 = $('#message2');
	myMsg2.focus(function() { if ($(this).val() == 'Comments') {$(this).val('');} });
	myMsg2.blur(function() { if ($(this).val() == '') {$(this).val('Comments');} });	
	$('.slider_m').bxSlider({
		auto: true,
		controls : false,
		mode: 'fade',
		pause : 4000,
		pager: true
	});	
	$('.slider').bxSlider({
		auto: false,
		displaySlideQty: 2,
    	speed : 1000
	});			
	$('.testimonials_slider').bxSlider({
		auto: false,
    	speed : 1000
	});	
}); 