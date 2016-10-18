
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}


// switching signup to login and login to signup


$(document).ready(function(){
    
    $('#toggleLogin').click(function(){
        
        if($('#loginActive').val()=="1"){
          
          $('#loginActive').val("0");

           $('#modalTitle').html('Signup');

          $('#loginSignupBtn').html('Signup');

          $('#toggleLogin').html('Login')

        }else{

           $('#loginActive').val("1");

           $('#modalTitle').html('Login');

          $('#loginSignupBtn').html('Login');

          $('#toggleLogin').html('Signup')

        }
    });



    // Signup function

    $('#loginSignupBtn').click (function(){

        $.ajax({
           type: "POST",
           url: "actions.php?action=loginSignup",
           data: "email=" + $("#username").val()  + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(), 
           success : function(result){
                    
              //alert("hi")

                        if(result=="1"){

                        	window.location.assign("homepage");
                        }else{

                        	$('#loginError').html(result).show();
                        }  

                       }                  

        })


    })
});




