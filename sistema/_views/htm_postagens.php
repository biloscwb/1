<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?=FAVICON?>" type="image/x-icon" />
  <title><?=$_titulo?> - <?=TITULO_VIEW?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="<?=LAYOUT?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>font-awesome-4.6.2/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?=LAYOUT?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/select2/select2.min.css">
  <link rel="stylesheet" href="<?=LAYOUT?>plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?=LAYOUT?>css/css.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue <?php if($_base['menu_fechado'] == 1){ echo "sidebar-collapse"; } ?> sidebar-mini">
<div class="wrapper">

	<?php require_once('htm_topo.php'); ?>

	<?php require_once('htm_menu.php'); ?>

	<div class="content-wrapper">

	    <section class="content-header">
	      <h1>
	      <?=$_titulo?>
	      <small><?=$_subtitulo?></small>
	      </h1> 
	    </section>

		<!-- Main content -->
    	<section class="content">
    	<div class="row">
        	
        	<div class="col-xs-12">    		
          	<form action="<?=$_base['objeto']?>apagar_varios" method="post" id="form_apagar" name="form_apagar" >

				<!-- box -->
				<div class="box">
					<div class="box-body">

						<div style="text-align:left;">

							<button type="button" class="btn btn-primary" onClick="window.location='<?=$_base['objeto']?>nova/grupo/<?=$grupo?>';">Nova</button>

					        <button type="button" class="btn btn-default" onClick="apagar_varios('form_apagar');" >Apagar Selecionados</button>
					        
					        <?php if($acesso_categorias){ ?>
					        <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>grupos';">Categorias</button>
					        <?php } ?>

					        <?php if($acesso_autores){ ?>
					        <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>autores';">Autores</button>
					        <?php } ?>

					        <?php if($acesso_destaques){ ?>
					        <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>destaques';">Destaques</button>
					        <?php } ?>

					        <?php if($acesso_mascara){ ?>
					        <button type="button" class="btn btn-default" onClick="window.location='<?=$_base['objeto']?>mascara';">Marca d'água</button>
					        <?php } ?>
					        
				        </div>

				        <div style="text-align:left; padding-top:15px;">
				        	<select data-plugin-selectTwo class="form-control select2" name="grupo" onChange="window.location='<?=$_base['objeto']?>inicial/grupo/'+this.value;"; >
				            	<option value='' selected >Todas</option>
					            <?php
					            foreach ($categorias as $key => $value) {
					            	echo "<option value='".$value['codigo']."' ".$value['selected']." >".$value['titulo']."</option>";
					            }
					            ?>
							</select>
				       	</div>

				        <hr>

						<table id="tabela1" class="table table-bordered table-striped">

		                	<thead>
								<tr>
				                	<th>Sel.</th>
				                    <th>Data</th>
									<th>Titulo</th>
									<th>Grupo/Categoria</th>
									<th>Destaque</th>
				                </tr>
							</thead>
							
				            <tbody>
							<?php
								
								foreach ($noticias as $key => $value) {

									$linklinha = "onClick=\"window.location='".$_base['objeto']."alterar/codigo/".$value['codigo']."';\" style='cursor:pointer;' ";
									
									echo "
									<tr>
										<td class='center' style='width:30px;' ><input type='checkbox' class='marcar' name='apagar_".$value['id']."' value='1' ></td>
										<td $linklinha >".$value['data']."</td>
										<td $linklinha >".$value['titulo']."</td>
										<td $linklinha >".$value['categoria']."</td>
										<td $linklinha >".$value['destaque']."</td>
									</tr>
									";
									
								}
								
							?>
				            </tbody>

		                </table>

		            </div>

				</div>
				<!-- /.box -->

			</form>
        	</div>

		</div>
		<!-- /.row -->
	</section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <?php require_once('htm_rodape.php'); ?>

</div>
<!-- ./wrapper -->

<script src="<?=LAYOUT?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?=LAYOUT?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?=LAYOUT?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=LAYOUT?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?=LAYOUT?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?=LAYOUT?>plugins/fastclick/fastclick.js"></script>
<script src="<?=LAYOUT?>plugins/select2/select2.full.min.js"></script>
<script src="<?=LAYOUT?>plugins/iCheck/icheck.min.js"></script>
<script src="<?=LAYOUT?>dist/js/app.min.js"></script>
<script src="<?=LAYOUT?>dist/js/demo.js"></script>
<script>
  $(function () {
  	
  	$(".select2").select2();

    $('#tabela1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });

	$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue'
  	});
  	
  });
</script>
<script>function dominio(){ return '<?=DOMINIO?>'; }</script>
<script src="<?=LAYOUT?>js/funcoes.js"></script>

</body>
</html>