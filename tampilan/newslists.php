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
                    <a class="breadcrumb-item active" href="#">News</a>
                </nav>
                <!--End of Breadcrumbs-->
                <div class="offset-lg-2 col-lg-8 col-md-12 card sharp-card">
                    <div class="page-title-u">News</div>
                    <div class="page-content ">
                        <ul class="list-unstyled">
                            <li class="mymedia">
                                <img class="d-flex mr-3" src="http://placehold.it/80x80" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="#" class="item-berita-title">Judul Berita #1</a>
                                    <div class="text-muted item-berita-subtitle">last updated 6 Juli 2017</div>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="mymedia">
                                <img class="d-flex mr-3" src="http://placehold.it/80x80" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="#" class="item-berita-title">Judul Berita #2</a>
                                    <div class="text-muted item-berita-subtitle">last updated 6 Juli 2017</div>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="mymedia">
                                <img class="d-flex mr-3" src="http://placehold.it/80x80" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="#" class="item-berita-title">Judul Berita #3</a>
                                    <div class="text-muted item-berita-subtitle">last updated 6 Juli 2017</div>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="mymedia">
                                <img class="d-flex mr-3" src="http://placehold.it/80x80" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="#" class="item-berita-title">Judul Berita #4</a>
                                    <div class="text-muted item-berita-subtitle">last updated 6 Juli 2017</div>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                            <li class="mymedia">
                                <img class="d-flex mr-3" src="http://placehold.it/80x80" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="#" class="item-berita-title">Judul Berita #5</a>
                                    <div class="text-muted item-berita-subtitle">last updated 6 Juli 2017</div>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                        </ul>
                        <!--Pagination-->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!--Pagination end-->
                    </div>
                </div>

            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
