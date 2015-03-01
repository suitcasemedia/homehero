 <html>
 <head>
 	<title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
 	<?php
/**
 * Scripts and stylesheets
 *
 * The build task in Grunt renames production assets with a hash
 * Read the asset names from assets-manifest.json
*/

/**************************************************************************************************************************************
THE ENVIRONMENT IS IN PRODUCTION
LOAD UNCOMPRESSED CSS AND JS SO THAT YOU CAN SEE WHAT IS WHAT
***************************************************************************************************************************************/

if (ENVIRONMENT === 'development') {
	$assets = array(
		'css'       => URL.'public/assets/css/main.css',
		'js'        => URL.'public/assets/js/scripts.js',
		'modernizr' => URL.'public/assets/vendor/modernizr/modernizr.js',
		'jquery'    => '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js'
		);
	$PageSpecificJs = array(); 
	if(isset($this->js))
	{
		foreach($this->js as $js){
			$PageSpecificJs[] = '<script src="'. URL.'views/'.$js.'"></script>';
		}
	}

/**************************************************************************************************************************************
THE ENVIRONMENT IS NOT PRODUCTION
LOAD COMPRESSED CSS AND JS TO MAKE THE WEBSITE LOAD FASTER
***************************************************************************************************************************************/

} else {
	$get_assets =  '/assets/manifest.json';
	$assets     = json_decode($get_assets, true);
	$assets     = array(
		'css'       => URL.'public/assets/css/main.min.css?' . $assets['assets/css/main.min.css']['hash'],
		'js'        => URL.'public/assets/js/scripts.min.js?' . $assets['assets/js/scripts.min.js']['hash'],
		'modernizr' => URL.'public/assets/js/vendor/modernizr.min.js',
		'jquery'    => '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'
		);
}
echo '<LINK href="'.$assets['css'].'" rel="stylesheet" type="text/css">' ; 
   /**
   * jQuery is loaded using the same method from HTML5 Boilerplate:
   * Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
   * It's kept in the header instead of footer to avoid conflicts with plugins.
   */
  echo '<script src="'.$assets['jquery'].'"></script>' ;
  echo  '<script src="'.$assets['modernizr'].'"></script>' ;
  echo '<script src="'.$assets['js'].'"></script>' ;
  foreach ($PageSpecificJs as $key => $value) {
  	echo $value;
  	# code...
  }

/**************************************************************************************************************************************
END OF CSS AND JS
***************************************************************************************************************************************/
  ?>
 <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo URL ?>">homehero.london</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="<?php echo URL ?>#about">Whats an emergency?</a>
                    </li> 
                    <li class="page-scroll">
                        <a href="#about">Pricing</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">FAQ's</a>
                    </li>

                    <li class="page-scroll">
                        <a href="">tel: 0207 896534</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   

	<?php  Session::init(); ?>
	<div id="header">
		<?php 
		if (Session::get('loggedIn') == false) : ?> 
		
		<a href="<?php echo URL; ?>index">Index</a>
		<a href="<?php echo URL; ?>help">Help</a>
	<?php endif; ?>
	<?php 
	if (Session::get('loggedIn') == true) : ?> 
	<a href="<?php echo URL; ?>dashboard">Dashboard</a>
	<a href="<?php echo URL; ?>note">Notes</a>


	<?php 
	if (Session::get('role') == 'owner') : ?> 
	<a href="<?php echo URL; ?>user">Users</a>
<?php endif; ?>
<a href="<?php echo URL; ?>dashboard/logout">Logout</a>


<?php else: ?>
	<a href="<?php echo URL; ?>login">Login</a>

	<?php 
	endif; ?>

</div> <!-- /header -->

<div id ="content">