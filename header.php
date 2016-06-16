<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="BiRequest">
    <meta name="author" content="John Zeller">
    <link rel="icon" href="images/favicon.ico">

    <title><?php wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">


    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav">
            <li><a href="about.html" class="about-button"><strong>About</strong></a></li>
            <li><a href="events.html" class="events-button"><strong>Events</strong></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle resources-button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Resources <span class="caret"></span></strong></a>
              <ul class="dropdown-menu">
                <li><a href="#">General Info</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">Magazines + Articles</a></li>
                <li><a href="#">Dating + Fun</a></li>
                <li><a href="#">Etc</a></li>
              </ul>
            </li>
          </ul>
          <div id="navbar" class="join-button navbar-collapse collapse pull-right">
            <a href="join.html">
              <button type="button" class="btn btn-default btn" id="grad">
                <strong>Join 
                  <span class="glyphicon glyphicon-heart"></span>
                </strong>
              </button>
            </a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>