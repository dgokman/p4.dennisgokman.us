<!DOCTYPE html>
<html>
<head>
    

	<title><?php if(isset($title)) echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/sample-app.css" />
    
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

    <body>	
    

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>