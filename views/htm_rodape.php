    <footer id="footer">
         <footer class="footer" id="sobre">
            <img class="logo-bg logo-footer" src="<?=$_base['imagem']['147129831543478']?>" alt="logo">
            <div class="container">
               <div class="footer-top">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <center>
                           <p><b> </b></p>
                           <h2 class="section-heading text-white"><b></b></h2>
                           <p></p>
                           <h6><font color="white"><?=$texto2['conteudo']?></font></h6>
                           <hr color="white">
                           <div class="copyrigh"><font color="white">&copy; Copyright <strong><a href="https://sitev3.com.br/" target="_blank"><span style="color:#fff;text-shadow:#000 0px 0px 0.1rem, #0dcaf0 0px 0px 0.1rem, #000 0px 0px 0.1rem;background:url(https://sitev3.com.br/assets/img/effect.gif);">SITEV3</span></a></strong>. Alguns Diretos Reservados</div>
                        </center>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <script>
            $.gdprcookie.init({});
            $(document.body)
            .on("gdpr:show", function() {
            console.log("Cookie dialog is shown");
            })
            .on("gdpr:accept", function() {
            var preferences = $.gdprcookie.preference();
            console.log("Preferences saved:", preferences);
            })
            .on("gdpr:advanced", function() {
            console.log("Advanced button was pressed");
            });
            if ($.gdprcookie.preference("marketing") === true) {
            console.log("This should run because marketing is accepted.");
            }
         </script>
      </footer>
      <div class="smoothscroll-top">
    <span class="scroll-top-inner">
        <i class="fa fa-2x fa-arrow-circle-up"></i>
    </span>
</div>
      <script src="<?=LAYOUT?>js/jquery.min.js" type="text/javascript"></script>
      <script src="<?=LAYOUT?>js/typed.js" type="text/javascript"></script>
      <script defer="" src="<?=LAYOUT?>js/popper.min.js" type="text/javascript"></script>
      <script defer="" src="<?=LAYOUT?>js/bootstrap.min.js" type="text/javascript"></script>
      <script defer="" src="<?=LAYOUT?>js/jquery.countdown.js" type="text/javascript"></script>
      <script defer="" src="<?=LAYOUT?>js/slick.min.js" type="text/javascript"></script>
      <script defer="" src="<?=LAYOUT?>js/owl.carousel.min.js" type="text/javascript"></script>
      <script defer="" src="<?=LAYOUT?>js/isotope.min.js" type="text/javascript"></script>
      <script defer="" src="<?=LAYOUT?>js/jquery.scrollme.min.js" type="text/javascript"></script>
      <script defer="" src="<?=LAYOUT?>js/swiper.min.js" type="text/javascript"></script>
      <script async="" src="<?=LAYOUT?>js/lazysizes.min.js" type="text/javascript"></script>
      <script src="<?=LAYOUT?>js/wow.min.js" type="text/javascript"></script>
      <script type="text/javascript">new WOW().init();</script>
      <script defer="" src="<?=LAYOUT?>js/scripts.js" type="text/javascript"></script>
      <script type="text/javascript">
         var typed3 = new Typed('#typed3', {
         strings: ["<?=$texto6['conteudo']?>","<?=$texto7['conteudo']?>", "<?=$texto8['conteudo']?>", "<?=$texto9['conteudo']?>", "<?=$texto10['conteudo']?>"],
         typeSpeed: 50,
         backSpeed: 20,
         smartBackspace: true,
         loop: true
         });
      </script>
      <script>$(function(){
    $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 100) {
            $('.smoothscroll-top').addClass('show');
        } else {
            $('.smoothscroll-top').removeClass('show');
        }
    });
    $('.smoothscroll-top').on('click', scrollToTop);
});
 
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 600, 'linear').animate({scrollTop:25},200).animate({scrollTop:0},150) .animate({scrollTop:0},50);
}</script>
      <style type="text/css" data-typed-js-css="true">
         .typed-cursor{
         opacity: 1;
         }
         .typed-cursor.typed-cursor--blink{
         animation: typedjsBlink 0.7s infinite;
         -webkit-animation: typedjsBlink 0.7s infinite;
         animation: typedjsBlink 0.7s infinite;
         }
         @keyframes typedjsBlink{
         50% { opacity: 0.0; }
         }
         @-webkit-keyframes typedjsBlink{
         0% { opacity: 1; }
         50% { opacity: 0.0; }
         100% { opacity: 1; }
         }
      </style>
      
      <!-- Whatsapp bal���o -->
        <!-- DESATIVADO -->
	  <!-- Whatsapp bal���o -->
	  
	  <!-- Duvidas -->
<!-- Downloads APPS 1 -->
  <div class="modal" id="modal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color:black">Central de Downloads<button type="button" class="close" data-dismiss="modal">&times;</button></h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center" style="color:black">
    APP 1 <a class="btn btn-primary" href="#" role="button">BAIXAR</a>
    <span class="badge badge-primary badge-pill"></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center" style="color:black">
    APP 2 <a class="btn btn-primary" href="#" role="button">BAIXAR</a>
    <span class="badge badge-primary badge-pill"></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center" style="color:black">
    APP 3 <a class="btn btn-primary" href="#" role="button">BAIXAR</a>
    <span class="badge badge-primary badge-pill"></span>
  </li>
</ul> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Fechar</button>
        </div>
        
      </div>
    </div>
  </div>
<!-- Fim Downloads APPS 1 -->

<!-- Downloads APPS 2 -->
  <div class="modal" id="modal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color:black">Central de Downloads<button type="button" class="close" data-dismiss="modal">&times;</button></h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center" style="color:black">
   APP 1 <a class="btn btn-primary" href="#" role="button">BAIXAR</a>
    <span class="badge badge-primary badge-pill"></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center" style="color:black">
    APP 2 <a class="btn btn-primary" href="#" role="button">BAIXAR</a>
    <span class="badge badge-primary badge-pill"></span>
  </li>
    <li class="list-group-item d-flex justify-content-between align-items-center" style="color:black">
    APP 3 <a class="btn btn-primary" href="#" role="button">BAIXAR</a>
    <span class="badge badge-primary badge-pill"></span>
  </li>
</ul> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Fechar</button>
        </div>
        
      </div>
    </div>
  </div>
<!-- Fim Downloads APPS 2 -->
<?=$status['conteudo']?>
<script>const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
    //   currentlyActiveAccordionItemHeader.classList.toggle("active");
    //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    // }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});</script>