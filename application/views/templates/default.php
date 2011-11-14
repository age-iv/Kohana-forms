<!DOCTYPE html>
<html lang="ru">
	<head>
		<title><?= $title ?></title>
		<?php foreach ($styles as $style => $media) echo HTML::style($style, array('media' => $media), NULL, TRUE), "\n" ?>
		<link type="text/css" href="/media/default/css/style.css" rel="stylesheet">
		<?php foreach ($scripts as $script) echo HTML::script($script, NULL, NULL, TRUE), "\n" ?>
			<script>
				 /*$(document).ready(function() {
				   $("#link").click(function() {
				     alert("Hello world!");
				   });
				 });*/
				$(document).bind("mobileinit", function(){
  				//apply overrides here
				});
			</script>
	</head>
	<body>
	<div class="contain">
		<div class="header"><?php echo $header; ?></div>
		<div class="login">
			<div><?php echo $login; ?></div>
			<div><?php echo $usermenu; ?></div>
		</div>
		
		<div class="cc"></div>
		
		<div class="message"><?php echo Message::display(); ?></div>
		<div class="cc"></div>
		
		<div class="block"><?php echo $content; ?></div>
		<div class="news"><?php echo $news; ?></div>
	</div>
		<div class="footer"><?php echo $footer; ?></div>
	</body>
</html>