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

   		
    /*    var FullSail = new google.maps.LatLng(28.594461, -81.304002);


  // setting the map to center around Fullsail
        var mapOptions = {
            zoom: 18,
            center: FullSail,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

 
        /*=================== FS3C =======================*/
   /*     var FS3C_Bounds = new google.maps.LatLngBounds(
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
/* 	         alert("sup bitch") */
		$("#logCheckHead").animate({
			opacity:0.4
		},1500);
		$("#searchViewdisplay").removeClass("hide");
		/*         $("#searchViewdisplay").removeClass("hide").addClass("gydus-block"); */

	         return false;
	     });// END OF displaying find location   
	     
	     	$("#findLbtnX").on('click', function(){
		     	$("#searchViewdisplay").animate({marginTop:"-53.5em", opacity:0},1500, function(){
		     																			$("#findLbtnX").removeClass("hide");
		     																			$("#logCheckHead").animate({opacity:1},1500);
		     																			});
/* 		     	$("#logCheckHead").animate({opacity:"100%"},1500); */
		     	
	     	})


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

	
	$("#viewGydusSetMenu").on('click', function(){
		
		$("#gydusMenu").removeClass("hide");
		$("#viewGydusSetMenu").addClass("hide");
	});
	
	$("#gydusCloseMenu").on('click', function(){
		
		$("#gydusMenu").addClass("hide");
		$("#viewGydusSetMenu").removeClass("hide");

		
	});
	
	

	
	

/*---------- GPS Position -----------------*/

$('#FootGPSBtn').click(function (e) { //enables the use of GPS and moved the user's marker to there location 
                       map.setCenter(FullSail);// centering the map at Fullsail

        return false;
    });

	
        
        

                         
});