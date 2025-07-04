    <head>
        <!-- Meta Tags -->
		<meta charset="<?php bloginfo("charset");?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title><?php bloginfo(show: "blogname");?></title>
		
		<!-- Favicon -->
        <link rel="icon" href="<?php echo get_template_directory_uri()."/assets/img/favicon.png"?>">

		<?php wp_head(); ?>
    </head>