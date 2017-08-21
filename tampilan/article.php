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
                    <a class="breadcrumb-item" href="#">Artikel</a>
                    <a class="breadcrumb-item active" href="#">Satu Judul Artikel</a>
                </nav>
                <!--End of Breadcrumbs-->
                <div class="offset-lg-2 col-lg-8 col-md-12 card sharp-card">
                    <div class="page-title">Satu Judul Artikel</div>
                    <div class="text-muted article-created-on">Warwickshire, Inggris 13 Juli 2017</div>
                    <div class="page-content text-justify">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.
                        <div class="about-author">
                            <div class="mymedia">
                                <img class="img-thumbnail rounded" src="http://placehold.it/100x150" alt="Author Image">
                                <div class="media-body align-self-center">
                                    <div class="author-name">William Shakespeare</div>
                                    <div class="author-bio">William Shakespeare (26 April 1564 (dibaptis) – 23 April 1616) adalah seorang penulis Inggris yang seringkali disebut orang sebagai salah satu sastrawan terbesar Inggris. Ia menulis sekitar 38 sandiwara tragedi, komedi, sejarah, dan 154 sonata, 2 puisi naratif, dan puisi-puisi yang lain. Ia menulis antara tahun 1585 dan 1613 dan karyanya telah diterjemahkan di hampir semua bahasa hidup di dunia dan dipentaskan di panggung lebih daripada semua penulis sandiwara yang lain.</div>
                                </div>
                            </div>
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

            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
