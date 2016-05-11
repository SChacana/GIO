<?php 
require_once (dirname ( __FILE__ ) . '/../../config.php');?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

<div id="banner" class="profesores">
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
		<table width="1024px" height="350px" cellspacing="5px">
		<tr>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="25%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(1)">&iquest;C&oacute;mo agrego/inscribo un ayudante a mi curso?</a>
						<div class="nivel">Nivel B&aacute;sico</div>
						<div class="resumen">Ajustes de curso para ingresar uno o m&aacute;s ayudantes.</div>
    					<div id="light1" class="white_content">
    					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(1)">Cerrar</a>
    						</div>
    						<img src="images/ayudante.png">
    					</div>
    					<div id="fade1" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="25%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(2)">&iquest;C&oacute;mo editar mi perfil?</a>
						<div class="nivel">Nivel B&aacute;sico</div>
						<div class="resumen">Ajustes de perfil.</div>
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
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="50%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(3)">&iquest;C&oacute;mo subir un archivo a mi curso?</a>
						<div class="nivel">Nivel B&aacute;sico</div>
						<div class="resumen">Ajustes de curso para subir archivos.</div>
    					<div id="light3" class="white_content">
        					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(3)">Cerrar</a>
    						</div>
    						<img src="images/agregar_archivo.png">
    					</div>
    					<div id="fade3" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="50%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(4)">&iquest;C&oacute;mo me desinscribo de un curso? (Darme de Baja)</a>
						<div class="nivel">Nivel B&aacute;sico</div>
						<div class="resumen">Ajustes de curso para desmatricular uno o m&aacute;s cursos.</div>
						<div id="light4" class="white_content">
    					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(4)">Cerrar</a>
    						</div>
    						<img src="images/darse_de_baja.png">
						</div>
    					<div id="fade4" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="50%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(5)">&iquest;C&oacute;mo env&iacute;o un mensaje en mi curso?</a>
						<div class="nivel">Nivel B&aacute;sico</div>
						<div class="resumen">Ajustes de curso para enviar un mensaje en Foros/Novedades.</div>
    					<div id="light5" class="white_content">
    					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(5)">Cerrar</a>
    						</div>
    						<img src="images/mensaje_curso.png">
    					</div>
    					<div id="fade5" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="50%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(6)">&iquest;C&oacute;mo crear un buz&oacute;n de Turnitin?</a>
						<div class="nivel">Nivel Medio</div>
						<div class="resumen">Buz&oacute;n para entrega de trabajos,tareas y/o pruebas.</div>
    					<div id="light6" class="white_content">
    						<div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(6)">Cerrar</a>
    						</div>
    						<iframe width="100%" height="90%" src="//www.youtube.com/embed/Rr8h2Lx8X9A" frameborder="0"></iframe>
    					</div>
    					<div id="fade6" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="50%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(7)">&iquest;C&oacute;mo convertir un documento Word en PDF?</a>
						<div class="nivel">Nivel Medio</div>
						<div class="resumen">Conversi&oacute;n de un documento Word a PDF.</div>
    					<div id="light7" class="white_content">
    						<div class="texto2">
    							Se recomienda utilizar: 
    							<a class="pdf" target="_blank" href="http://www.cutepdf.com/Products/CutePDF/writer.asp">CutePDF</a>
    							</div>
    					  	<div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(7)">Cerrar</a>
    						</div>
    						<iframe width="100%" height="85%" src="//www.youtube.com/embed/eciRarZuJqg" frameborder="0"></iframe>
    					  </div>
    					<div id="fade7" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="50%"></td>
					<td>
						<a class="titulo" href = "javascript:void(0)" onclick = "doshow(8)">eMarking &iquest;C&oacute;mo imprimir una prueba?</a>
						<div class="nivel">Nivel Medio</div>
						<div class="resumen">M&oacute;dulo de env&iacute;o e impresi&oacute;n de pruebas v&iacute;a Webcursos.</div>
    					<div id="light8" class="white_content">
    					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(8)">Cerrar</a>
    						</div>
    						<iframe width="100%" height="90%" src="//www.youtube.com/embed/HqA-3jMJoyI" frameborder="0"></iframe>
    					</div>
    					<div id="fade8" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="50%"></td>
					<td>
						<a class="titulo" href= "javascript:void(0)" onclick = "doshow(9)">Creaci&oacute;n de r&uacute;brica para m&oacute;dulo Emarking</a>
						<div class="nivel">Nivel Medio</div>
						<div class="resumen">R&uacute;brica de correcci&oacute;n para pruebas en nuevo m&oacute;dulo Emarking</div>
						<div id="light9" class="white_content">
							<div class="fondo">
								<a class="cerrar" href="javascript:void(0)" onclick="dohide(9)">Cerrar</a>
							</div>
							<iframe width="100%" height="90%" src="//www.youtube.com/embed/yHUkeo8-YZM" frameborder="0"></iframe>
						</div>
						<div id="fade9" class="black_overlay"></div>
					</td>
				</tr>
				</table>
			</td>
                         <td width="50%" height="20%">
                                 <table>
                                 <tr>
                                         <td class="flecha" width="10%" height="50%"></td>
                                         <td>
                                                 <a class="titulo" href= "javascript:void(0)" onclick = "doshow(10)">&iquest;C&oacute;mo convertir un documento word en pdf? Alternativo</a>
                                                 <div class="nivel">Nivel Medio</div>
                                                 <div class="resumen">Conversi&oacute;n de documento word a pdf</div>
                                                 <div id="light10" class="white_content">
                                                         <div class="fondo">
                                                                 <a class="cerrar" href="javascript:void(0)" onclick="dohide(10)">Cerrar</a>
                                                         </div>
                                                         <iframe width="100%" height="90%" src="//www.youtube.com/embed/mY5dKAjjUpg?list=UUj20d97aKjQchHl38yLYFCg" frameborder="0"></iframe>
                                                 </div>
                                                 <div id="fade10" class="black_overlay"></div>
                                         </td>
                                 </tr>
                                 </table>
                         </td>
		</tr>
                 <tr>
                         <td width="50%" height="20%">
                                 <table>
                                 <tr>
                                         <td class="flecha" width="10%" height="50%"></td>
                                         <td>
                                                 <a class="titulo" href= "javascript:void(0)" onclick = "doshow(11)">Impresi&oacute;n de un documento word a pdf</a>
                                                 <div class="nivel">Nivel Medio</div>
                                                 <div class="resumen">Descarga e instalaci&oacute;n de cutepdf (impresora pdf)</div>
                                                 <div id="light11" class="white_content">
                                                         <div class="fondo">
                                                                 <a class="cerrar" href="javascript:void(0)" onclick="dohide(11)">Cerrar</a>
                                                         </div>
                                                         <iframe width="100%" height="90%" src="//www.youtube.com/embed/ZYYp8AuWwtI?list=UUj20d97aKjQchHl38yLYFCg" frameborder="0"></iframe>
                                                 </div>
                                                 <div id="fade11" class="black_overlay"></div>
                                         </td>
                                
                                 </tr>
                                 </table>
                         </td>
                                  </tr>
		</table>
		<!-- Aqui empiezan los proyectos, segunda tabla -->	
		<br><br>
		<div style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:36px;">PROYECTOS.<B>UAI</B>
		</div>
		<br>
