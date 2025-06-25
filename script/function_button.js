 let inputs = $("form#formPin input");
        let currentInput = 0;
        function inputKeypad(value, event) {
            if (currentInput < inputs.length) {
                inputs.eq(currentInput).val(value);
                currentInput++;
                checkAllInputsFilled();
            }
        }
        function checkAllInputsFilled() {
            let allFilled = true;
            inputs.each(function() {
                if ($(this).hasClass("pin") && $(this).val() === "") {
                    allFilled = false;
                    return false;
                }
            });
            if (allFilled) {
                $("#formPin").submit();
                $("#formPin .line button").prop("disabled", true);
            } else {
                $("#formPin .line button").prop("disabled", false);
            }
        }
        function deleteInput() {
            if (currentInput > 0) {
                currentInput--;
                inputs.eq(currentInput).val("");
                checkAllInputsFilled();
            }
        }