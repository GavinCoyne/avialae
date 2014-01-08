$(document).ready(function(){

	//Login javascipting
	$('#login').submit(function (e)
	{
		e.preventDefault();
		var username = $('#loginDiv').find('#usernameLogin').val();
		var password = $('#loginDiv').find('#passwordLogin').val();
		
		$.ajax({
			type:"POST",
			url:"login/login",
			data :{	
				username : username,
				password : password
			}, 
			dataType :"json",
			success : function(data){
				console.log(data);
				if(!data.errors)
				{
						location.reload();
				}
				else
				{
					$('#registerAlert').text(data.sucess);
					$('#registerAlert').removeClass("alert-danger");
					$('#registerAlert').addClass("alert-sucess");
					$('#registerAlert').show();	
				}
			}
			});
		
	});
	
	$('#registerForm').submit(function (e)
	{
		e.preventDefault();
		var username = $('#registerDiv').find('#username').val();
		var password =  $('#registerDiv').find('#password').val();
		var passwordCheck =  $('#registerDiv').find('#passwordCheck').val();
		var email =  $('#registerDiv').find('#email').val();
		
		if(password != passwordCheck)
		{
			$('#registerAlert').text('Error: Passowrds did not match');
			$('#registerAlert').removeClass("alert-sucess");
			$('#registerAlert').addClass("alert-danger");
			$('#registerAlert').show();	
			return;
		}
		
		$.ajax({
			type:"POST",
			url:"register/register",
			data :{	
				username : username,
				password : password,
				email : email
			}, 
			dataType :"json",
			success : function(data){
				console.log(data);
				if(data.errors)
				{
					var errors = '';
					data.errors.forEach(function(index){
						errors += index+'<br>';
					});
					 console.log(errors);
						$('#registerAlert').text(errors);
						$('#registerAlert').removeClass("alert-sucess");
						$('#registerAlert').addClass("alert-danger");
						
						$('#registerAlert').show();	
				}
				else
				{
					$('#registerAlert').text('Succes: registered ' + username);
					$('#registerAlert').removeClass("alert-danger");
					$('#registerAlert').addClass("alert-sucess");
					$('#registerAlert').show();	
					
					setTimeout(function(){location.reload()}, 3000);
					
				}
			}
			});
		
		
		
	});
	
	$('#logoutButton').click(function(e){
		$.ajax({
			type:"POST",
			url:"login/logout",
			data :{	
			}, 
			dataType :"json",
			success : function(data){
				location.reload();
			}
		});
		
	});
	
	$('#activateRound').submit(function(e){
		e.preventDefault();
		var race = $('#race').val();

		$.ajax({
			type:"POST",
			url:"ativateAjax",
			data :{	
				race : race
			}, 
			dataType :"json",
			success : function(data){
				location.reload();
			}
		});
	});
	
	$('.buyUnitsForm').submit(function(e){
			e.preventDefault();
			if(e.target[1].value != "" &&  e.target[1].value == parseInt(e.target[1].value) && parseInt(e.target[1].value) > 0)
			{
				$.ajax({
					type:"POST",
					url:"recruitAjax",
					data :{	
						amount : e.target[1].value,
						type : e.target[0].value
					}, 
					dataType :"json",
					success : function(data){
						console.log(data);
						if(!data.errors)
						{
								location.reload();
						}else{
							alert(data.errors);
						}
					}
				});
			}
			else
			{
				alert('not a valid amount');
			}
	});
	
	$('.buyBuildingsForm').submit(function(e){
		e.preventDefault();
		
		console.log(e, e.target[1].value);
		if(e.target[1].value != "" &&  e.target[1].value == parseInt(e.target[1].value))
		{
			$.ajax({
				type:"POST",
				url:"buildAjax",
				data :{	
					amount : e.target[1].value,
					type : e.target[0].value
				}, 
				dataType :"json",
				success : function(data){
					console.log(data);
					if(!data.errors)
					{
							location.reload();
					}else{
						alert(data.errors);
					}
				}
			});
		}
		else
		{
			alert('not a valid amount');
		}
	});
	
	$('#attackForm').submit(function(e){
		e.preventDefault();
		$.ajax({
			type:"POST",
			url:"attackAjax",
			data :{	
				position : $('#attackPosition').val(),
				turns : $('#attackTurns').val(),
				target : $('#target').val()
			}, 
			dataType :"json",
			success : function(data){
				console.log(data);
				if(!data.errors)
				{
						var logs = "<tr><td>";
						logs += data.attacker + " you have lost: ";
						for (var k in data.AttckerLosses){
						    if (data.AttckerLosses.hasOwnProperty(k)) {
						         logs += ( data.AttckerLosses[k] + ' ' + k + ' ');;
						    }
						}
						logs += $('#target').val() + " has lost: ";
						for (var k in data.TargetLosses){
						    if (data.TargetLosses.hasOwnProperty(k)) {
						    	logs += ( data.TargetLosses[k] + ' ' + k + ' ');
						    }
						}
						
						logs += "you have stolen " + Math.floor(data.gold) + " gold</td></tr>";

						$(logs).prependTo('#attackLogsAttack')
						
				}else{
					alert(data.errors);
				}
			}
		});
	});
	
	
	/**
	 * Messaging Submit
	 */
	$('#sendForm').submit(function (e)
	{
		e.preventDefault();
		
		$.ajax({
			type:"POST",
			url:"sendAjax",
			data :{	
				body : $('#messageBody').val(),
				to : $('#to').val(),
			}, 
			dataType :"json",
			success : function(data){
				
				
			}
		});
	});
	
	/**
	 * Mark Message as read
	 * 
	 * 
	 */
	$('.readMessage').click(function (e){
		e.preventDefault();
		$.ajax({
			type:"POST",
			url:"Messaging/readAjax",
			data :{	
				messageID : $(e.target).next().val(),

			}, 
			dataType :"json",
			success : function(data){
					location.reload();
			}
		});
	});
	
	/**
	 * Mark Message as Delete
	 * 
	 * 
	 */
	$('.deleteMessage').click(function (e){
		e.preventDefault();
		$.ajax({
			type:"POST",
			url:"Messaging/deleteAjax",
			data :{	
				messageID : $(e.target).next().val(),

			}, 
			dataType :"json",
			success : function(data){
				location.reload();	
			}
		});
	});
	
});


	
