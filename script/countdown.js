        function startTimer(duration) {
            var timer = duration, minutes, seconds;
            var display = $("#countdown");
            var intervalId = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                display.text(minutes + " : " + seconds);
                if (--timer < 0) {
                    clearInterval(intervalId);
                    $(".resend").css("opacity", "1");
                    $("span.send").click(scountdown);
                }
            }, 1000);
        }
        function scountdown(){
            $("span.send").off();
            $(".resend").css("opacity", "0.5");
            startTimer(60 * 3);
        }
        $(document).ready(scountdown);
