<?php
require_once (dirname ( __FILE__ ) . '/../../config.php');?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<link rel="stylesheet" href="estilo1.css">
<title>
Tutoriales WebCursos
</title>

<body>
<div id="linea">
</div>
<div id="header">
	<div id="logos">
			<a class="logo" href="<?php echo $CFG->wwwroot . '/local/tutoriales/index.php'; ?>">
				<img src="images/nuevo-logo-wcurso_transp2.gif">
			</a>
		<div class="logo2">
		</div>
	</div>
</div>


<div id="linea">
</div>
<div id="banner" class="alumnos">
</div>
<div id="linea2">
</div>

<script>
function doshow(num) {
	document.getElementById('light'+num).style.display='block';
	document.getElementById('fade'+num).style.display='block';
}
function dohide(num) {
	document.getElementById('light'+num).style.display='none';
	document.getElementById('fade'+num).style.display='none';
}
</script>

<div id="main">
	<div id="container1" class="clearfix">
		<table width="1024px" height="200px" cellspacing="10px">
		<tr>
			<td width="50%" height="33%">
				<table>
				<tr>
					<td class="flecha" width="5%" height="25%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(1)">&iquest;C&oacute;mo env&iacute;o un mensaje en mi curso?</a>
						<div class="nivel">Nivel B&aacute;sico</div>
						<div class="resumen">Ajustes de curso para enviar un mensaje en Foros/Novedades.</div>
    					<div id="light1" class="white_content">
    					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(1)">Cerrar</a>
    						</div>
    						<img src="images/mensaje_curso.png">
    					</div>
    					<div id="fade1" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
			<td>
				<table>
				<tr>
					<td class="flecha" width="5%" height="25%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(2)">&iquest;C&oacute;mo edito mi perfil?</a>
						<div class="nivel">Nivel B&aacute;sico</div>
						<div class="resumen">Ajustes para editar tu perfil.</div>
    					<div id="light2" class="white_content">
    					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(2)">Cerrar</a>
    						</div>
    						<img src="images/editar_perfil.png">
    					</div>
    					<div id="fade2" class="black_overlay"></div>
    				</td>
				</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="50%" height="33%">
				<table>
				<tr>
					<td class="flecha" width="5%" height="25%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(3)">&iquest;C&oacute;mo me desincribo de un curso? (Darme de baja)</a>
						<div class="nivel">Nivel B&aacute;sico</div>
						<div class="resumen">Ajustes de curso para desmatricular uno o m&aacute;s cursos.</div>
    					<div id="light3" class="white_content">
    					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(3)">Cerrar</a>
    						</div>
    						<img src="images/darse_de_baja.png">
    					</div>
    					<div id="fade3" class="black_overlay"></div>
    				</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
	</div>

	<div id="separador">
	</div>
	<div id="container2">
		<div class="atras">
			<a href="<?php echo $CFG->wwwroot . '/local/tutoriales/index.php'; ?>">
			<img src="images/atras.png"></a>
		</div>
	</div>
</div>
<div id="foot">
	<div class="footer">&copy; <?php echo date('Y');?> Universidad Adolfo Ib&aacute;&ntilde;ez</div>
	<div id="social">
		<div class="facebook">
			<a href="https://www.facebook.com/coordinador.webcursosuai">
			<img width="50" height="50" src="images/facebook.png">
			</a></div>
		<div class="twitter">
			<a href="https://twitter.com/UAI_CL">
		<img width="50" height="50" src="images/twitter.png">
		</a></div>
	</div>
</div>
</body>