<table cellspacing="5px">
		<tr>
			<td width="20%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="25%"></td>
					<td>
						<a class="titulo" href= "http://webcursos.uai.cl/course/view.php?id=26050&section=1" >&iquest;Qu&eacute; es eMarking?</a>
						<div class="nivel">Nivel Medio</div>
						<div class="resumen">Es el nuevo sistema de impresiones personalizadas de pruebas y ex&aacute; menes.</div>
    					<div id="light1" class="white_content">
    					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(1)">Cerrar</a>
    						</div>
    						<img src="images/ayudante.png">
    					</div>
    					<div id="fade1" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
			</td>
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="25%"></td>
					<td>
						 <a class="titulo" href= "http://webcursos.uai.cl/course/view.php?id=26050&section=3">&iquest;Qu&eacute; es Proyecto Reserva salas?</a>
						<div class="nivel">Nivel Medio</div>
						<div class="resumen">Programa para reservar las salas de estudio, clases y reuniones de la Universidad Adolfo Ib&aacute;&ntilde;ez.</div>
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
			<td width="50%" height="20%">
				<table>
				<tr>
					<td class="flecha" width="10%" height="50%"></td>
					<td>
						<a class="titulo" href= "http://webcursos.uai.cl/course/view.php?id=26050&section=2" >&iquest;Qu&eacute; es Proyecto Syllabi?</a>
						<div class="nivel">Nivel Medio</div>
						<div class="resumen">Plataforma que ayuda al proceso de acreditaci&oacute;n de todas las carreras de la Universidad Adolfo Ib&aacute;&ntilde;ez.</div>
    					<div id="light3" class="white_content">
        					    <div class="fondo">
    							<a class="cerrar" href = "javascript:void(0)" onclick = "dohide(3)">Cerrar</a>
    						</div>
    						<img src="images/agregar_archivo.png">
    					</div>
    					<div id="fade3" class="black_overlay"></div>
    				</td>
    			</tr>
				</table>
				<!-- En caso de querer agregar una columna en esta fila, debe agregarse aquí -->
			</td>
    			</tr>
				</table><br><br>
                
                <table width="1024px" height="100%">
		<tr>
			<td colspan="2" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:36px;">VIDEOS  TUTORIALES</td>
		</tr>
        <tr>
			<td><br><b style="font-size: 22px; color:#CCC; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">01.v Ayudant&iacute;as Virtuales</b><br><iframe width="498" height="280" src="https://www.youtube.com/embed/sQy6pg1gLr8" frameborder="0" allowfullscreen></iframe></td>
            <td><br><b style="font-size: 22px; color:#CCC; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">02.v Ayudant&iacute;as Virtuales</b><br><iframe width="500" height="281" src="https://www.youtube.com/embed/5OmaVoenjdI" frameborder="0" allowfullscreen></iframe></td>
		</tr>
         <tr>
			<td><br>
			<b style="font-size: 22px; color:#CCC; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">03.v Ayudant&iacute;as Virtuales</b><br>
			<iframe width="498" height="280" src="https://www.youtube.com/embed/j9rOGL11ixE" frameborder="0" allowfullscreen></iframe></td>
            <td><br>
            <b style="font-size: 22px; color:#CCC; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">04.v Ayudant&iacute;as Virtuales</b><br>
            <iframe width="500" height="281" src="https://www.youtube.com/embed/uyf4_DHBk7A" frameborder="0" allowfullscreen></iframe></td>
		</tr>
		</table>
                
		
        </div> <!--aqui termina div containter 1  --> 




	<div id="container2" >
			<div class="atras">
			<a href="<?php echo $CFG->wwwroot . '/local/tutoriales/index.php'; ?>">
			<img src="images/atras.png"></a>
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
	</div>      <!-- //aqui termina div MAIN -->
</div>
</body>
