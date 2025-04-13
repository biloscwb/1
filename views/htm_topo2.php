<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<div class="main_header">

    <div class="header_parent_wrap">

        <header>

            <div class="container">

                <div class="row">

                    <div class="col-sm-4" >

                        <div class="logo_div">

                            <a href="<?=DOMINIO?>" class="logo">
                                <img alt="" src="<?=$_base['imagem']['147129831543478']?>">
                            </a>

                        </div>

                    </div>

                    <div class="col-sm-8">

                        <div class="topo_div1">

                            <div class="topo_div1_item">
                                <div class="topo_div1_icos" >
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="topo_div1_textos">
                                    <div class="topo_div1_item_txt1"><?=$_base['topo_horarios']['titulo']?></div>
                                    <div class="topo_div1_item_txt2"><?=$_base['topo_horarios']['conteudo']?></div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>

                            <div class="topo_div1_item">
                                <div class="topo_div1_icos" >
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="topo_div1_textos">
                                    <div class="topo_div1_item_txt1"><?=$_base['topo_email']['titulo']?></div>
                                    <div class="topo_div1_item_txt2"><?=$_base['topo_email']['conteudo']?></div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>

                            <div class="topo_div1_item">
                                <div class="topo_div1_icos" >
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="topo_div1_textos">
                                    <div class="topo_div1_item_txt1"><?=$_base['topo_ligue']['titulo']?></div>
                                    <div class="topo_div1_item_txt2"><?=$_base['topo_ligue']['conteudo']?></div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>

                        </div>

                    </div>

                </div>

                <div style="position: relative; width: 100%; border-top:1px solid #ccc; padding-top: 15px; margin-top: -10px;"></div>

                <div class="row">

                    <div class="col-sm-8" >
                        <nav>
                            <ul class="menu">
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
                                        $endereco = $value['destino'];
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
                                <li $pre_submenu >
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
                        </nav>

                    </div>

                    <div class="col-sm-4" >

                        <div class="topo_redes_sociais" >
                            <?php

                            foreach ($_base['listaredes'] as $key => $value) {
                                
                                echo "
                                <a href='".$value['endereco']."' target='_blank' class='topo_redes_sociais_item' ><img src='".$value['imagem']."'></a>
                                ";

                            }

                            ?>
                        </div>

                    </div>

                </div>


            </div>

        </header>

    </div>
</div> 