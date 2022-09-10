<?php
	function query_github_api($path) {
		$url = 'https://api.github.com' . $path;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla 5.0");
		$response = curl_exec($ch);
		$json= json_decode($response, true);
		curl_close($ch);
		return $json;
	}

	if(md5($_GET['key']) == $_ENV['FAQ_UTN_SO_SECRET']) {
		$payload = query_github_api('/repos/sisoputnfrba/faqoperativos-links/branches/master');
		$new_hash = $payload['commit']['sha'];
		echo $new_hash . " - ";
		echo copy('https://raw.githubusercontent.com/sisoputnfrba/faqoperativos-links/'. $new_hash .'/.htaccess', '.htaccess');
	}
?>
