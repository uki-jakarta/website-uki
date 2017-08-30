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

        <title>My Website Template - Berita</title>

        <link rel="icon" href="assets/img/logo.png">
        <!-- CSS -->
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!-- Dan's Animate -->
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Full Calendar -->
        <link href="fullcalendar/fullcalendar.css" rel="stylesheet"/>
        <link href="fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print"/>
        <!-- Custom -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- JS -->
        <!-- JQuery -->
        <script src="fullcalendar/lib/moment.min.js"></script>
        <script src="assets/jquery/jquery.js"></script>
        <!-- Tether -->
        <script src="assets/tether/js/tether.js"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <!-- Full Calendar -->
        <script src="fullcalendar/fullcalendar.js"></script>
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
                    <a class="breadcrumb-item" href="#">Berita</a>
                    <a class="breadcrumb-item active" href="#">Satu Judul Berita</a>
                </nav>
                <!--End of Breadcrumbs-->
                <div class="col-lg-8 col-md-12">
                    <div class="page-title">Satu Judul Berita</div>
                    <div class="text-muted berita-last-update">last updated 13 Juli 2017</div>
                    <div class="page-content">
                        <!--Featured Image-->
                        <div class="page-image">
                            <img class="img-thumbnail mx-auto d-block" src="http://placehold.it/400x300" alt="Page Image">
                        </div>
                        <!--End of Featured Image-->
                        <strong>Jakarta, Reporter UKI &mdash; </strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.<strong>(NDY)</strong>
                        <div class="row berita-thumb-images">
                            <img class="card-img img-thumbnail" src="http://placehold.it/128x128" alt="Card image">
                            <img class="card-img img-thumbnail" src="http://placehold.it/128x128" alt="Card image">
                            <img class="card-img img-thumbnail" src="http://placehold.it/128x128" alt="Card image">
                        </div>
                        <div class="tags">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#"><span class="tag">Lorem Ipsum</span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="tag">Lorem</span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="tag">Ipsum</span></a></li>
                            </ul>
                        </div>
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
                                <a href="#" class="item-berita-title">Judul Berita Terkait #1</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <img class="card-img img-thumbnail" src="http://placehold.it/80x80" alt="Card image">
                        </li>
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-berita-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <img class="card-img img-thumbnail" src="http://placehold.it/80x80" alt="Card image">
                        </li>
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-berita-title">Judul Berita Terkait #2</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <img class="card-img img-thumbnail" src="http://placehold.it/80x80" alt="Card image">
                        </li>
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-berita-title">Judul Berita Terkait #3</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <img class="card-img img-thumbnail" src="http://placehold.it/80x80" alt="Card image">
                        </li>
                        <li class="mymedia">
                            <div class="media-body align-self-center">
                                <a href="#" class="item-berita-title">Judul Berita Terkait #4</a>
                                <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            </div>
                            <img class="card-img img-thumbnail" src="http://placehold.it/80x80" alt="Card image">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
