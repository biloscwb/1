<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<div id="spinner-area" style="display: none;">
         <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
         </div>
      </div>
      <header id="header">
         <div class="menu-wrap fixed">
            <div class="nav-menu">
               <div class="container">
                  <div class="row">
                     <div class="col-2 col-md-2">
                        <style>
                           .logo-image{
                           width: 120px;
                           height: 35px;
                           overflow: hidden;
                           margin-top: 0px;
                           }
                        </style>
   
                     </div>
                     <nav id="menu" class="col-10 col-md-10">
                        <div class="navigation float-right">
                           <button class="menu-toggle">
                           <span class="icon"></span>
                           <span class="icon"></span>
                           <span class="icon"></span>
                           </button>
                           <ul class="main-menu nav navbar-nav navbar-right">
                                <?php

                                function geramenu($lista, $controller, $pai){

                                    if($pai != 0){ echo "<div class='sub-nav'><ul class='sub-menu'>"; }

                                    foreach ($lista as $key => $value) {

                                        $array = explode('#', $value['destino']);
                                        $numero = count($array);
                                        $end_final = '#'.end($array);

                                        if($end_final == "#conteudo"){
                                            $namesmapagina = "";
                                            $endereco = $value['destino'];
                                        } else {
                                            if($numero > 1){
                                                $namesmapagina = " class='scrollSuave' "; // regra para navegar por # na mesma pagina
                                                $endereco = $end_final;
                                            } else {
                                                $namesmapagina = "";
                                                $endereco = $value['destino'];
                                            }
                                        }

                                        if(count($value['filhos']) > 0){
                                            $pre_submenu = "class='menu-item-has-children'";
                                        } else {
                                            $pre_submenu = "";
                                        }

                                        // caso ativo class='current-menu-parent'

                                        echo "
                                        <li class='menu-item' $pre_submenu >
                                        <a $namesmapagina href='".$endereco."' >
                                        ".$value['titulo']."</a>
                                        ";

                                        if(count($value['filhos']) > 0){
                                            geramenu($value['filhos'], $controller, 1);
                                        }

                                        echo "</li>";

                                    }

                                    if($pai != 0){ echo "</ul></div>"; }
                                }
                                geramenu($_base['menu'], $controller, 0);

                                ?>
                            </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="menu-wrap mobile fixed">
            <div class="container">
               <div class="row">
                  <div class="col-6">
                     <!-- desativado<img class="svg logo-image" src="img/logo15.png" alt="Cwb Net">-->
                  </div>
                  <div class="col-6">
                     <nav class="nav-menu">
                        <button id="nav-toggle" class="menu-toggle">
                        <span class="icon"></span>
                        <span class="icon"></span>
                        <span class="icon"></span>
                        </button>
                        <ul class="main-menu">
                                                            <li class="menu-item">
                                 <a class="col-6" href="#header"><i class="fas fa-home pr-1"></i>INICIO</a>
                              </li>
                              <li class="menu-item">
                                 <a class="col-6" href="#planos"><i class="fas fa-shopping-bag pr-1"></i>PLANOS</a>
                              </li>
							  <li class="menu-item">
                                 <a class="col-6" href="#planos_unitv"><i class="fas fa-shopping-bag pr-1"></i>PLANOS UNITV</a>
                              </li>
                              <!-- DESATIVADO <li class="menu-item">
                                 <a class="col-6" href="#user_revenda"><i class="fas fa-users pr-1"></i>REVENDA</a>
                              </li> -->
							  <li class="menu-item">
                                 <a class="col-6" href="#duvidas"><i class="fas fa-question  pr-1"></i>DÚVIDAS</a>
                              </li>
                              <li class="menu-item">
                                 <a class="col-6" href="#footer"><i class="fas fa-info pr-1"></i>SOBRE</a>
                              </li>
                              
                              <li class="menu-item">
                                 <a class="col-6" href="https://renovar.foxnetcwb.com.br"><i class="fas fa-shopping-cart pr-1"></i>RENOVAR</a>
                              </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="top-header exapath-w">
         <div class="total-grad-inverse"></div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="wrapper animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="1" data-translatey="-50">
                     <center>
                        <h1 class="heading"><b><img class="logo-bg logo-footer" src="<?=$_base['imagem']['147129831543478']?>" alt="logo"></b></h1>
                        <div class="heading">
                           <h5>
                              <?=$texto1['conteudo']?>
                              <div class="animatype"><span id="typed3"></span></div>
                           </h5>
                        </div>
                        <div class="container">
							<div class="row">
								<div class="col-sm">
									<a  data-toggle="modal" data-target="#modal1" href="#APPS Fox"><img class="imagem3" style="width: 70%; " alt="APP Disponível Para Android" src="<?=$_base['imagem']['153692954944466']?>"></a>
								</div>
								<div class="col-sm">
									<a  data-toggle="modal" data-target="#modal2" href="#APPS UniTV"><img class="imagem3" style="width: 70%; " alt="APP Disponível Para Android" src="<?=$_base['imagem']['152951244874600']?>"></a>
								</div>
							</div>
						</div>
                        
                     </center>
                  </div>
               </div>
            </div>
         </div>
      </div>