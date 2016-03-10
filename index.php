<!DOCTYPE html>
<html>
<head>
<title>Drupal Camp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css" >
    <link rel="stylesheet" href="css/style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<div class="Home">
        <header>
            <nav class="nav navbar-fixed-top" id="top-nav">
                <div class="container">
                        <div class="navbar-nav col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <a class="navbar-brand col-xs-4 col-sm-4 col-md-4" href="#" id="brand-img">
                            <img alt="Brand" src="images/logo.png" class="drupal-img">
                          </a>
                            <div class="htop col-sm-4">
                                <p class="navbar-text" id="date">MAY 07,2016 - May 08, 2016</p>
                            </div>
                                <div class="text-center col-sm-4 col-md-4 col-xs-6">
                              <a class="fb-social navbar-right" href="https://web.facebook.com/groups/phdrug/"><img src="images/fb.png"></a>
                              <!-- <p class="n3 navbar-text navbar-right"><a href="#register" class="navbar-link"><span id=m1>ATTEND</span></a></p> -->
                            </div>
                        </div>
                </div>
            </nav>
        </header>
        <div class="bg clearfix" id="bg-size">
            <div class="btn-nav">
                <nav class="navbar navbar-default" id="nav-menu">
                <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                             <ul class="nav navbar-nav col-lg-12 col-md-12 col-sm-12">
                                <li class="col-lg-3 col-md-3 col-sm-3"><a href="#speakers" ><img src="images/session.png"><p class="col-lg-12 col-md-12 col-sm-12">SPEAKERS</p></a></li>
                                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#sponsors" ><img src="images/sponsor.png"><p class="col-lg-12 col-md-12 col-sm-12">SPONSORS</p></a></li>
                                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#register" ><img src="images/attend.png"><p class="col-lg-12 col-md-12 col-sm-12">REGISTER</p></a></li>
                                <li class="col-lg-2 col-md-2 col-sm-2"><a href="#venue"><img src="images/locate.png"><p class="col-lg-12 col-md-12 col-sm-12">VENUE</p></a></li>
                                <li class="col-lg-3 col-md-3 col-sm-3"><a href="#about"><img src="images/update.png"><p class="col-lg-12 col-md-12 col-sm-12">ABOUT</p></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                    <div class="drupal-box">
                        <div class="bg-txt">
                            <h1 class="col-xs-12" id="drupal-txt">DRUPAL CAMP</h1>
                            <p class="col-xs-12" id="manila-txt">Manila</p>
                            <h1 class="col-xs-12" id="lbl">2016</h1>
                        </div>
                    </div>
            </div>
                    <div class="m2 col-md-12 col-sm-12 col-xs-12">
                                <button type="button" class="btn  btn-responsive" alt=""><a href="#register" class="btn-attend-main"><img src="images/btn.png"><span id="attend-txt">ATTEND</span></a></button>
                        </div>
                </div>
            <section id="speakers">
                <div id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <div class="text-center">
                        <ol class="carousel-indicators">
                          <li class="item1 active"></li>
                          <li class="item2"></li>
                          <li class="item3"></li>
                          <li class="item4"></li>
                          <li class="item5"></li>
                          <li class="item6"></li>
                          <li class="item7"></li>
                          <li class="item8"></li>
                        </ol>
                    </div>

                    <?php include_once('speakers.php'); ?>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                    <?php foreach ($speakers as $key => $speaker) { ?>
                        <?php //if (!$speaker['name']) continue ?>
                        <div class="item <?php echo $key === 0 ? 'active' :'' ?>" >
                            <div class="row">
                                <h4 class="col-md-9"><a href="<?php echo $speaker['link'] ?>"><?php echo $speaker['name'] ?></a></h4>
                                <span class="col-md-12 col-sm-12 col-xs-12" id="span1"><?php echo $speaker['position'] ?></span>
                                <span class="col-md-12 col-sm-12 col-xs-12" id="span2"><?php echo $speaker['company'] ?></span>
                                <p class="col-md-8 col-sm-8 col-xs-8"><?php echo $speaker['intro'] ? $speaker['intro'] : '' ?></p>
                                <a href="<?php echo $speaker['link'] ?>"><img class="col-md-4" id="speaker-img" src="images/speakers/<?php echo $speaker['image'] ?>" alt="<?php echo $speaker['name'] ?>"></a>
                                <!-- <div class="m3 col-md-12 col-sm-12 col-xs-12">
                                    <button type="button" class="btn  btn-responsive" alt=""><a href="#register"><img src="images/btn.png"><span id="attend-txt2">ATTEND</span></a></button>
                                </div> -->
                            </div>
                        </div>
                    <?php } ?>
                    </div>


                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" onclick="return false;" role="button">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" onclick="return false;"  role="button">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
        </section>

        <!-- <section id="sponsors" class="section-white">
            <div class="container">
                <div class="row clearfix">
                    <p class="comingsoon">More coming soon...</p>
                </div>
            </div>
        </section> -->

        <section id="register" class="section-white">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <h2 class="block-title">CALL FOR SPEAKERS</h2>

