<?php $myarr = "[
                        {
                            title: 'All Day Event',
                            start: '2017-08-01'
                        },
                        {
                            title: 'Long Event',
                            start: '2017-05-07',
                            end: '2017-08-10'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2017-08-09T16:00:00'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2017-08-16T16:00:00'
                        },
                        {
                            title: 'Conference',
                            start: '2017-08-11',
                            end: '2017-08-13'
                        },
                        {
                            title: 'Meeting',
                            start: '2017-08-12T10:30:00',
                            end: '2017-08-12T12:30:00'
                        },
                        {
                            title: 'Lunch',
                            start: '2017-08-12T12:00:00'
                        },
                        {
                            title: 'Meeting',
                            start: '2017-08-12T14:30:00'
                        },
                        {
                            title: 'Happy Hour',
                            start: '2017-08-12T17:30:00'
                        },
                        {
                            title: 'Dinner',
                            start: '2017-08-12T20:00:00'
                        },
                        {
                            title: 'Birthday Party',
                            start: '2017-08-13T07:00:00'
                        },
                        {
                            title: 'Click for Google',
                            url: 'http://google.com/',
                            start: '2017-08-28'
                        }
                    ]";?>
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

        <title>My Website Template - Big Events</title>

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
        <script type="text/javascript">
            $(document).ready(function () {
                $('#calendar').fullCalendar({
                    header: {
                        left: '',
                        center: 'title',
                        right: 'prev, next today'
                    },
                    defaultDate: '2017-08-24',
                    editable: false,
                    navLinks: false, // can click day/week names to navigate views
                    eventLimit: true, // allow "more" link when too many events
                    businessHours: {
                        // days of week. an array of zero-based day of week integers (0=Sunday)
                        dow: [1, 2, 3, 4, 5, 6], // Monday - Thursday

                        start: '10:00', // a start time (10am in this example)
                        end: '18:00', // an end time (6pm in this example)
                    },
                    events: <?php echo $myarr; ?>
                });
            });
           
        </script>
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
            <div class="col-lg-12 col-md-12">
                <div class="page-title calendar-title">Agenda Universitas Kristen Indonesia</div>
                <div class="page-content">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
