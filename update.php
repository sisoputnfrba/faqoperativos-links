<?php
	if(md5($_GET['key']) == $_ENV['FAQ_UTN_SO_SECRET']) {
		echo copy('https://raw.github.com/sisoputnfrba/faqoperativos-links/master/.htaccess', '.htaccess');
        }
?>

