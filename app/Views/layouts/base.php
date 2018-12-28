<!DOCTYPE html>
<html lang="<?php $application->lang(); ?>">
	<head>

		<!-- List of required meta tag for the application -->
		<!-- Set the following tags for search engine      -->
		<!-- optimization and defining your application    -->
	    <!-- The below meta tags *must* come first         -->
	    <!-- any other content must come *after* these tags-->
	    <meta charset="<?php $application->charset(); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="csrf-token" content="<?php $application->token(); ?>">

		<!-- Favicon for your application -->
    	<link rel="shortcut icon" href="<?php $application->favicon(); ?>" />

		<!-- Sets the title of your application -->
		<title><?php echo $application->title(); ?></title>

		<!-- Include main styles below this line -->
		<link rel="stylesheet" href="<?php Asset::find('css/app.css'); ?>" />

		<!-- Include main scripts below this line  -->
		<script type="text/javascript" src="<?php Asset::find('js/app.min.js'); ?>"></script>
	</head>

	<body>

		<!-- Content area for the application -->
		<?php content(); ?>
	</body>
</html>