<p>This year's theme is about "Building stronger development community" so we'll focus on topics that enhances the skills in building better drupal sites and projects.</p>

<p>Please see below for some breakouts for your speaker session . We look forward to your submissions and you being a speaker!</p>

<p>Drupal Version </p>
<ul>
<li>Drupal 7</li>
<li>Drupal 8 </li>
</ul>


<p>Tracks: </p>
<ul>
<li>Coding and Development, Security</li>
<li>Core Conversations</li>
<li>DevOps, Performance</li>
<li>Front End, Site Building, User Experience Design, Javascript libraries</li>
<li>PHP, PHP 7</li>
<li>Symfony, Composer</li>
<li>Training and Workshops</li>
</ul>


<p>Target Audience: Intermediate to advance developers. Not necessarily drupal developers only.
</p>

<p>All of our program is curated by an independent content team, advised by a large amount of industry specialists and technology experts. We select and build the program based on the speakers’ competence, and talks’ relevance to our program.</p>

<p>Terms of suggesting a proposal</p>
<ul>
<li>The camp does not cover the costs of travel or accommodation for speakers.</li>
<li>Speakers get a free conference pass</li>
<li>The talks will be filmed and made available online</li>
<li>The call for speakers is open until April 10, 2015</li>
<li>The speaker selection process begins on April 11, 2015</li>
<li>Suggested speakers submitted before April 11 will be informed before April 15</li>
</ul>

<p>For training and workshops, the speaker must be available on May 8, 2016.</p>

<a class="typeform-share link btn btn-lg btn btn-default" href="https://rachel288.typeform.com/to/zn0nEe" data-mode="2" target="_blank">Submit your proposal</a>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>



                    </div>
                </div>
            </div>
        </section>

        <section id="register" class="section-white">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <h2 class="block-title">REGISTER</h2>

                        <div data-tb="ticket-form" data-event="5106"></div>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://cdn.ticketbase.com/widgets/v0.1/ticketbase.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','ticketbase-wjs');</script>
                    </div>
                </div>
            </div>
        </section>

        <section id="venue">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <h2 class="block-title">VENUE</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="venue-overlay">
                        <p>10th Fl, Hewlett Packard Enterprise<br/>
                            Two Cyberpod Eton Centris EDSA cor. Quezon Ave., Quezon City 1100</p>
                                <br/>
                        
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p>How to get here:</p>
                        <b>From the airport</b>
                        <ol>
                            <li>Take the Free shuttle bus to Pasay, City.</li>
                            <li>Take the MRT from Taft to Quezon Ave.</li>
                        </ol>
                    </div>

                    <div class="col-md-4">
                        <p>&nbsp;</p>
                        <b>Coming from the North via NLEX</b>
                        <ol>
                            <li>Take the MRT from North Ave. to Quezon Ave.</li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="map-overlay" onClick="style.pointerEvents='none'">
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.2504459796082!2d121.037862614749!3d14.641719879993213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7aa1e9139cd%3A0x3dc172222f531309!2sEton+Centris!5e0!3m2!1sen!2sph!4v1457143656728"  height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
        </section>

        <section id="news" class="section-white">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <h2 class="block-title">ABOUT</h2>
                        <div class="post">
                            <div class="post-content">
<p>DrupalCamp Manila is an annual event where all professional Drupal developers, enthusiasts, and students from different schools and universities gather to showcase learning and celebrate interest in Drupal and in the Drupal Community.</p>

<p>Our theme for this year is <strong>​"Building stronger development community"</strong>.</p>

<p>Drupal, with its 8th version released, is a Free Software tool to ease the development of web applications. Due to its versatility and power, its usage is growing in web projects of all kinds &mdash; from big industries to small companies.

<p>The said event is being celebrated by several countries worldwide to show their support to Drupal which actively participated by New Jersey, Mumbai, South Wellington, Phoenix, London, Pune, Ottawa, Austin, Stanford and Amsterdam. This coming May 7­ to 8, Manila will be one of those cities that will be participating in the biggest Camp of Web Developers in the world to be hosted by Drupal Pilipinas.</p>

<p>The first day is full of informative sessions, inspiring keynotes, social events, BOFs, usability testing and more.</p>
<p>The second day is full of workshops and hands-on trainings for beginners to advance skills.</p>

<p>Join us in this joyous celebration of community and code!</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer section-white">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6">
                        Organized by <a href="http://drupalpilipinas.org">Drupal Pilipinas</a> and <a href="http://koodi.ph">Koodi Systems</a>
                         <a class="fb-social2 navbar-right" href="https://web.facebook.com/groups/phdrug/"><img src="images/fb.png"></a>
                    </div>

                    <div class="col-md-6">

                    </div>
                </div>
            </div>

        </section>

</div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>