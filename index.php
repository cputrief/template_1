<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<?php
include('navbar.php');
?>
<!-- form -->
    <div class="container">
        <div class="row">
            <div class="col-6 m-auto mt-5">
                <div class="card">
                    <div class="card-header text-center">
                       <h3>👩‍⚕️Welcome To Klinik Sehat</h3> 
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">👋Hai!!</h5>
                        <p class="card-text">Selamat datang di klinik sehat</p>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

    <script src="js/bootstrap.js"></script> 
    <script src="js/bootstrap.bundle.js"></script>
</body>
<!-- Loading Animation Kartun -->
<style>
#loader {
  position: fixed;
  left: 0; top: 0; width: 100vw; height: 100vh;
  background: #f0f8ff;
  display: flex; align-items: center; justify-content: center;
  z-index: 9999;
  transition: opacity 0.5s;
}
.cartoon-face {
  width: 120px; height: 120px;
  background: #ffe066;
  border-radius: 50%;
  position: relative;
  box-shadow: 0 4px 16px #bbb;
  animation: bounce 1s infinite alternate;
  display: flex; align-items: center; justify-content: center;
}
@keyframes bounce {
  0% { transform: translateY(0);}
  100% { transform: translateY(-30px);}
}
.eye {
  width: 18px; height: 18px;
  background: #fff;
  border-radius: 50%;
  position: absolute;
  top: 40px;
}
.eye.left { left: 32px; }
.eye.right { right: 32px; }
.pupil {
  width: 8px; height: 8px;
  background: #222;
  border-radius: 50%;
  position: absolute;
  top: 6px; left: 5px;
  animation: blink 2s infinite;
}
@keyframes blink {
  0%, 90%, 100% { height: 8px;}
  95% { height: 2px;}
}
.smile {
  width: 40px; height: 20px;
  border-bottom: 4px solid #e17055;
  border-radius: 0 0 40px 40px;
  position: absolute;
  bottom: 28px; left: 50%; transform: translateX(-50%);
}
.blush {
  width: 14px; height: 6px;
  background: #ffb3b3;
  border-radius: 50%;
  position: absolute;
  top: 70px;
}
.blush.left { left: 18px;}
.blush.right { right: 18px;}
</style>
<div id="loader">
  <div class="cartoon-face">
    <div class="eye left"><div class="pupil"></div></div>
    <div class="eye right"><div class="pupil"></div></div>
    <div class="smile"></div>
    <div class="blush left"></div>
    <div class="blush right"></div>
  </div>
</div>
<script>
window.onload = function() {
  setTimeout(function() {
    document.getElementById('loader').style.opacity = '0';
    setTimeout(function() {
      document.getElementById('loader').style.display = 'none';
    }, 500);
  }, 3000);
};
</script>
<!-- ...existing code... -->
</html>