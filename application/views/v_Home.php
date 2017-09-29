
<div class="wrapper">
    <!--Begin Carousel-->
    <div id="carouselIndicators" class="carousel-picture-slide carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <?php foreach ($carousel as $k => $v) {
                ?>
                <div class="carousel-item <?php if ($k == '0') echo 'active' ?>">
                    <img class="img-fluid" src="<?php echo $v->imageURL; ?>" alt="<?php echo $v->alt; ?>">
                </div>
            <?php } ?>
        </div>

        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--End Carousel-->

    <div class="container-fluid text-quotes-wrapper">
        <div class="subtitle">Pengumuman</div>
        <div class="text-center p-4">
            <div class="quotes"><?php echo $pengumuman->content; ?></div>
            <div class="quoted-from"><?php echo $pengumuman->author; ?></div>
        </div>
    </div>
    <?php
    // put your code here
    ?>
    <div class="container event-berita">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="berita-title">Berita Terkini</div>
                <?php
                $listBerita = '';
                $cardBerita = '';
                if (count($berita) > 3) {
                    echo '<div class="berita-top col-lg-12 col-md-12"><div class="card-group">';
                    for ($i = 0; $i < 3; $i++) {
                        $cardBerita .= '<div class="card sharp-card">';
                        $cardBerita .= '<img class="img-fluid card-img-top-sharp" src="' . $berita[$i]['image'] . '" alt="">';
                        $cardBerita .= '<div class="card-block card-block-berita">';
                        $cardBerita .= '<h4 class="card-title item-berita-title"><a href="' . base_url('/berita/list_berita/' . $berita[$i]['slug']) . '">' . $berita[$i]['judul'] . '</a></h4>';
                        $cardBerita .= '<div class="text-muted item-berita-subtitle">last updated ' . $berita[$i]['tanggal_edit'] . '</div>';
                        $cardBerita .= '<p class="card-text">' . substr($berita[$i]['isi'], 0, 150) . '</p>';
                        $cardBerita .= '</div></div>';
                    }
                    echo $cardBerita;
                    echo '</div></div>';
                    echo '<ul class="list-unstyled">';
                    for ($i = 3; $i < count($berita); $i++) {
                        $listBerita .= '<li class="mymedia"><div class="media-body align-self-center">';
                        $listBerita .= '<a href="' . base_url('/berita/list_berita/' . $berita[$i]['slug']) . '" class="item-berita-title">' . $berita[$i]['judul'] . '</a>';
                        $listBerita .= '<div class="text-muted item-berita-subtitle">last updated ' . $berita[$i]['tanggal_edit'] . '</div>';
                        $listBerita .= '</div></li>';
                    }
                    echo $listBerita;
                    echo '</ul><div class="berita-end"><a href="' . base_url('/berita/list_berita') . '" class="link-next">Berita lainnya &egs;</a></div></div>';
                } else {
                    echo '<div class="berita-top col-lg-12 col-md-12"><div class="card-group">';
                    for ($i = 0; $i < count($berita); $i++) {
                        $cardBerita .= '<div class="card sharp-card">';
                        $cardBerita .= '<img class="img-responsive card-img-top-sharp" src="' . $berita[$i]['image'] . '" alt="">';
                        $cardBerita .= '<div class="card-block card-block-berita">';
                        $cardBerita .= '<h4 class="card-title item-berita-title">' . $berita[$i]['judul'] . '</h4>';
                        $cardBerita .= '<div class="text-muted item-berita-subtitle">last updated ' . $berita[$i]['tanggal_edit'] . '</div>';
                        $cardBerita .= '<p class="card-text">' . substr($berita[$i]['isi'], 0, 150) . '</p>';
                        $cardBerita .= '</div></div>';
                    }
                    for ($i = count($berita); $i < 3; $i++) {
                        $cardBerita .= '<div class="card sharp-card"></div>';
                    }
                    echo $cardBerita;
                    echo '</div></div>';
                    echo '<div class="berita-end"><a href="' . base_url('/berita/list_berita') . '" class="link-next">Berita lainnya &egs;</a></div>';
                }
                ?>

                <div class="col-lg-4 col-md-12 ">
                    <div class="event-title">Events</div>
                    <?php
                    $listEvent = '<ul class="list-unstyled">';
                    for ($i = 0; $i < count($event); $i++) {
                        $listEvent .= '<li class="event-item"><div class="d-flex mr-3"><div class="thumb-calendar-event">';
                        $listEvent .= '<div class="thumb-calendar-short-date"><p class="thumb-month">' . date('M \'y', strtotime($event[$i]['tanggal_mulai'])) . '</p><p class="thumb-date">' . date('d', strtotime($event[$i]['tanggal_mulai'])) . '</p></div>';
                        $listEvent .= '</div></div><div class="event-body align-self-center">';
                        $listEvent .= '<a href="' . base_url('/event/list_event/' . $event[$i]['slug']) . '" class="item-event-title">"' . $event[$i]['judul'] . '"</a>';
                        $listEvent .= '</div></li>';
                    }
                    $listEvent .= '</ul><div class="event-end"><a href="' . base_url('/event/list_event') . '" class="link-next">Peristiwa lainnya &egs;</a></div>';
                    echo $listEvent;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid belt-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="subtitle">Pojok Rektor</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 text-lg-right text-md-center text-xs-center">
                    <img class="img-responsive rounded-circle rektor-image" src="<?php echo base_url(); ?>assets/img/rektor_uki.jpeg<?php //echo $pojokrektor->image;        ?>" alt="image">
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="align-self-center quotes text-left"><?php echo $pojokrektor->content; ?></div>
                    <div class="quoted-from"><?php echo $pojokrektor->author; ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="article-title">Artikel</div>
                <div class="card-group">
                    <div class="card sharp-card">
                        <img class="img-fluid card-img-top-sharp" src="http://192.168.10.186:9999/assets/img/article/artikel-01.jpg" alt="Card image cap">
                        <div class="card-block card-block-berita">
                            <h4 class="card-title item-berita-title">Website UKI yang Baru</h4>
                            <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card sharp-card">
                        <img class="img-fluid card-img-top-sharp" src="http://192.168.10.186:9999/assets/img/article/artikel-02.jpg" alt="Card image cap">
                        <div class="card-block card-block-berita">
                            <h4 class="card-title item-berita-title">Pengembangan Website Baru</h4>
                            <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                    <div class="card sharp-card">
                        <img class="img-fluid card-img-top-sharp" src="http://192.168.10.186:9999/assets/img/article/artikel-03.jpg" alt="Card image cap">
                        <div class="card-block card-block-berita">
                            <a href="#" class="card-title item-berita-title">PKM UKI 2017: Berjibaku di Malang Selatan </a>
                            <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="article-end"><a href="#" class="link-next">Artikel lainnya &egs;</a></div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="custom-title">Tweets</div>
                <div class="twitter">
                    <a class="twitter-timeline" data-cards="hidden" data-theme="light" data-tweet-limit="3" data-chrome="noheader nofooter noborders noscrollbar transparent" href="https://twitter.com/Kampus_UKI">Tweets by Kampus_UKI</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid belt-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="subtitle">Kata Mereka, Tentang UKI</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 margin-btm-20">
                    <div class="quote dark">
                        <blockquote>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.                          
                            </p>
                        </blockquote>                        
                    </div>
                    <div class="quote-footer text-right">
                        <div class="quote-author-img">
                            <img src="https://pickaface.net/gallery/avatar/unr_svitaca_161028_0449_226cj81h3.png" alt="">
                        </div>
                        <h4>Evy Hernyta</h4>
                        <p>
                            <strong>Staff UKI</strong>
                        </p>
                    </div>
                </div><!--colored quote box col-->
                <div class="col-md-4 margin-btm-20">
                    <div class="quote dark">
                        <blockquote>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.                          
                            </p>
                        </blockquote>                        
                    </div>
                    <div class="quote-footer text-right">
                        <div class="quote-author-img">
                            <img src="https://pickaface.net/gallery/avatar/20120722_164939_2501_jk.png" alt="">
                        </div>
                        <h4>Evy Hernyta</h4>
                        <p>
                            <strong>Staff UKI</strong>
                        </p>
                    </div>
                </div><!--colored quote box col-->
                <div class="col-md-4 margin-btm-20">
                    <div class="quote dark">
                        <blockquote>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.                          
                            </p>
                        </blockquote>                        
                    </div>
                    <div class="quote-footer text-right">
                        <div class="quote-author-img">
                            <img src="https://pickaface.net/gallery/avatar/20131223_204814_4789_Evelyn.png" alt="">
                        </div>
                        <h4>Evy Hernyta</h4>
                        <p>
                            <strong>Staff UKI</strong>
                        </p>
                    </div>
                </div><!--colored quote box col-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="custom-large-title">Custom </div>

                <div class="custom-large-end"><a href="#" class="link-next">Link lainnya &egs;</a></div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="custom-title">Our Links</div>

            </div>
        </div>
    </div>