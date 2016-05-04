<html>
	<head>
		<title>FAQ@utn.so</title>
		<style>tr:nth-child(even){ background-color: #DDD; }</style>
	</head>
	<body>
		<h1>FAQ@utn.so</h1>
		<h4>Porque el CSS es muy 2000's</h4>
		Las URLs de la tabla redirigen a sus destinos. Cualquiera de ellas puede usarse accediendo a <b>http://faq.utn.so/<i>${URL}</i></b>.<br />
		Las redirecciones v&aacute;lidas <a href="https://github.com/sisoputnfrba/faqoperativos-links">se versionan en GitHub</a>. Los pull requests son bienvenidos.
		<table>
			<tr>
				<th>URL</th>
				<th>Destino</th>
			</tr>
		<?php
			$archivo = file(".htaccess");
			foreach($archivo as $line_number => $line) {
				if(strpos($line, '#') === FALSE) {
					$parts = explode(' ', $line);
					if($parts[0] == "Redirect" && $parts[1] == "302") { ?>
			<tr>
				<td><a href="<?php echo $parts[3]; ?>"><?php echo $parts[2]; ?></a></td>
				<td><?php echo $parts[3]; ?></td>
			</tr><?php
					}
				}
			}
		?>
		</table>
	</body>
</html>

