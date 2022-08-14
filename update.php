<?php
	if(md5($_GET['key']) == $_ENV['FAQ_UTN_SO_SECRET']) {
                $payload = json_decode($_POST['payload'], true);
                $new_hash = $payload['after'];
                echo copy('https://raw.githubusercontent.com/sisoputnfrba/faqoperativos-links/'. $new_hash .'/.htaccess?t='.time(), '.htaccess');
        }
?>

