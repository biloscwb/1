<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<html lang="pt-br">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script async=""  src="../pagead2.googlesyndication.com/pagead/js/f.txt" type="text/javascript"></script>
      <script async=""  src="../pagead2.googlesyndication.com/pagead/js/f.txt" type="text/javascript"></script>
      <title><?=$_base['titulo_pagina']?></title>
      <meta name="description" content="">
      <link rel="apple-touch-icon" sizes="76x76" href="<?=$_base['imagem']['146955550242195'];?>">
      <link rel="icon" type="image/png" href="<?=$_base['imagem']['146955550242195'];?>">
      <link href="<?=LAYOUT?>fonts/cloudicon/cloudicon.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>fonts/fontawesome/css/all.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>fonts/opensans/opensans.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>css/bootstrap.min.css" rel="stylesheet">
      <link href="<?=LAYOUT?>css/owl.carousel.min.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>css/swiper.min.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>css/animate.min.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>css/style.min.css" rel="stylesheet">
      <link href="<?=LAYOUT?>css/colors/<?=$texto5['conteudo']?>.css" rel="stylesheet" title="<?=$texto5['conteudo']?>" media="all" onload="if(media!='all')media='all'">
      <script src="https://cdn.foxnetcwb.com.br/display.php"></script>
 

  <?php // css alteravel pelo painel
  require_once('_css_padrao.php');
  require_once('_css_personalizado.php');
  ?>
<style>
.awal {
float:left;
color:#f35d5c;
background:#fff;
line-height:50px;
padding-right:10px;
font-family:times;
font-size:50px;
}

.smoothscroll-top {
position:fixed;
opacity:0;
visibility:hidden;
overflow:hidden;
text-align:center;
z-index:99;
background-color:#2ba6e1;
color:#fff;
width:47px;
height:44px;
line-height:44px;
right:25px;
bottom:-25px;
padding-top:2px;
border-radius:5px;
transition:all .5s ease-in-out;
transition-delay:.2s;
}

.smoothscroll-top:hover {
background-color:#3eb2ea;
color:#fff;
transition:all .2s ease-in-out;
transition-delay:0;
}

.smoothscroll-top.show {
visibility:visible;
cursor:pointer;
opacity:1;
bottom:25px;
}

.smoothscroll-top i.fa {
line-height:inherit;
}
</style>
    <style>
    #about {
        background-image: url("<?=$_base['imagem']['167667045713354']?>");
        border-radius: 0px 5px 5px 0px;
            }
    </style>
</head>
<body>

<?php require_once('htm_topo.php'); ?>
<!-- INICIO PLANOS INTERNET -->
      <section class="pricing special sec-normal motpath sec-bg1" id="planos">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 text-left">
                  <center>
                     <h3 class="section-heading"><strong><?=$planos['titulo']?></strong></h3>
                  </center>
               </div>
               <?=$planos['conteudo']?>
            </div>
         </div>
      </section>
	  <!-- FIM PLANOS INTERNET -->
	  
<!-- INICIO PLANOS UNITV -->
      <section class="pricing special sec-normal motpath sec-bg1" id="planos_unitv">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 text-left">
                  <center>
                     <h3 class="section-heading"><strong><?=$planos2['titulo']?></strong></h3>
                  </center>
               </div>
               <?=$planos2['conteudo']?>
            </div>
         </div>
      </section>
	  <!-- FIM PLANOS UNITV -->
	  
	  <!-- INICIO DÚVIDAS -->
<section id="duvidas" class="sec-normal history-section custom sec-bg3">
  <div class="faq">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <center>
		  <h3 class="section-heading text-white"><?=$duvidas['titulo']?></h3>
		  </center>
          <p class="section-subheading"> </p>
        </div>
        <?=$duvidas['conteudo']?>
      </div>
    </div>
  </div>
