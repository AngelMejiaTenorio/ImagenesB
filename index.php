

<!DOCTYPE html>
<html>
<head>
	<title>Google Imagenes</title>
	<?php require_once "dependecias.php"; ?>
	<?php 
			require_once "contenido.php";
			$datos=contenido();
	?>
</head>
<body style="background-color: #000000;color: lime">
	<div class="container">
		<h1>Presentacion de Imagenes relacionas con la Muisca</h1>
		<h2>Musica de deleite personal</h2>
		<!--
		<ul class="gridder">  
			<li class="gridder-list" data-griddercontent="#gridder-content-0">
				<img src="img/EnriqueCamacho.jpg">
				
			</li>

		</ul>

		<div id="gridder-content-0" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="img/EnriqueCamacho.jpg"  class="img-responsive" />
				</div>
				<div class="col-sm-6">
					<h2>Henrique Camacho</h2>
					<p>
						DJ y productor de trance psicodélico progresivo / Hi-tech / Tech House de São Paulo, Brasil Fundador del sello Purple Haze Records. </p>
					
				</div>
			</div>
			
		</div>
-->
		<ul class="gridder">
			<?php 
			for ($i=0; $i < count($datos) ; $i++):
				$d=explode("||", $datos[$i]);

				?>
				<li class="gridder-list"
				data-griddercontent="<?php echo '#gridder-content-'.$i ?>">
					<img src="<?php echo  $d[0] ?>">
				</li>
				<?php  
			endfor;
			?>			
		</ul>
		<?php
		for ($i=0; $i < count($datos); $i++):
			$d=explode("||", $datos[$i]);
		?>
			<div id="<?php echo 'gridder-content-'.$i ?>" class="gridder-content">
				<div class="row">
					<div class="col-sm-6">
						<img src="<?php echo  $d[0] ?>" class="img-responsive" />
					</div>
					<div class="col-sm-6">
						<h2><?php echo $d[1]; ?></h2>
						<p><?php echo $d[2]; ?></p>
					</div>
				</div>
			</div>
		<?php
			endfor;
		?>
	</div>

</body>
</html>

<script  type="text/javascript">
	$(document).ready(function(){
		$(".gridder").gridderExpander({
			scroll: true,
			scrollOffset: 60,
                    scrollTo: "listitem",  // panel o listitem
                    animationSpeed: 100,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "<i class=\"fa fa-arrow-right\"></i>",
                    prevText: "<i class=\"fa fa-arrow-left\"></i>",
                    closeText : "<i class=\"fa fa-times \"></i>",
                    onStart: function () {
                    	console.log("Gridder Inititialized" ) ;
                    } ,
                    onContent : function () {
                    	console.log("Gridder Content Loaded" ) ;
                    	$(".carousel").carousel();
                    },
                    onClosed: function () {
                    	console.log("Gridder Closed" ) ;
                    }
                });
	});
</script>