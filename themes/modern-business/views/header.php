<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><ion:meta_title /> | <ion:site_title /></title>

    <!-- Bootstrap Core CSS -->
    <link href="<ion:theme_url />css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<ion:theme_url />css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<ion:theme_url />css/bootstrap-theme.css" >

    <!-- Custom Fonts -->
    <link href="<ion:theme_url />font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery Version 1.11.0 -->
    <script src="<ion:theme_url />js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<ion:theme_url />js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<ion:home_url />"><ion:site_title /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--
							Navigation Menu
						-->
						<ion:navigation level="0"  active_class="active"  >
							<li class="divider"></li>
							<li>
								<a href="<ion:url />"><ion:title /></a>
							</li>
						</ion:navigation>


						<!--
							Language Selector
						-->
						<!--<ion:languages tag="ul" class="right">
							<li <ion:language:is_active> class="active"</ion:language:is_active>>
								<a class="small button" href="<ion:language:url />">
									<ion:language:code />
								</a>
							</li>
						</ion:languages>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
