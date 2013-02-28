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



   // variable to get fullsails latitude and long
   /*     var FullSail = new google.maps.LatLng(28.594461, -81.304002);


  // setting the map to center around Fullsail
        var mapOptions = {
            zoom: 18,
            center: FullSail,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

 
        /*=================== FS3C =======================*/
/*        var FS3C_Bounds = new google.maps.LatLngBounds(
       		new google.maps.LatLng(28.594256, -81.304249),
       		new google.maps.LatLng(28.594663, -81.303696));

        var FS3C_map = new google.maps.GroundOverlay("FS3C.png", FS3C_Bounds);

        FS3C_map.setMap(map);


        /*=================== FS3B1 =======================*/
      /*  var FS3B1_Bounds = new google.maps.LatLngBounds(
        	new google.maps.LatLng(28.594906, -81.304305),
        	new google.maps.LatLng(28.595417, -81.303560));

        var FS3B1_map = new google.maps.GroundOverlay("FS3B1.png", FS3B1_Bounds);

        FS3B1_map.setMap(map); */
        
        
/*         	         $('#searchViewdisplay').addClass('hide'); */

        
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

$('#clickableGPS').click(function (e) { //enables the use of GPS and moved the user's marker to there location 
	alert("hello");
		//map.setCenter(FullSail);

        return false;
    });

	
	
	
	$("#sasBtnsubmit").on('click', function(){
		
		$("#sasSuccess").removeClass("hide");
	
	});


	
	
        
        

                         
});