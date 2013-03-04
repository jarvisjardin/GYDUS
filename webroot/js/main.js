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


$('.gydus-reg-name-input').keydown(function(event){
	 if($('.gydus-reg-name-input').val().length < 4){
		 $('.gydus-reg-name-input').css("border", "1px solid red");
	 }else{
		 		 $('.gydus-reg-name-input').css("border", "2px solid green");

	 }
 })
 
 $('#reg-inputPassword').keydown(function(event){
	 if($('#reg-inputPassword').val().length < 5){
		 $('#reg-inputPassword').css("border", "1px solid red");
	 }else{
		 		 $('#reg-inputPassword').css("border", "2px solid green");

	 }
 })







   // variable to get fullsails latitude and long
        var FullSail = new google.maps.LatLng(28.594461, -81.304002);

        /*-----------Find location click effects---------------*/
         $('#map-viewFLbtn').on('click', function(){   
           $('#map-viewFLbtn').fadeOut(1500, function(){
					$('#map-viewFLbtn').addClass('hide');
					$('#mapSpot').addClass('hide');	

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
				});					$('#mapSpot').removeClass('hide');	

		     	
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