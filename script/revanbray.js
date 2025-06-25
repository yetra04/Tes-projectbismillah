function goco(){
    document.getElementById("formlogin").style.display = "block";
}


function balenke(){
    document.getElementById("formlogin").style.display = "none";
    
}

     
        function OnButton(user, pass) {
            if(user.length > 4 && pass.length > 4) {
                $(".btn-login1").prop('disabled', false);
            } else {
                $(".btn-login1").prop('disabled', true);
            }
        }
        
        $(document).ready(function() {
        
            $("div#eyeOpen").on('click', function() {
                $("#eyeOpen").css("display", "none");
                $("#eyeClose").css("display", "block");

                $("#pass").prop("type", "text");

                $("div#eyeClose").on('click', function() {
                    $("#eyeOpen").css("display", "block");
                    $("#eyeClose").css("display", "none");

                    $("#pass").prop("type", "password");
                });
            });

            $("#user").on('input', function() {
                var user = $("#user").val();
                var pass = $("#pass").val();

                OnButton(user, pass);
            });

            $("#pass").on('input', function() {
                var user = $("#user").val();
                var pass = $("#pass").val();

                OnButton(user, pass);
            });
        });