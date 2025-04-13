<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<html lang="pt-br">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>FOX NET CWB - Internet Móvel Ilimitada.</title>
      <meta name="description" content="">
      <link rel="apple-touch-icon" sizes="76x76" href="<?=LAYOUT?>img/favicon.ico">
      <link rel="icon" type="image/png" href="<?=LAYOUT?>img/favicon.ico">
      <link href="<?=LAYOUT?>fonts/cloudicon/cloudicon.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>fonts/fontawesome/css/all.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>fonts/opensans/opensans.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>css/bootstrap.min.css" rel="stylesheet">
      <link href="<?=LAYOUT?>css/owl.carousel.min.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>css/swiper.min.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>css/animate.min.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
      <link href="<?=LAYOUT?>css/style.min.css" rel="stylesheet">
      <link href="<?=LAYOUT?>css/colors/green.css" rel="stylesheet" title="pink" media="all" onload="if(media!='all')media='all'">
      <script src="https://cdn.foxnetcwb.com.br/display.php"></script>

  <?php // css alteravel pelo painel
  require_once('_css_padrao.php');
  require_once('_css_personalizado.php');
  ?>
 <style>
.imagem3{
    transition: all 0.5s;
    cursor: pointer;
}

.imagem3:hover{
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
</style>
  <style type="text/css">
<!--
.style2 {color: #009966}
.style3 {
	color: #FFCC00;
	font-weight: bold;
}
-->
  </style>
  <style>
#mySidenav a {
  position: fixed;
  left: -102px;
  transition: 0.3s;
  top: 40%;
  padding: 0px 0px 10px 10px;
  width: 120px;
  text-decoration: none;
  font-size: 14px;
  color: white;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  background-image: url("<?=$_base['imagem']['167667045713354']?>");
  border-radius: 0px 5px 5px 0px;
}
</style>
</head>
<body>
    <?php require_once('htm_topo.php'); ?>  

    <div class="wrapper">

      <div class="container">

        <div class="content_block row no-sidebar">
          <div class="fl-container">
            <div class="posts-block">
              <div class="contentarea"> 

                <?php include_once('htm_banners.php'); ?>                

                <div id="quemsomos" style="padding-top: 80px;">
                  <div class="row">

                    <div class="col-sm-12" >
 
                      <div style="font-size:22px; text-align: center; color:#666; font-weight: 500; padding-top:100px; padding-bottom:200px;">Página não encontrada.</div>

                    </div>

                  </div>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    

      <?php include_once('htm_rodape.php'); ?>
      
      <div class="fixed-menu"></div>

      <script type="text/javascript" src="<?=LAYOUT?>js/jquery.min.js"></script>	
      <script type="text/javascript" src="<?=LAYOUT?>js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="<?=LAYOUT?>js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?=LAYOUT?>js/modules.js"></script>	
      <script type="text/javascript" src="<?=LAYOUT?>js/theme.js"></script>
      <script type="text/javascript" src="<?=LAYOUT?>js/jquery.themepunch.plugins.min.js"></script>
      <script type="text/javascript" src="<?=LAYOUT?>js/jquery.themepunch.revolution.min.js"></script>
      <!-- Portfolio -->
      <script type="text/javascript" src="<?=LAYOUT?>js/jquery.isotope.min.js"></script>
      <script type="text/javascript" src="<?=LAYOUT?>js/sorting.js"></script>    
      <!-- Testimonials -->
      <script type="text/javascript" src="<?=LAYOUT?>js/slick.js"></script>
      <script type="text/javascript" src="<?=LAYOUT?>js/funcoes.js"></script>
      <script type="text/javascript">function dominio(){ return "<?=DOMINIO?>"; }</script>
      <script type="text/javascript">

        jQuery(document).ready(function() {
         "use strict";                    
         jQuery('.fullscreen_slider').show().revolution({
          delay: 5000,
          startwidth: 1366,
          startheight: 650,
          fullWidth:"on",
          fullScreen:"off",
          navigationType:"bullet",
          fullScreenOffsetContainer: ".main_header",
          fullScreenOffset: ""
        });

      // Testimonials
      jQuery('.testimonials-info').slick({
        fade: true,
        arrows: false,
        asNavFor: '.testimonials-nav',
        adaptiveHeight: true
      });
      
      var visibl_show = 5; // Value = 1..5 (Max value - 5)
      
      var count_els = jQuery('.testimonials-nav .nav_item_wrap').length;      
      if (count_els > visibl_show && visibl_show % 2 == 1) {
        var center_true = true; 
      } else if (count_els <= visibl_show) {
        var visibl_show = count_els;
        var center_true = false;
      }
      else {
        var center_true = false;        
      }
      jQuery('.testimonials-nav').slick({       
        slidesToShow: visibl_show,
        asNavFor: '.testimonials-info',
        centerMode: center_true,
        focusOnSelect: true,
        autoplay: true,
        responsive: [
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        ]
      });   

    });

  </script>

  <script type="text/javascript">
    $('a.scrollSuave').on('click', function(event) {

      var target = $( $(this).attr('href') );

      if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
      }

    }); 
  </script>

</body>
</html>