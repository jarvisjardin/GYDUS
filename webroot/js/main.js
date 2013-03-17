/* 
					  
     Geoffrey Ganga: 
     				  bakerskategg09@gmail.com
     				  (678) 825-5628
     				  
      Jarvis Jardin: 
      				 jjardin@rocketmail.com
      				  (201) 779-6182
      				  
   ------------------------------------------


*/

// javascript document start
$(document).ready(function () {
    //creating a variable for sound and for the source to the song
    var snd = document.createElement('audio'),// variable for sound
        src = document.createElement('source');// variable for source
        
   // creating variable for Fullsails position
   // var FullSail = new google.maps.LatLng(28.594461, -81.304002);

    // setting the sound and source variables
    src.src = "http://s3.amazonaws.com/moovweb-marketing/playground/harlem-shake.mp3"; // source location
    src.type = "audio/mp3"; // source type
    src.loop = 'true'; // make it loop
    snd.appendChild(src); // adding it
    snd.preload = 'null'; // do not preload


/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


				HARLEM SHAKE KONAMI CODE


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */


    var success = function () {
        console.log('Konami Success');
        alert("DO THE HARLEMSHAKE");

        harlemShake()// harlem shake function
        setTimeout(function () { 
            snd.play()
        }, 900);

        setTimeout(function () {
            history.go(0)
        }, 32000)
    };
    
    var konami = new Konami(success);
    
 

/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


				CLIENT SIDE VALIDATION


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */








    /*--  REGISTER USERNAME VALIDATION      --*/


    // when you start to type in the input feild
    $('.gydus-reg-name-input').keydown(function (event) {
    console.log($('.gydus-reg-name-input').keydown());
    	// if it is wrong
        if ($('.gydus-reg-name-input').val().length < 4) { // if the value is less than 4 characters
            $('.gydus-reg-name-input').css("border", "1px solid red");// css style the error messages
            $('.wronguser').removeClass('hide'); // display the error message

        // if successful input
        } else {
            $('.gydus-reg-name-input').css("border", "2px solid green");// css style the success messages
            $('.checkuser').removeClass('hide');// display the success message
            $('.wronguser').addClass('hide');// hide the error message

        }// end of else
    })//end of name check


    /*--       REGISTER PASSWORD VALIDATION      --*/

    // when you start to type in the input feild
    $('#reg-inputPassword').keydown(function (event) {
    
        // if it is wrong
        if ($('#reg-inputPassword').val().length < 5) { // if the value is less than 5 characters
            $('#reg-inputPassword').css("border", "1px solid red"); // css style the error messages

            $('.wrongpass').removeClass('hide'); // display the error message

        } else {
            $('#reg-inputPassword').css("border", "2px solid green"); // css style the success messages
            $('.checkpass').removeClass('hide'); // display the success message
            $('.wrongpass').addClass('hide'); // hide the error message
        }// end of else
    })// end of password check



    /*--       REGISTER EMAIL VALIDATION      --*/
    
    // when you start to type in the input feild
    $('.gydus-reg-email-input').keydown(function (event) {

        var regEmailInput = $('.gydus-reg-email-input').val() //variable for the value of the email input
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; // regex rules for email. must have the "@" followed by "."
        
        // if it is wrong
        if (regEmailInput == '') { // if the email input is blank
            $('.gydus-reg-email-input').css("border", "1px solid red"); // css style the error messages
            $('.wrongemail').removeClass('hide');// display the error message


        } else if (!emailReg.test(regEmailInput)) { // if the email does not match the regex rules
            $('.gydus-reg-email-input').css("border", "1px solid red");// css style the error messages
            $('.wrongemail').removeClass('hide');// display the error message

        } else { // if it does pass the regex rules and it is not blank
            $('.gydus-reg-email-input').css("border", "2px solid green"); // css style the success messages
            $('.checkemail').removeClass('hide');// display the success message
            $('.wrongemail').addClass('hide'); // hide the error message
        }// end of else
    })// end of email check



    /*------LOGIN FRONT SIDE VALIDATION---------*/

    /*--       LOGIN EMAIL VALIDATION      --*/
    
     // when you start to type in the input feild
    $('.gydus-login-email-input').keydown(function (event) {

        var regEmailInput = $('.gydus-login-email-input').val(); //variable for the value of the email input
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; //regex rules for email. must have the "@" followed by "."
        
        // if it is wrong
        if (regEmailInput == '') { // if the email is blank
            $('.gydus-login-email-input').css("border", "1px solid red");// css style the error messages
            $('.wrongemail').removeClass('hide');// display the error message


        } else if (!emailReg.test(regEmailInput)) { // if the email does not match the regex rules
            $('.gydus-login-email-input').css("border", "1px solid red"); // css style the error messages
            $('.wrongemail').removeClass('hide');// display the error message

        } else {  // if it does pass the regex rules and it is not blank
            $('.gydus-login-email-input').css("border", "2px solid green"); // css style the success messages
            $('.checkemail').removeClass('hide'); // display the success message
            $('.wrongemail').addClass('hide');// hide the error message


        }//end of else
    })// end of login email check


    /*--       LOGIN PASSWORD VALIDATION      --*/
    
     // when you start to type in the input feild
    $('#login-inputPassword').keydown(function (event) {
    
        // if it is wrong
        if ($('#login-inputPassword').val().length < 5) { // if the value is less than 5 characters
            $('#reg-inputPassword').css("border", "1px solid red"); // css style the error messages
            $('.wrongpass').removeClass('hide'); // display the error message

        } else { // if successful input
            $('#login-inputPassword').css("border", "2px solid green");// css style the success messages
            $('.checkpass').removeClass('hide'); // display the success message
            $('.wrongpass').addClass('hide');// hide the error message
        }// end of else
    })// end of login password check



    /*------SUGGEST A SPOT FRONT SIDE VALIDATION---------*/




    /*--       SAS NAME VALIDATION      --*/
    
    // when you start to type in the input feild
    $('#sasSpotname').keydown(function (event) {
        // if it is wrong
        if ($('#sasSpotname').val().length < 2) { // if the value is less than 2 characters
            $('#sasSpotname').css("border", "1px solid red"); // css style the error messages
            $('.wrongsasSpotname').removeClass('hide'); // display the error message

        } else {// if successful input
            $('#sasSpotname').css("border", "2px solid green"); // css style the success messages
            $('.checksasSpotname').removeClass('hide');// display the success message
            $('.wrongsasSpotname').addClass('hide');// hide the error message

        }//end of else
    })// end of sas spot name


    /*--       SAS DESC VALIDATION      --*/
    
    // when you start to type in the input feild
    $('.gydus-kw-search-spotDesc').keydown(function (event) {
    	// if it is wrong
        if ($('.gydus-kw-search-spotDesc').val().length < 2) { // if the value is less than 2 characters
            $('.gydus-kw-search-spotDesc').css("border", "1px solid red");// css style the error messages
            $('.wrongsasdesc').removeClass('hide');// display the error message

        } else {// if successful input
            $('.gydus-kw-search-spotDesc').css("border", "2px solid green");// css style the success messages
            $('.checksasdesc').removeClass('hide');// display the success message
            $('.wrongsasdesc').addClass('hide');// hide the error message
        }//end of else
    })// end of spot description


/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							CLICK EFFECTS


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */



/*-----------  FIND LOCATION  ---------------*/


	// clicks on the find location button
    $('#map-viewFLbtn').on('click', function () {
        $('#map-viewFLbtn').fadeOut(1500, function () { // find location button fades out in 1.5 seconds
            $('#map-viewFLbtn').addClass('hide');// the find location button hides
            $('#fldropcarret').addClass('hide');// the carret on the find location button hides
            $('#mapSpot').addClass('hide'); // the map hides
            $('#footer').addClass('hide');// the footer hides
        });// end of find location animation click

        $("#searchViewdisplay").slideDown(1500, function () { // the search view slides down in 1.5 seconds
            $("input[type=text]").val('');// sets the find location input blank
        });// end of search view slide down

        return false;

    }); // end of find location click   


// closing the search view
	//clicks the close button
    $("#findLbtnX").on('click', function () { 
        $("#searchViewdisplay").slideUp(1500);// search view slides up in 1.5 seconds
        $('#map-viewFLbtn').fadeIn(1000, function () { // find location button fades in 1 second
            $('#map-viewFLbtn').removeClass('hide');// displays the find location button
            $('#fldropcarret').removeClass('hide');// displays the carret on the find location
        });// end of findlocation fade in
        
        
        $('#mapSpot').removeClass('hide');// displays the map
        $('#footer').removeClass('hide');// displays the footer


    }) // END of Closing the Finding Location


/*-----------  UPDATING ACCOUNT SETTINGS SUCCESS  ---------------*/

	//clicks update
    $("#updateInfobtn").on('click', function () {
        $('#accountsuccess').removeClass('hide');//displays the success message

    })// end of update info click







/*-----------  GYDUS POSITION  ---------------*/

    $('#gpsBtn').click(function (e) { //enables the use of GPS and moved the user's marker to there location 

        map.panTo(FullSail);//centers the map the Fullsail

        return false;
    });// end of gps position
    
    
/*-----------  SUGGEST A SPOT SUCCESS ---------------*/
	// clicks submit on suggest a spot
    $("#sasBtnsubmit").on('click', function () {
        $("#sasSuccess").removeClass("hide");// displays the success

    });// end of sas button submit



/*-----------  NAVIGATION ---------------*/	      
  
  //clicks the navigation button
    $('#foot-nav').click(function () {
    	$('.navigationforms').removeClass('hide');//displays the navigation form
    });// end of navigation button click
    
    //closing the navigation form
    $('#closenav').click(function () {
    	$('.navigationforms').addClass('hide');// hides the navigation form
    });


/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# 


				FLASH DATA ANIMATIONS


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */

    /*---------- flashdata time out -----------------*/
    $('#sasPromptsuccess').fadeOut(3000, function () { // success message fades out in 3 seconds
        $('#sasPromptsuccess').addClass('hide'); // hides the success message
    });// end of sas success 
    

    /*---------- flashdata time out -----------------*/
    $('#editAccPromptsuccess').fadeOut(3000, function () { // success message fades out in 3 seconds
        $('#editAccPromptsuccess').addClass('hide');// hides the success message
    });// end of edit account success
    
    


/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							AJAX 


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#*/


/*-------------- AJAX TO LOAD OVERLAYS------------------------*/
	// getting the overlays
	$.ajax({                                      
	      url: '../../webroot/js/xhr/getOverlays.php',       //the script to call to get data          
	      dataType: 'json',                //data format      
	      success: function(data)          //on recieve of reply
	      {
			console.log(data);	      		
	      },
	      error:function(){
		      console.log('error');
		      
	      } 
    });// end of overlays ajax call


                         

});// end of document