$(function(){
	var $button = $('.login-button'),
		$form = $('#login-form');

	$button.on('click', function(e){
		e.preventDefault();
		$form.submit();		
	});

	$form.submit(function(e){
		var	email = $('.login-email').val(),
			pass = $('.login-pass').val();

		e.preventDefault();	
		$button.hide();
		$('.login-loading').css('display', 'block');	

		$.ajax({
			url: 	BASE_URL + 'login/',
			type: 	'post',
			dataType: 'json',
			data: 	{
				email : $('.login-email').val(),
				password : pass
			},
			success: function(data) {
				if (data.error) {
					$('.login-loading').css('display', 'none');	
					$button.show();
					$('#login-form p.error').children('.error').text(data.message).parent().show();
				}else {
					window.location = BASE_URL + 'user_home';
				}
			},
			error: function(xhr, status, error) {
				console.log(status)
				$('.login-loading').css('display', 'none');	
				$button.show();
				$('#login-form p.error').children('.error').text('There\'s a problem at this moment. Please, try again later.').parent().show();
			}
		});
	});
	$('.register-button').on('click',function(e){
		e.preventDefault();
		var	firstName = $('input[name="first_name_register"]').val(),
			lastName = $('input[name="last_name_register"]').val(),
			email = $('input[name="email_register"]').val(),
			department = $('select[name="department_register"]').val(),
			country = $('select[name="country_register"]').val(),
			password = $('input[name="pass_register"]').val(),
			confirm = $('input[name="confirm_pass"]').val();

			
		$(this).hide();
		$('.register-loading').css('display', 'block');	

		$.ajax({
			url: 	BASE_URL + 'register/',
			type: 	'post',
			dataType: 'json',
			data: 	{
				firstName : firstName,
				lastName : lastName,
				email: email,
				department: department,
				country: country,
				password: password,
				confirm: confirm
			},
			success: function(data) {
				if (data.error) {
					$('.register-loading').css('display', 'none');	
					$('.register-button').show();
					$('#register-form p.error').children('.error').text(data.message).parent().show();
				}else {
					window.location = BASE_URL + 'user_home';
				}
			},
			error: function(xhr, status, error) {
				$('.register-loading').css('display', 'none');	
				$('.register-button').show();
				$('#register-form p.error').children('.error').text('There\'s a problem at this moment. Please, try again later.').parent().show();
			}
		});
	});
	$('.committees-list .panel').hover(function(){
		$(this).addClass('callout')
	}, function(){
		$(this).removeClass('callout')
	});

	$('.cast-vote.vote:not(.disabled)').on('click', function(){
		var $button = $(this),
			$load = $button.siblings('.load'),
			voteFor = $button.attr('data-user'),
			voteFrom = $('body').attr('data-user-logged'),
			committeeId = $('.candidates-list').attr('data-committee');

		$button.hide();
		$load.show();

		$.ajax({
			url 	: 	BASE_URL + 'vote/',
			dataType: 	'json' ,
			type 	: 	'post',
			data 	: 	{
				committeeId: committeeId,
				userVoting: voteFrom,
				userVoted: voteFor
			},
			success : function(data){
				console.log(data);
				if (data.error) {
					$button.show().removeClass('success').addClass('secondary disabled').text('Vote');
					$load.hide();
					alert(data.message);
				}else {
					$button.show().addClass('disabled').text('Thanks');					
					$load.hide();
					$button.parents('li').siblings().find('.cast-vote.vote').removeClass('success').addClass('secondary disabled');
				}
			},
			error 	: function(x,s){
				console.log(s);
			}
		});
	});
});