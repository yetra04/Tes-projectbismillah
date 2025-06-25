$(document).ready(function(){
    $('#formlog').submit(function(e) {
    event.preventDefault();
    $('.load').fadeIn();
document.getElementById('kirim').innerHTML = "Memproses....";

$("#lonte").show();
 $.ajax({
 type: 'POST',
 url: 'req/login.php',
 data: $(formlog).serialize(),
 datatype: 'text',
 
 complete: function(data) {
            vibr(180);
            
            console.log('Complete')
   setTimeout(function(){
  window.location.href='saldo.html'
 $("#lonte").hide();
 document.getElementById('kirim').innerHTML = "Lanjutkan";
 $('.load').fadeOut();
    }, 500);
        }
    });
 });
    return false;
});   
     
