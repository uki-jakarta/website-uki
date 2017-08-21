<!DOCTYPE html>
<!--
    This is a template
    By @EvyHernyta 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>My Website Template - One Big Page</title>

        <link rel="icon" href="assets/img/logo.png">
        <!-- CSS -->
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!-- Dan's Animate -->
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Custom -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- JS -->
        <!-- JQuery -->
        <script src="assets/jquery/jquery.js"></script>
        <!-- Tether -->
        <script src="assets/tether/js/tether.js"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <!-- Custom Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto');
        </style>
    </head>
    <body>
        <header>
            <?php include "subheader.php"; ?>
            <?php include "navigation.php"; ?>
        </header>
        <div class="container wrapper">
            <div class="row">
                <!--Breadcrumbs-->
                <nav class="breadcrumb col-lg-12 col-md-12">
                    <a class="breadcrumb-item" href="#">Home</a>
                    <a class="breadcrumb-item" href="#">Events</a>
                    <a class="breadcrumb-item active" href="#">Satu Event</a>
                </nav>
                <!--End of Breadcrumbs-->
                <div class="col-lg-8 col-md-12">
                    <div class="page-title">Satu Event</div>
                    <div class="text-muted berita-last-update">last updated 13 Juli 2017</div>
                    <div class="page-content">
                        <!--Featured Image-->
                        <div class="page-image">
                            <img class="img-thumbnail mx-auto d-block" src="http://placehold.it/1280x440" alt="Page Image">
                        </div>
                        <!--End of Featured Image-->
                        <div class="event-held">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 &mdash; 10:00 </li>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 15 Ags 2017 &mdash; 15 Ags 2017 </li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Aula FK UKI</li>
                                <li><i class="fa fa-id-badge" aria-hidden="true"></i> PMB UKI</li>
                                <li><i class="fa fa-pencil-square" aria-hidden="true"> Seminar</i></li>
                            </ul>
                        </div>
                        <div class="page-subtitle">Deskripsi</div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <div class="social-media-sharing">
                            <div class="sub-u">Share via</div>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="http://www.facebook.com/sharer.php?u=[EncodedURL]" target="_blank" rel="nofollow"><i class="fa fa-facebook-official fa-2x mod-facebook" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="http://twitter.com/share?text=[TITLE]&url=[URL]" target="_blank" rel="nofollow"><i class="fa fa-twitter fa-2x mod-twitter" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:?subject=[SUBJECT]&body=Check out this site [URL]" target="_blank" rel="nofollow"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="small-sections col-lg-4 col-md-12">
                    <ul class="list-unstyled">
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-event-title">Judul Event yang Akan Datang #1</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <div class="thumb-calendar-event-o">
                                <div class="thumb-calendar-short-date-o"><p class="thumb-date">24</p><p class="thumb-month">Ags</p></div>
                            </div>
                        </li>
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-event-title">Judul Event yang Akan Datang #2</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <div class="thumb-calendar-event-o">
                                <div class="thumb-calendar-short-date-o"><p class="thumb-date">6</p><p class="thumb-month">Sep</p></div>
                            </div>
                        </li>
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-event-title">Judul Event yang Akan Datang #3</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <div class="thumb-calendar-event-o">
                                <div class="thumb-calendar-short-date-o"><p class="thumb-date">20</p><p class="thumb-month">Sep</p></div>
                            </div>
                        </li>
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-event-title">Judul Event yang Akan Datang #4</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <div class="thumb-calendar-event-o">
                                <div class="thumb-calendar-short-date-o"><p class="thumb-date">22</p><p class="thumb-month">Sep</p></div>
                            </div>
                        </li>
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-event-title">Judul Event yang Akan Datang #5</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <div class="thumb-calendar-event-o">
                                <div class="thumb-calendar-short-date-o"><p class="thumb-date">22</p><p class="thumb-month">Sep</p></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
