<div class="container wrapper">
    <div class="row">
        <!--Breadcrumbs-->
        <nav class="breadcrumb col-lg-12 col-md-12">
            <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Home</a>
            <a class="breadcrumb-item" href="<?php echo base_url('event/list_event'); ?>">Events</a>
            <a class="breadcrumb-item active" href="<?php echo base_url('event/event_list') . $dataEvent['slug']; ?>"><?php echo $dataEvent['judul']; ?></a>
        </nav>
        <!--End of Breadcrumbs-->
        <div class="col-lg-8 col-md-12">
            <div class="page-title"><?php echo $dataEvent['judul']; ?></div>
            <div class="text-muted berita-last-update">last updated <?php echo date('d-m-Y', strtotime($dataEvent['tanggal_edit'])); ?></div>
            <div class="page-content">
                <!--Featured Image-->
                <div class="page-image">
                    <img class="img-thumbnail mx-auto d-block" src="<?php $image = json_decode($dataEvent['image']);
if (isset($image->url))
    echo $image->url
    ?>" alt="">
                </div>
                <!--End of Featured Image-->
                <div class="event-held">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $dataEvent['time']; ?></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $dataEvent['date']; ?> </li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $dataEvent['place']; ?></li>
                        <li><i class="fa fa-id-badge" aria-hidden="true"></i> <?php echo $dataEvent['organizer']; ?></li>
                        <li><i class="fa fa-pencil-square" aria-hidden="true"> <?php echo $dataEvent['event_type']; ?></i></li>
                    </ul>
                </div>
                <div class="page-subtitle">Deskripsi</div>
                <p><?php echo $dataEvent['isi']; ?></p>
                <div class="social-media-sharing">
                    <div class="sub-u">Share via</div>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="<?php echo "https://www.facebook.com/sharer.php?u=" . base_url('/event/list_event/' . $dataEvent['slug']) . ""; ?>"  rel="nofollow"><i class="fa fa-facebook-official fa-2x mod-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="<?php echo "https://twitter.com/intent/tweet?url=" . base_url('/event/list_event/' . $dataEvent['slug']) . "&text=" . $dataEvent['judul'] . ""; ?>" rel="nofollow"><i class="fa fa-twitter fa-2x mod-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="<?php echo "mailto:?subject=" . $dataEvent['judul'] . "&body=Check out this site " . base_url('/event/list_event/' . $dataEvent['slug']); ?>" rel="nofollow"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="small-sections col-lg-4 col-md-12">
            <ul class="list-unstyled">

                <?php
                foreach ($upcomingEvent as $k => $v) {
                    echo '<li class="mymedia"><div class="media-body align-self-center">';
                    echo '<a href="' . base_url('event/list_event/') . $v["slug"] . '" class="item-event-title">' . $v["judul"] . '</a>';
                    echo '<div class="text-muted item-berita-subtitle">last updated ' . date('d-m-Y', strtotime($v["tanggal_edit"])) . '</div>';
                    echo '</div><div class="thumb-calendar-event-o">';
                    echo '<div class="thumb-calendar-short-date-o"><p class="thumb-date">' . date('d', strtotime($v['tanggal_mulai'])) . '</p><p class="thumb-month">' . date('M', strtotime($v['tanggal_mulai'])) . '</p></div>';
                    echo '</div></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>