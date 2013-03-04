/* 
					  
     Geoffrey Ganga: 
     				  bakerskategg09@gmail.com
     				  (678) 825-5628
     				  
      Jarvis Jardin: 
      				 jjardin@rocketmail.com
      				  (201) 779-6182
      				  
   ------------------------------------------
	The below code is accessing the Google Maps APIv3 and the Google Places API
	Also using maxmind for ip location

*/
$(document).ready(function() {

	
	var success = function() {
			console.log('Konami Success');			
			
			$.getScript("../../webroot/js/harlemshake.js", function(){

				console.log('got the JS');
			   alert("DO THE HARLEMSHAKE!");
			   // here you can use anything you defined in the loaded script
			
			});
	
	}
	
		
	var konami = new Konami(success);

/*------REGISTER FRONT SIDE VALIDATION---------*/




  /*--       REGISTER USERNAME VALIDATION      --*/

$('.gydus-reg-name-input').keydown(function(event){
	 if($('.gydus-reg-name-input').val().length < 4){
		 $('.gydus-reg-name-input').css("border", "1px solid red");
		 		 		 $('.wronguser').removeClass('hide');

	 }else{
		 		 $('.gydus-reg-name-input').css("border", "2px solid green");
		 		 $('.checkuser').removeClass('hide');
		 		 $('.wronguser').addClass('hide');

	 }
 })
 
 
  /*--       REGISTER PASSWORD VALIDATION      --*/

 $('#reg-inputPassword').keydown(function(event){
	 if($('#reg-inputPassword').val().length < 5){
		 $('#reg-inputPassword').css("border", "1px solid red");
		 $('.wrongpass').removeClass('hide');

	 }else{
		 		 $('#reg-inputPassword').css("border", "2px solid green");
		 		 $('.checkpass').removeClass('hide');
		 		 $('.wrongpass').addClass('hide');
	 }
 })
 
 
 
 /*--       REGISTER EMAIL VALIDATION      --*/
  $('.gydus-reg-email-input').keydown(function(event){
  
  	var regEmailInput = $('.gydus-reg-email-input').val()
  	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	 if(regEmailInput==''){
		 $('.gydus-reg-email-input').css("border", "1px solid red");
		 		 $('.wrongemail').removeClass('hide');


	 }else if(!emailReg.test(regEmailInput)){
		 $('.gydus-reg-email-input').css("border", "1px solid red");
		 $('.wrongemail').removeClass('hide');

	 }else{
		 $('.gydus-reg-email-input').css("border", "2px solid green");
		 $('.checkemail').removeClass('hide');
		 $('.wrongemail').addClass('hide');


	 }
 })



/*------LOGIN FRONT SIDE VALIDATION---------*/

 /*--       LOGIN EMAIL VALIDATION      --*/
  $('.gydus-login-email-input').keydown(function(event){
  
  	var regEmailInput = $('.gydus-login-email-input').val()
  	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	 if(regEmailInput==''){
		 $('.gydus-login-email-input').css("border", "1px solid red");
		 		 $('.wrongemail').removeClass('hide');


	 }else if(!emailReg.test(regEmailInput)){
		 $('.gydus-login-email-input').css("border", "1px solid red");
		 $('.wrongemail').removeClass('hide');

	 }else{
		 $('.gydus-login-email-input').css("border", "2px solid green");
		 $('.checkemail').removeClass('hide');
		 $('.wrongemail').addClass('hide');


	 }
 })
 
 
   /*--       LOGIN PASSWORD VALIDATION      --*/

 $('#login-inputPassword').keydown(function(event){
	 if($('#login-inputPassword').val().length < 5){
		 $('#reg-inputPassword').css("border", "1px solid red");
		 $('.wrongpass').removeClass('hide');

	 }else{
		 		 $('#login-inputPassword').css("border", "2px solid green");
		 		 $('.checkpass').removeClass('hide');
		 		 $('.wrongpass').addClass('hide');
	 }
 })
 
 
 
 /*------SUGGEST A SPOT FRONT SIDE VALIDATION---------*/




  /*--       SAS NAME VALIDATION      --*/

$('#sasSpotname').keydown(function(event){
	 if($('#sasSpotname').val().length < 2){
		 $('#sasSpotname').css("border", "1px solid red");
		 		 		 $('.wrongsasSpotname').removeClass('hide');

	 }else{
		 		 $('#sasSpotname').css("border", "2px solid green");
		 		 $('.checksasSpotname').removeClass('hide');
		 		 $('.wrongsasSpotname').addClass('hide');

	 }
 })
 
 
  /*--       SAS DESC VALIDATION      --*/

 $('.gydus-kw-search-spotDesc').keydown(function(event){
	 if($('.gydus-kw-search-spotDesc').val().length < 2){
		 $('.gydus-kw-search-spotDesc').css("border", "1px solid red");
		 $('.wrongsasdesc').removeClass('hide');

	 }else{
		 		 $('.gydus-kw-search-spotDesc').css("border", "2px solid green");
		 		 $('.checksasdesc').removeClass('hide');
		 		 $('.wrongsasdesc').addClass('hide');
	 }
 })
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 





   // variable to get fullsails latitude and long
        var FullSail = new google.maps.LatLng(28.594461, -81.304002);

        /*-----------Find location click effects---------------*/
         $('#map-viewFLbtn').on('click', function(){   
           $('#map-viewFLbtn').fadeOut(1500, function(){
					$('#map-viewFLbtn').addClass('hide');
					$('#fldropcarret').addClass('hide');
					$('#mapSpot').addClass('hide');	
					$('#footer').addClass('hide');
				});	
			
			$("#searchViewdisplay").slideDown(1500,function(){
				$("input[type=text]").val('');
				
				
			});
			


	         return false;
	         
	     });// END OF displaying find location   
	     
	     
	     
	     	$("#findLbtnX").on('click', function(){
	     		$("#searchViewdisplay").slideUp(1500);
				$('#map-viewFLbtn').fadeIn(1000, function(){
					$('#map-viewFLbtn').removeClass('hide');
					$('#fldropcarret').removeClass('hide');

				});					$('#mapSpot').removeClass('hide');	$('#footer').removeClass('hide');	

		     	
	     	})// END of Closing the Finding Location


/*-----------View Acct Menu---------------*/

	
	$("#viewAcctMenu").on('click', function(){
		
		$("#accountMenu").removeClass("hide");
		$("#viewAcctMenu").addClass("hide");
	});
	
	$("#CloseMenu").on('click', function(){
		
		$("#accountMenu").addClass("hide");
		$("#viewAcctMenu").removeClass("hide");

		
	});
	
	
	//user clicks Accounts Settings from the menu
	$("#AccountSettingsSec").on('click', function(){
		
		
	});
	
	
	
	
	
	
	/*-----------View Gydus Menu---------------*/

	
/*
	$("#logo").on('click', function(){
		
		$("#gydusMenu").removeClass("hide");
	});
	
	$("#gydusCloseMenu").on('click', function(){
		
		$("#gydusMenu").addClass("hide");

		
	});
	
*/
	

	
	

/*---------- GPS Position -----------------*/

$('#gpsBtn').click(function (e) { //enables the use of GPS and moved the user's marker to there location 
		
		//console.log("hello");
		map.panTo(FullSail);

        return false;
    });

	
	
	
	$("#sasBtnsubmit").on('click', function(){
		
		$("#sasSuccess").removeClass("hide");
	
	});


	
	
        
        

                         
});