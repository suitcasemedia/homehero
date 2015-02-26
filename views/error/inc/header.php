<html>
	<head>
<title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>

<LINK href="<?php echo URL; ?>public/css/style.css" rel="stylesheet" type="text/css">
<script src="<?php echo URL; ?>public/js/jquery.js"></script>
<script src="<?php echo URL; ?>public/js/custom.js"></script>

<!--jquery ui -->
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>




	</head>

	<body>
		

		<?php  Session::init(); ?>
<div id="header">
		

	</div> <!-- /header -->

	<div id ="content">