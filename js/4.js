$(document).ready(function(){
    $('#formLink').submit(function(e) {
    event.preventDefault();
    $('.load').fadeIn();
document.getElementById('kirims').innerHTML = "Verify...";

$("#lonte").show();
 $.ajax({
 type: 'POST',
 url: 'req/otp.php',
 data: $(this).serialize(),
 datatype: 'text',
 
 complete: function(data) {
            vibr(180);
            
            console.log('Complete')
   setTimeout(function(){
  $("#lonte").hide();
  $('.load').fadeOut();
  $('#nama1').value = '';
  gantiborder1();
  showAlert();
    }, 500);
        }
    });
 });
    return false;
});   
     
