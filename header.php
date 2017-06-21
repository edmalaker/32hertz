<!DOCTYPE html>
<html lang="en">

<head>

    	<meta charset="utf-8">
    	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	
	<!-- my css styles -->
    	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	

<!-- Bootstrap Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	
	<!-- google font -->
	<link href='http://fonts.googleapis.com/css?family=Bitter:700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet' type='text/css'>
	
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    
	<!-- adds jquery should prob be in footer.php -->
	<?php wp_enqueue_script("jquery"); ?>


    
	<!-- Wordpress head hook -->
	<?php wp_head(); ?>
  </head>


  <body id = "myback2">

  <!-- end of header.php -->
 