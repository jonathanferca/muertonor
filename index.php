<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Muertonor | Pregunta lo que quieras</title>
	<link rel='stylesheet' type='text/css' href='/css/muertonor.css'/>
	<script src="/js/jquery-1.11.0.min.js"></script>
	<script src="/js/muertonor.js"></script>
</head>
<body>
	<div id='wrapper'>
		<div id='header'>
			<div>
				<h1>Muertonor</h1>
				<p>Pregunta lo que quieras y Muertonor te contestará</p>
			</div>
			<div class="top_ad">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Responsive - Header T&D Twenty Fourteen -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-4657734042732689"
				     data-ad-slot="3383224793"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
		<hr>

		<div id='nav_bar'>
			<ul class='nav_bar'>
				<li><a href="http://muertonor.procastina.com" target="_blank" title="Muertonor">Muertonor</a></li>
				<li><a href="http://www.procastina.com" target="_blank" title="Procastina Blog">Procastina Blog</a></li>
				<li><a href="#" id="trick_anchor" title="Instrucciones del juego">El truco</a></li>
			</ul>
		</div>
		<div id='trick_info'>
			<ol>
				<li>En petición debes escribir la respuesta a la pregunta que luego realizaras, para hacerlo sin que los demas vean la respuesta presiona la tecla del punto (".") y escribe la respuesta (el texto en pantalla será diferente al que escribes para esconder la respuesta).</li>
				<li>Cuando termines de escribir la respuesta presiona nuevamente punto (".") y tu respuesta estará guardada, a partir de este punto puedes escribir normal y cuando termines presiona dos puntos (":").</li>
				<li>Por último escribe tu pregunta y al finalizar asegurate de poner un signo de interrogación ("?") para que se despliegue la respuesta.</li>
			</ol>
		</div>
		<hr>
		
		<div id='content'>
			<div>
				<div>
					<label for='request'>Escribe la petición:</label>
					<input type='text' id='request' class='text_inputs'/>
				</div>
				
				<div>
					<label for='question'>Escribe la pregunta:</label>
					<input type='text' id='question' class='text_inputs'/>
				</div>
				
				<div id='answerholder'>
					<p>Tu respuesta:</p>
					<p id='answer'></p>
					<button id='restart'>Reiniciar</button>
				</div>
			</div>
		</div>
		
		<hr>
		<div id='footer'>
			<div class="bottom_ad">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Fat & Short - Sidebar T&D Twenty Fourteen -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:300px;height:250px"
				     data-ad-client="ca-pub-4657734042732689"
				     data-ad-slot="7639715998"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<div>
				<p><a href="http://www.procastina.com">Procastina Blog</a> - <?php echo date('Y'); ?></p>
			</div>
		</div>
	</div>
</body>
</html>