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
			<h1>Muertonor</h1>
			<p>Pregunta lo que quieras y Muertonor te contestará</p>
		</div>
		<hr>
		
		<div id='content'>
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
		
		<hr>
		<div id='footer'>
			<p>Todos los derechos reservados © <?php echo date('Y'); ?> - <a href="http://www.procastina.com">Procastina Blog</a></p>
		</div>
	</div>
</body>
</html>