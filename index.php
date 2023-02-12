<?php
header('Access-Control-Allow-Origin: *');

$lines = explode("\n", file_get_contents('/home/wibusof1/bot.arg.my.id/quotes.txt'));
$line = $lines[mt_rand(0, count($lines) - 1)];
list($text, $author) = explode('|', $line);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Meta -->
  <meta name="description"
    content="Bot whatsapp gratis online 24 jam, gratis tambah limit, premium, join gc, dan semua ayo coba sekarang.">
  <meta property="og:site_name" content="ARG BOT WHATSAPP">
  <meta property="og:site" content="https://www.wibusoft.com/">
  <meta property="og:title" content="ARG BOT WHATSAPP">
  <meta property="og:description"
    content="Bot whatsapp gratis online 24 jam, gratis tambah limit, premium, join gc, dan semua ayo coba sekarang.">
  <meta property="og:image" content="https://www.wibusoft.com/Wibusoft-02.jpg">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="300">
  <meta property="og:image:height" content="300">
  <meta property="og:url" content="https://www.wibusoft.com/">
  <meta property="og:type" content="website">
  <meta name="author" content="Wibusoft">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="keywords"
    content="Whatsapp Bot, WhatsApp Bot, WA Bot, Chat WA Bot, Chat Whatsapp Bot, WhatsApp Bot Creator, Whatsapp bot Creator, Whatsapp bot creator, bot WA, bot wa">
  <meta http-equiv="Cache-control" content="no-cache">
  <title>ARG BOT WHATSAPP</title>
  <link rel="shortcut icon" type="image/png" href="https://www.wibusoft.com/Wibusoft-02.jpg">
  <link rel="icon" href="https://www.wibusoft.com/Wibusoft-02.jpg">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
  <link href="cloud.css" rel="stylesheet" />
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

.telegram-popup{
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
  height: 130px;
  min-width: 15%;
  width: 200px;
  background-color: #FFFFFF;
   
  position: fixed;
  bottom: 10px;
  left: 20px; 
  
  /*round corners*/
  border-radius: 10px;
  /*cool option borders.*/ 
  
}

/*text stuff*/
.telegram-popup p{
  color: #000000;
  padding: 4px;
  font-family: 'Ubuntu', sans-serif;
}

.telegram-button{
  background-color: #25d366;
  width: 80%;
  border-radius: 25px;
}

.telegram-button:hover{
  background-color: #25d360;
}

.telegram-button p{
  color: #FFFFFF;
  font-size: 15px;
  /*padding makes the link like a bubble*/
  padding: 10px;
}

.telegram-button-link:link{
  text-decoration: none;
}

  </style>
</head>

<body class="" onload="getvisitor();">
  <div class="main-content">
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
      style="min-height: 600px; background-image: url(https://source.unsplash.com/featured/300x203); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">ARG BOT WHATSAPP</h1>
            <p class="text-white mt-0 mb-5">Bot whatsapp gratis online 24 jam, gratis tambah limit, premium, join gc,
              dan semua ayo coba sekarang.</p>
            <a style="color:White;" class="btn btn-info" onclick="chat()">Coba Sekarang</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a>
                    <img src="https://bot.arg.my.id/Wibusoft-02.png" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a style="color:White;" class="btn btn-sm btn-success mr-4">Online</a>
                <a style="color:White;" class="btn btn-sm btn-default float-right" id="num"
                  onclick="chat()">6281522929116</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading" id="visitor">00</span>
                      <span class="description">Visitor</span>
                    </div>
                    <div>
                      <span class="heading" id="sumALL">00</span>
                      <span class="description">Opened</span>
                    </div>
                    <div>
                      <span class="heading">250+</span>
                      <span class="description">Menu</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  ARG BOT
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Whatsapp bot
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Informasi
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Gratis untuk join/add ke grub, tambah limit, join premium, DAN
                  SEMUANYA jika ingin membuat bot whatsapp sendiri silahkan klik <a
                    href='https://wibusoft.com'>Wibusoft</a>
                </div>
                <hr class="my-4" />
                <p class="comments"><?=$text?></p>
                <a><?=$author?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Cammond</h3>
                </div>
                <div class="col-4 text-right">
                  <a style="color:White;" class="btn btn-sm btn-primary">ALL PREFIX</a>
                </div>
              </div>
            </div>
            <div class="card-body">

              <h6 class="heading-small text-muted mb-4">Umum</h6>
              <div class="pl-lg-4">

                <div class="row align-items-center">
                  <div class="col-8">

                    <div class="d-flex justify-content-between">
                      <a class="btn btn-sm btn-primary" style="color:White;" onclick="opencammond('menu')"
                        id="menu"></a>
                      <a class="btn btn-sm btn-primary" style="color:White;" onclick="opencammond('anonymous')"
                        id="anonymous"></a>
                      <a class="btn btn-sm btn-primary" style="color:White;" onclick="opencammond('dashboard')"
                        id="dashboard"></a>
                    </div>

                    <br>

                    <div class="d-flex justify-content-between">
                      <a class="btn btn-sm btn-primary" style="color:White;" onclick="opencammond('infobot')"
                        id="infobot"></a>
                      <a class="btn btn-sm btn-primary" style="color:White;" onclick="opencammond('limit')"
                        id="limit"></a>
                      <a class="btn btn-sm btn-primary" style="color:White;" onclick="opencammond('owner')"
                        id="owner"></a>
                      <a class="btn btn-sm btn-primary" style="color:White;" onclick="opencammond('profile')"
                        id="profile"></a>
                    </div>

                  </div>
                </div>
              </div>


              <hr class="my-4" />
              <h6 class="heading-small text-muted mb-4">MENU FORM</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="input-city">Join GC</label>
                      <div class="row align-items-center">
                        <div class="col-8">
                          <input id="link" class="form-control form-control-alternative"
                            placeholder="https://chat.whatsapp.com/xxxxxxxx" type="text" required>
                        </div>
                        <div class="col-4">
                          <a style="color:White;" onclick="join()" class="btn btn-sm btn-primary" id="Fromjoin"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <form disable>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Add Limit</label>
                        <div class="row align-items-center">
                          <div class="col-8">
                            <input id="nomer" class="form-control form-control-alternative" size="5"
                              placeholder="62XXXXX" type="phone" required>
                          </div>
                          <div class="col-4">
                            <input id="limitcnt" class="form-control form-control-alternative" size="3" placeholder="5"
                              type="number" required>
                          </div>
                        </div>
                        <br>
                        <button style="color:White;" onclick="addlimit()" class="btn btn-sm btn-primary"
                          id="Fromaddlimit"></button>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">

                      </div>
                    </div>

                  </div>
                </form>
              </div>
              <hr class="my-4" />
              <h6 class="heading-small text-muted mb-4">Premium</h6>
              <div class="pl-lg-4">
                <div class="form-group">
                  <label>Add Premium</label>
                  <textarea rows="2" class="form-control form-control-alternative"
                    placeholder="ARGHOZALIIIIIIIIIIIIIIIII"
                    disabled>Jika ingin premium silahkan chat owner, langsung di add oleh owner</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2022 <a href="https://arg.my.id" class="font-weight-bold ml-1" target="_blank">ARGHOZALIDEV</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://t.me/microcloudfile_bot" class="nav-link" target="_blank">MicroCloud Bot</a>
              </li>
              <li class="nav-item">
                <a href="https://t.me/CheckNomorBot" class="nav-link" target="_blank">Cek Nomor</a>
              </li>
              <li class="nav-item">
                <a href="https://www.youtube.com/channel/UCIdz7HVMr8un50NMcft-XjQ" class="nav-link"
                  target="_blank">Youtube</a>
              </li>
              <li class="nav-item">
                <a href="https://instagram.com/arghozalidev_" class="nav-link" target="_blank">Instagram</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
      
      
            <!--popup-->
      <div class="telegram-popup" align="center">
  
  <p>Join gc bot.</p>

  <a href="https://chat.whatsapp.com/BeMwBYZHWewBaR0YdvunQc" class="telegram-button-link"><div class="telegram-button">
    <p>
      <i class="fab fa-whatsapp"></i>
       Join
    </p>
    
    </div></a>