</section>
<!-- FIM DÚVIDAS -->

	  
      <script async="" src="../pagead2.googlesyndication.com/pagead/js/f.txt" type="text/javascript"></script>
      <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8447122275792484" data-ad-slot="8415241450" data-ad-format="auto" data-full-width-responsive="true"></ins>
      <script type="text/javascript">
         (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <section class="balancing sec-normal sec-bg3 motpath-w pb-80">
         <div class="h-services">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 text-left">
                     <center>
                        <h2 class="section-heading text-white">SISTEMA AUTOMATIZADO</h2>
                     </center>
                  </div>
                  <div class="col-md-12">
                     <div class="wrap-service load">
                        <div class="wow  fadeInUp fast animated" style="visibility: visible; animation-name: fadeInUp;">
                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1063.1 259" xml:space="preserve" class="svg mt-50" src="patterns/balancing.svg" alt="Load Balancing">
                              <style>
                                 .bal0,.bal1{stroke-miterlimit:10}.bal0{stroke-linecap:round;stroke-linejoin:round;fill:none;stroke:gray}.bal1{fill:#fff;stroke:#ee5586;stroke-width:2}.bal1,.bal2{stroke-linecap:round;stroke-linejoin:round}.bal2,.bal3,.bal4{fill:none;stroke:gray;stroke-miterlimit:10}.bal4{stroke:#ee5586;stroke-width:1;stroke-linecap:round;stroke-linejoin:round}.bal5{fill:#ee5586}
                              </style>
                              <path class="bal0" d="M112.6 41.6h55.7v37.1h-55.7zM107.9 87.4h65"></path>
                              <path id="svg-concept" class="bal1" d="M121.6 55.2h13.1M121.6 64.7h26.3M240.9 55.2H254M240.9 64.7H259M8.6 55.2h13.2M8.6 64.7h18.1"></path>
                              <circle class="bal2" cx="514.2" cy="83.8" r="3.7"></circle>
                              <path class="bal2" d="M514.2 73.6v6.3M485.1 83.8h25.3M518 83.8h25.2"></path>
                              <circle class="bal2" cx="779.2" cy="83.8" r="3.7"></circle>
                              <path class="bal2" d="M779.2 73.6v6.3M750.2 83.8h25.2M783 83.8h25.3"></path>
                              <path class="bal0" d="M760.8 33.9c0-.8-.1-1.5 0-2.3 1.2-12.4 12.1-22.1 24.8-22.1h-.4c13.5 0 24.4 10.9 24.4 24.4 0 7-2.9 13.3-7.7 17.8"></path>
                              <path class="bal0" d="M785.4 19.2c-7.6.1-14.2 6-14.9 13.3v1.3M753.5 24.1c-9.4 0-17.1 7.6-17.1 17.1 0 4.2 1.5 8 4 11M37 74.5H.8v-38H37M25.7 74.5v6.9M37 81.4H13.6M57.4 27.9h-17c-1.9 0-3.4 1.2-3.4 2.6v54.4c0 1.4 1.5 2.6 3.4 2.6h17.1c1.9 0 3.4-1.2 3.4-2.6V30.5c-.1-1.4-1.6-2.6-3.5-2.6z"></path>
                              <path class="bal0" d="M49.5 37.1c2.3.3 3.9 2.4 3.6 4.7-.3 2.3-2.4 3.9-4.7 3.6-2.3-.3-3.9-2.4-3.6-4.7.3-2.3 2.4-3.9 4.7-3.6zM235.3 86.5V37c0-.5.4-.9.9-.9h28.5c.5 0 .9.4.9.9v49.5c0 .5-.4.9-.9.9h-28.5c-.5 0-.9-.4-.9-.9M248.3 40.7h4.3"></path>
                              <path class="bal0" d="M252.6 80.8c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1 0-1.2 1-2.1 2.1-2.1 1.1-.1 2.1.9 2.1 2.1z"></path>
                              <path class="bal3" d="M140.7 211.8h746.9M140.7 99v68.6"></path>
                              <path class="bal0" d="M130 256.1v-21.2M130 234.9h4.7M130 256.1h4.7M146.7 234.9h4.7M151.4 234.9v21.2M151.4 256.1h-4.7"></path>
                              <path id="svg-concept" class="bal4" d="M140.7 251.4v-13M140.7 238.4h-3.6"></path>
                              <path class="bal0" d="M877.4 256.1v-21.2M877.4 234.9h4.7M877.4 256.1h4.7M894.1 234.9h4.7M898.8 234.9v21.2M898.8 256.1h-4.7"></path>
                              <path id="svg-concept" class="bal4" d="M891.3 252v-13M884.9 245.5h6.4M891.3 239H885M884.9 252h6.2"></path>
                              <path class="bal0" d="M503.4 256.1v-21.2M503.4 234.9h4.8M503.4 256.1h4.8M520.1 234.9h4.8M524.9 234.9v21.2M524.9 256.1h-4.8"></path>
                              <path id="svg-concept" class="bal4" d="M517.4 245.5V239M511 245.5h6.4M517.4 239h-6.3M510.9 245.5v6.5M510.9 252h6.3"></path>
                              <path class="bal3" d="M140.7 167.6v44.2M250.7 99l-110 68.6M514.2 99v112.8M888.1 167.6v44.2M31.1 99l109.6 68.6M998.1 99l-110 68.6M778.5 99l109.6 68.6"></path>
                              <path class="bal0" d="M573.7 16.7c0 1.9-1.4 3.5-3.2 3.5H457.8c-1.8 0-3.2-1.6-3.2-3.5V4.3c0-1.9 1.4-3.5 3.2-3.5h112.8c1.8 0 3.2 1.6 3.2 3.5v12.4zM461.2.9v19.2M567.2.9v19.3"></path>
                              <g>
                                 <path id="svg-concept" class="bal4" d="M558.7 10.5c0 2.3-1.9 4.1-4.1 4.1-2.3 0-4.1-1.9-4.1-4.1s1.8-4.1 4.1-4.1 4.1 1.8 4.1 4.1z"></path>
                                 <path id="svg-concept" class="bal4" d="M556.1 10.5c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5.7-1.5 1.5-1.5c.9 0 1.5.7 1.5 1.5zM558.7 10.5h-2.6M553.1 10.5h-2.6"></path>
                              </g>
                              <path class="bal0" d="M573.7 42.4c0 1.9-1.4 3.5-3.2 3.5H457.8c-1.8 0-3.2-1.6-3.2-3.5V30c0-1.9 1.4-3.5 3.2-3.5h112.8c1.8 0 3.2 1.6 3.2 3.5v12.4zM461.2 26.5v19.3M567.2 26.5v19.3"></path>
                              <g>
                                 <path id="svg-concept" class="bal4" d="M558.7 36.2c0 2.3-1.9 4.1-4.1 4.1-2.3 0-4.1-1.9-4.1-4.1 0-2.3 1.8-4.1 4.1-4.1s4.1 1.8 4.1 4.1z"></path>
                                 <path id="svg-concept" class="bal4" d="M556.1 36.2c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5.7-1.5 1.5-1.5c.9 0 1.5.6 1.5 1.5zM558.7 36.2h-2.6M553.1 36.2h-2.6"></path>
                              </g>
                              <path class="bal0" d="M573.7 68c0 1.9-1.4 3.5-3.2 3.5H457.8c-1.8 0-3.2-1.6-3.2-3.5V55.7c0-1.9 1.4-3.5 3.2-3.5h112.8c1.8 0 3.2 1.6 3.2 3.5V68zM461.2 52.2v19.2M567.2 52.2v19.3"></path>
                              <g>
                                 <path id="svg-concept" class="bal4" d="M558.7 61.8c0 2.3-1.9 4.1-4.1 4.1-2.3 0-4.1-1.9-4.1-4.1 0-2.3 1.8-4.1 4.1-4.1s4.1 1.9 4.1 4.1z"></path>
                                 <path id="svg-concept" class="bal4" d="M556.1 61.9c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5.7-1.5 1.5-1.5c.9-.1 1.5.6 1.5 1.5zM558.7 61.9h-2.6M553.1 61.9h-2.6"></path>
                              </g>
                              <g>
                                 <path class="bal0" d="M838.8 68c0 1.9-1.4 3.5-3.2 3.5H722.8c-1.8 0-3.2-1.6-3.2-3.5V55.7c0-1.9 1.4-3.5 3.2-3.5h112.8c1.8 0 3.2 1.6 3.2 3.5V68zM726.2 52.2v19.2"></path>
                                 <path id="svg-concept" class="bal4" d="M823.8 61.8c0 2.3-1.9 4.1-4.1 4.1-2.3 0-4.1-1.9-4.1-4.1 0-2.3 1.8-4.1 4.1-4.1 2.2 0 4.1 1.9 4.1 4.1z"></path>
                                 <path id="svg-concept" class="bal4" d="M821.2 61.9c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5.7-1.5 1.5-1.5c.8-.1 1.5.6 1.5 1.5zM823.8 61.9h-2.6M818.1 61.9h-2.6"></path>
                              </g>
                              <g>
                                 <circle class="bal2" cx="998.1" cy="83.8" r="3.7"></circle>
                                 <path class="bal2" d="M998.1 73.6v6.3M969 83.8h25.3M1001.9 83.8h25.2"></path>
                              </g>
                              <path class="bal0" d="M979.7 33.9c0-.8-.1-1.5 0-2.3 1.2-12.4 12.1-22.1 24.8-22.1h-.4c13.5 0 24.4 10.9 24.4 24.4 0 7-2.9 13.3-7.7 17.8"></path>
                              <path class="bal0" d="M1004.2 19.2c-7.6.1-14.2 6-14.9 13.3v1.3M972.4 24.1c-9.4 0-17.1 7.6-17.1 17.1 0 4.2 1.5 8 4 11"></path>
                              <g>
                                 <path class="bal0" d="M1057.6 68c0 1.9-1.4 3.5-3.2 3.5H941.7c-1.8 0-3.2-1.6-3.2-3.5V55.7c0-1.9 1.4-3.5 3.2-3.5h112.8c1.8 0 3.2 1.6 3.2 3.5V68zM945.1 52.2v19.2"></path>
                                 <path id="svg-concept" class="bal4" d="M1042.6 61.8c0 2.3-1.9 4.1-4.1 4.1-2.3 0-4.1-1.9-4.1-4.1 0-2.3 1.8-4.1 4.1-4.1s4.1 1.9 4.1 4.1z"></path>
                                 <path id="svg-concept" class="bal4" d="M1040 61.9c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5.7-1.5 1.5-1.5c.9-.1 1.5.6 1.5 1.5zM1042.6 61.9h-2.6M1037 61.9h-2.6"></path>
                              </g>
                              <circle id="svg-ico" class="bal5" cx="140.7" cy="211.8" r="3"></circle>
                              <circle id="svg-ico" class="bal5" cx="888.1" cy="211.8" r="3"></circle>
                              <g>
                                 <path id="svg-concept" class="bal1" d="M35.1 99c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"></path>
                                 <animateMotion path="M0 0 105 66 0 0" begin="0s" dur="4s" repeatCount="indefinite"></animateMotion>
                              </g>
                              <g>
                                 <path id="svg-concept" class="bal1" d="M144.7 136.9c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"></path>
                                 <animateMotion path="M0, 67 0 -35 0 67" begin="0s" dur="3s" repeatCount="indefinite"></animateMotion>
                              </g>
                              <g>
                                 <path id="svg-concept" class="bal1" d="M254.8 99c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"></path>
                                 <animateMotion path="M0 0 -105 66 0 0" begin="0s" dur="3s" repeatCount="indefinite"></animateMotion>
                              </g>
                              <g>
                                 <path id="svg-concept" class="bal1" d="M317 211.8c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"></path>
                                 <animateMotion path="M570, 0 -165 0 570 0" begin="0s" dur="12s" repeatCount="indefinite"></animateMotion>
                              </g>
                              <g>
                                 <path id="svg-concept" class="bal1" d="M518.2 139.9c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"></path>
                                 <animateMotion path="M0, 67 0 -35 0 67" begin="0s" dur="4s" repeatCount="indefinite"></animateMotion>
                              </g>
                              <g>
                                 <path id="svg-concept" class="bal1" d="M783.2 99c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"></path>
                                 <animateMotion path="M0 0 105 66 0 0" begin="0s" dur="3s" repeatCount="indefinite"></animateMotion>
                              </g>
                              <g>
                                 <path id="svg-concept" class="bal1" d="M1002.1 99c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"></path>
                                 <animateMotion path="M0 0 -105 66 0 0" begin="0s" dur="4s" repeatCount="indefinite"></animateMotion>
                              </g>
                           </svg>
                        </div>
                        <div class="row text-info">
                           <div class="col-md-4 pb-2 pt-5"><b class="c-pink">[1] Usuarios</b> <br>
                              <span class="info">Aqui é onde a pessoa esta conectada, usufluindo dos beneficos de uma otima VPN.</span>
                           </div>
                           <div class="col-md-4 pb-2 pt-5"><b class="c-pink">[2] Painel de Gerenciamento</b> <br>
                              <span class="info">O Painel de Gerenciamento é onde fica todos os dados armazenados e dos nossos servidores cloud.</span>
                           </div>
                           <div class="col-md-4 pb-2 pt-5"><b class="c-pink">[3] Cloud BR</b> <br>
                              <span class="info">O Cloud BR é reponsável por liberar sua conexão de forma rápida e segura. </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="help pt-4 pb-80">
         <div class="container">
            <div class="service-wrap">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="help-container">
                        <div class="plans badge feat left bg-grey"><i class="fas fa-long-arrow-alt-left"></i></div>
                        <a href="https://api.whatsapp.com/send?phone=<?=$texto3['conteudo']?>&text=Ol%C3%A1%2C%20gostaria%20de%20um%20suporte!" class="help-item">
                           <div class="img">
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="65" viewBox="0 0 32 32" class="svg ico" src="fonts/svg/helpdesk.svg" alt="">
                                 <title>helpdesk</title>
                                 <path fill="#5e686c" d="M11.994 20.762c-0.944 0-1.713-0.769-1.713-1.712s0.769-1.712 1.713-1.712c0.944 0 1.713 0.769 1.713 1.712s-0.769 1.712-1.713 1.712zM11.994 18.194c-0.475 0-0.856 0.381-0.856 0.856s0.387 0.856 0.856 0.856c0.475 0 0.856-0.387 0.856-0.856 0-0.475-0.381-0.856-0.856-0.856z"></path>
                                 <path fill="#5e686c" d="M20.544 20.762c-0.944 0-1.712-0.769-1.712-1.712s0.769-1.712 1.712-1.712c0.944 0 1.712 0.769 1.712 1.712s-0.769 1.712-1.712 1.712zM20.544 18.194c-0.475 0-0.856 0.381-0.856 0.856s0.387 0.856 0.856 0.856c0.475 0 0.856-0.387 0.856-0.856 0-0.475-0.387-0.856-0.856-0.856z"></path>
                                 <path id="svg-ico" fill="#ee5586" d="M18.494 28.788c-1.181 0-2.144-0.962-2.144-2.144s0.962-2.144 2.144-2.144c1.181 0 2.144 0.962 2.144 2.144-0.006 1.188-0.962 2.144-2.144 2.144zM18.494 25.363c-0.706 0-1.288 0.575-1.288 1.288 0 0.706 0.575 1.288 1.288 1.288 0.706 0 1.288-0.575 1.288-1.288-0.006-0.712-0.581-1.288-1.288-1.288z"></path>
                                 <path fill="#5e686c" d="M24.831 15.381c-8.050 0-12.556-5.144-12.756-5.375-0.15-0.194-0.256-0.175-0.369-0.019l-4.594 5.225c-0.156 0.175-0.425 0.194-0.606 0.037-0.175-0.156-0.194-0.425-0.037-0.606l4.569-5.2c0.369-0.494 1.287-0.519 1.7 0.025 0.031 0.031 4.794 5.45 13.006 5.031 0.256-0.012 0.438 0.169 0.45 0.406s-0.169 0.438-0.406 0.45c-0.319 0.019-0.644 0.025-0.956 0.025z"></path>
                                 <path fill="#5e686c" d="M16.369 31.806c-6.050 0-10.438-4.556-10.438-10.837 0-0.238 0.194-0.431 0.431-0.431s0.431 0.194 0.431 0.431c0 5.781 4.031 9.981 9.581 9.981s9.581-4.050 9.581-9.631c0-0.238 0.194-0.431 0.431-0.431s0.431 0.194 0.431 0.431c-0.012 5.981-4.5 10.488-10.45 10.488z"></path>
                                 <path id="svg-ico" fill="#ee5586" d="M28.788 21.719h-1.712c-0.931 0-1.712-0.788-1.712-1.712v-6c0-0.931 0.788-1.713 1.712-1.713h1.712c0.931 0 1.712 0.787 1.712 1.713v6c0 0.931-0.788 1.712-1.712 1.712zM27.075 13.15c-0.45 0-0.856 0.406-0.856 0.856v6c0 0.45 0.406 0.856 0.856 0.856h1.712c0.45 0 0.856-0.406 0.856-0.856v-6c0-0.45-0.406-0.856-0.856-0.856h-1.712z"></path>
                                 <path id="svg-ico" fill="#ee5586" d="M20.306 27.063c-0.238 0-0.431-0.194-0.431-0.431s0.194-0.431 0.431-0.431h1.587c0.137-0.012 4.056-0.35 4.056-5.131 0-0.238 0.194-0.431 0.431-0.431s0.431 0.194 0.431 0.431c0 5.6-4.837 5.981-4.887 5.988l-1.619 0.006z"></path>
                                 <path id="svg-ico" fill="#ee5586" d="M5.5 21.75h-1.725c-0.931 0-1.725-0.788-1.725-1.725v-6.037c0-0.931 0.788-1.725 1.725-1.725h0.519c0.044-6.662 5.481-12.075 12.163-12.075 6.7 0 12.15 5.612 12.15 12.506 0 0.238-0.194 0.431-0.431 0.431s-0.431-0.194-0.431-0.431c0-6.425-5.069-11.65-11.294-11.65-6.2 0-11.256 5.025-11.3 11.225h0.35c0.931 0 1.725 0.787 1.725 1.725v6.038c-0.006 0.931-0.794 1.719-1.725 1.719zM3.775 13.125c-0.45 0-0.863 0.412-0.863 0.863v6.037c0 0.45 0.413 0.869 0.862 0.869h1.725c0.45 0 0.869-0.413 0.869-0.869v-6.037c0-0.45-0.412-0.863-0.869-0.863h-1.725z"></path>
                              </svg>
                           </div>
                           <div class="inform">
                              <div class="title">Suporte</div>
                              <div class="description"> Nosso suporte é 24/7 via telegram ou whatsapp, podendo tirar  suas dúvidas.</div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                     <div class="help-container">
                        <div class="plans badge feat bg-grey"><i class="fas fa-long-arrow-alt-right"></i></div>
                        <a href="#" class="help-item">
                           <div class="img">
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="65" viewBox="0 0 32 32" class="svg ico" src="fonts/svg/window.svg" alt="">
                                 <title>window</title>
                                 <path id="svg-ico" fill="#ee5586" d="M11.412 13.744h-5.938c-0.237 0-0.425 0.188-0.425 0.425v10.175c0 0.238 0.188 0.425 0.425 0.425h5.938c0.238 0 0.425-0.188 0.425-0.425v-10.175c0-0.238-0.188-0.425-0.425-0.425zM10.994 23.919h-5.094v-9.325h5.088v9.325z"></path>
                                 <path fill="#5e686b" d="M31.719 10.194c0-0.012 0-0.025 0-0.031v-6.119c0-0.237-0.188-0.425-0.425-0.425h-30.581c-0.237 0-0.425 0.188-0.425 0.425v24.469c0 0.238 0.188 0.425 0.425 0.425h30.587c0.231 0 0.425-0.188 0.425-0.425v-18.281c-0.006-0.012-0.006-0.025-0.006-0.037zM1.131 4.469h29.744v5.269h-29.744v-5.269zM1.131 28.087v-17.5h29.744v17.506h-29.744z"></path>
                                 <path fill="#5e686b" d="M5.188 5.3c-0.938 0-1.694 0.763-1.694 1.694s0.762 1.694 1.694 1.694c0.938 0 1.694-0.763 1.694-1.694 0.006-0.931-0.756-1.694-1.694-1.694zM5.188 7.844c-0.469 0-0.85-0.381-0.85-0.85s0.388-0.844 0.85-0.844c0.469 0 0.85 0.381 0.85 0.85s-0.381 0.844-0.85 0.844z"></path>
                                 <path fill="#5e686b" d="M9.994 5.3c-0.938 0-1.694 0.763-1.694 1.694s0.762 1.694 1.694 1.694 1.694-0.763 1.694-1.694c0.006-0.931-0.756-1.694-1.694-1.694zM9.994 7.844c-0.469 0-0.85-0.381-0.85-0.85s0.381-0.85 0.85-0.85c0.469 0 0.85 0.381 0.85 0.85s-0.381 0.85-0.85 0.85z"></path>
                                 <path fill="#5e686b" d="M14.8 5.3c-0.938 0-1.694 0.763-1.694 1.694s0.762 1.694 1.694 1.694 1.7-0.756 1.7-1.688c0-0.938-0.762-1.7-1.7-1.7zM14.8 7.844c-0.469 0-0.85-0.381-0.85-0.85s0.381-0.85 0.85-0.85c0.469 0 0.85 0.381 0.85 0.85s-0.381 0.85-0.85 0.85z"></path>
                                 <path id="svg-ico" fill="#ee5586" d="M26.181 17.2h-10.175c-0.238 0-0.425 0.188-0.425 0.425s0.188 0.425 0.425 0.425h10.175c0.238 0 0.425-0.188 0.425-0.425 0-0.231-0.194-0.425-0.425-0.425z"></path>
                                 <path id="svg-ico" fill="#ee5586" d="M26.181 20.488h-10.175c-0.238 0-0.425 0.188-0.425 0.425 0 0.231 0.188 0.425 0.425 0.425h10.175c0.238 0 0.425-0.188 0.425-0.425s-0.194-0.425-0.425-0.425z"></path>
                                 <path id="svg-ico" fill="#ee5586" d="M23.712 23.781h-7.637c-0.238 0-0.425 0.188-0.425 0.425s0.188 0.425 0.425 0.425h7.631c0.238 0 0.425-0.188 0.425-0.425 0-0.231-0.188-0.425-0.419-0.425z"></path>
                              </svg>
                           </div>
                           <div class="inform">
                              <div class="title">Painel de Controle</div>
                              <div class="description">Possuímos um painel de controle amplo e com facil configuração.</div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      

<?php include_once('htm_rodape.php'); ?>
</body>
</html>