</div>
      <!--popup-->
      
    </div>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    function getvisitor() {
      var xhr = new XMLHttpRequest();
      var url = 'https://api.countapi.xyz/hit/arg.my.id/bot';
      xhr.onloadend = function () {
        data = JSON.parse(this.responseText);
        document.getElementById("visitor").textContent = data.value

      };
      xhr.open("GET", url, true);
      xhr.send();
    }

    let num = "628812727052";
    var arr = [];
    const arraySparse = ["menu", "anonymous", "dashboard", "infobot", "limit", "owner", "profile", "Fromjoin",
      "Fromaddlimit"
    ];
    let numCallbackRuns = 0;
    arraySparse.forEach((element) => {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", `https://api.countapi.xyz/get/bot.arg.my.id/${element}`);
      xhr.responseType = "json";
      xhr.onload = function () {
        numCallbackRuns++;
        arr.push(this.response.value);

        let result = element.includes("From");

        if (result) {
          document.getElementById(element).innerHTML = `Open ${this.response.value}`;
        } else {
          document.getElementById(element).innerHTML = `.${element} ${this.response.value}`;
        }
        if (numCallbackRuns == arraySparse.length) {
          var sum = 0;
          for (var i = 0; i < arr.length; i++) {
            sum += parseInt(arr[i]);

          }
          document.getElementById('sumALL').innerHTML = sum;
        }
      }

      xhr.send();

    });


    var a = document.getElementById('num');

    document.getElementById("num").innerHTML = num;

    function chat() {
      var win = window.open(`https://wa.me/${num}?text=.menu`, '_blank');
      die()
    }

    function wb() {
      var win = window.open(`https://www.wibusoft.com/`, '_blank');
      die()
    }

    function join() {

      let link = document.getElementById("link").value;

      let result = link.includes("chat.whatsapp.com");

      if (result) {
        var win = window.open(`https://wa.me/${num}?text=.join ${link}`, '_blank');

        opencammond('Fromjoin');
      } else {
        alert('link grub tidak valid!')
        die()
      }


    }

    function opencammond(cmd) {
      window.open(`https://wa.me/${num}?text=.${cmd}`, '_blank');
      var xhr = new XMLHttpRequest();
      xhr.open("GET", `https://api.countapi.xyz/hit/bot.arg.my.id/${cmd}`);
      xhr.responseType = "json";
      xhr.onload = function () {

      }

      xhr.send();
    }


    function addlimit() {
      let nomer = document.getElementById("nomer").value;
      let limit = document.getElementById("limitcnt").value;

      if (nomer) {
        if (!limit == '') {
          var win = window.open(`https://wa.me/${num}?text=.addlimit ${nomer} ${limit}`, '_blank');

          opencammond('Fromaddlimit');
          die()
        } else {
          alert('Masukan limit!')
        }
      } else {
        alert('Masukan nomer!')
      }
    }
  </script>
</body>

</html>