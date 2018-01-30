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

    <div class="container-fluid text-quotes-wrapper" data-aos="fade-in-up" data-aos-once="true">
        <div class="subtitle">PENGUMUMAN</div>
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
                <div class="berita-title" data-aos="zoom-in-up" data-aos-duration="400" data-aos-once="true">Berita Terkini</div>
                <?php
                $listBerita = '';
                $cardBerita = '';
                $replace = array('<div>', '</div>');
                if (count($berita) > 3) {
                    echo '<div class="berita-top col-lg-12 col-md-12"><div class="card-deck">';
                    for ($i = 0; $i < 3; $i++) {
                        $image = json_decode($berita[$i]['image']);
                        $cardBerita .= '<div class="card sharp-card" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="'.($i*200).'" data-aos-once="true">';
                        $cardBerita .= '<img class="img-fluid card-img-top-sharp" src="' . $image->url . '" alt="">';
                        $cardBerita .= '<div class="card-block card-block-berita">';
                        $cardBerita .= '<a class="item-berita-title" href="' . base_url('/berita/list_berita/' . $berita[$i]['slug']) . '">' . $berita[$i]['judul'] . '</a>';
                        $cardBerita .= '<div class="text-muted item-berita-subtitle">last updated ' . date('d-m-Y', strtotime($berita[$i]['tanggal_edit'])) . '</div>';
                        $cardBerita .= '<div class="card-text">' . str_replace($replace, '', substr($berita[$i]['isi'], 0, 150)) . '</div>';
                        $cardBerita .= '</div></div>';
                    }
                    echo $cardBerita;
                    echo '</div></div>';
                    echo '<ul class="list-unstyled">';
                    for ($i = 3; $i < count($berita); $i++) {
                        $listBerita .= '<li class="mymedia" data-aos="fade-in-up" data-aos-duration="600" data-aos-delay="'.($i*100).'" data-aos-once="true"><div class="media-body align-self-center">';
                        $listBerita .= '<a href="' . base_url('/berita/list_berita/' . $berita[$i]['slug']) . '" class="item-berita-title">' . $berita[$i]['judul'] . '</a>';
                        $listBerita .= '<div class="text-muted item-berita-subtitle">last updated ' . date('d-m-Y', strtotime($berita[$i]['tanggal_edit'])) . '</div>';
                        $listBerita .= '</div></li>';
                    }
                    echo $listBerita;
                    echo '</ul><div class="berita-end"><a href="' . base_url('/berita/list_berita') . '" class="link-next">Berita lainnya &egs;</a></div></div>';
                } else {
                    echo '<div class="berita-top col-lg-12 col-md-12"><div class="card-deck">';
                    for ($i = 0; $i < count($berita); $i++) {
                        $image = json_decode($berita[$i]['image']);
                        $cardBerita .= '<div class="card sharp-card" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="'.($i*200).'" data-aos-once="true">';
                        $cardBerita .= '<img class="img-fluid card-img-top-sharp" src="' . $image->url . '" alt="">';
                        $cardBerita .= '<div class="card-block card-block-berita">';
                        $cardBerita .= '<a class="item-berita-title" href="' . base_url('/berita/list_berita/' . $berita[$i]['slug']) . '">' . $berita[$i]['judul'] . '</a>';
                        $cardBerita .= '<div class="text-muted item-berita-subtitle">last updated ' . date('d-m-Y', strtotime($berita[$i]['tanggal_edit'])) . '</div>';
                        $cardBerita .= '<div class="card-text">' . str_replace($replace, '', substr($berita[$i]['isi'], 0, 150)) . '</div>';
                        $cardBerita .= '</div></div>';
                    }
                    for ($i = count($berita); $i < 3; $i++) {
                        $cardBerita .= '<div class="card sharp-card" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="'.($i*200).'" data-aos-once="true"></div>';
                    }
                    echo $cardBerita;
                    echo '</div></div>';
                    echo '<div class="berita-end"><a href="' . base_url('/berita/list_berita') . '" class="link-next">Berita lainnya &egs;</a></div></div>';
                }
                ?>

                <div class="col-lg-4 col-md-12">
                    <div class="event-title" data-aos="zoom-in-up" data-aos-duration="400" data-aos-once="true">Events</div>
                    <?php
                    $listEvent = '<ul class="list-unstyled">';
                    for ($i = 0; $i < count($event); $i++) {
                        $listEvent .= '<li class="event-item" data-aos="fade-in-up" data-aos-duration="350" data-aos-delay="'.($i*100).'" data-aos-once="true"><div class="d-flex mr-3"><div class="thumb-calendar-event">';
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
    <!--    <div class="container-fluid text-quotes-wrapper">
            <div class="text-center p-4">
                <div style="color: white;"><h4>Menjadi universitas unggul dalam bidang pendidikan, penelitian, pengabdian dan pelayanan kepada masyarakat di Indonesia dan Asia sesuai dengan nilai-nilai kristiani dan Pancasila pada tahun 2034.</h4></div>
                <div class="quoted-from">Visi Universitas Kristen Indonesia</div>
            </div>
        </div> -->
    <div class="container-fluid belt-wrapper" data-aos="fade-in-up" data-aos-once="true"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="subtitle">POJOK REKTOR</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card sharp-card-transparent">
                        <div class="row ">
                            <div class="col-lg-3 col-md-3 middle-centered-container">
                                <img src="<?php echo $pojokrektor->image; ?>" alt="image" class="img-rektor">
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="card-block px-3 align-self-center quotes text-left">
                                    <p class="card-text middle-centered-container"><?php echo $pojokrektor->content; ?></p>
                                    <div class="quoted-from"><?php echo $pojokrektor->author; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="article-title" data-aos="zoom-in-up" data-aos-duration="400" data-aos-once="true">Rubrik Edukasi</div>
                <?php
                $listArtikel = '';
                $cardArtikel = '';
                $replace = array('<div>', '</div>');
                if (count($artikel) > 3) {
                    echo '<div class="berita-top col-lg-12 col-md-12"><div class="card-deck">';
                    for ($i = 0; $i < 3; $i++) {
                        $image = json_decode($artikel[$i]['image']);
                        $cardArtikel .= '<div class="card sharp-card" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="'.($i*200).'" data-aos-once="true">';
                        $cardArtikel .= '<img class="img-fluid card-img-top-sharp" src="'.$image->url. '" alt="">';
                        $cardArtikel .= '<div class="card-block card-block-berita">';
                        $cardArtikel .= '<a class="item-berita-title" href="' . base_url('/artikel/list_artikel/' . $artikel[$i]['slug']) . '">' . $artikel[$i]['judul'] . '</a>';
                        $cardArtikel .= '<div class="text-muted item-berita-subtitle">last updated ' . date('d-m-Y', strtotime($artikel[$i]['tanggal_edit'])) . '</div>';
                        $cardArtikel .= '<div class="card-text">' . str_replace($replace, '', substr($artikel[$i]['isi'], 0, 150)) . '</div>';
                        $cardArtikel .= '</div></div>';
                    }
                    echo $cardArtikel;
                    echo '</div>';
                    echo '<ul class="list-unstyled">';
                    for ($i = 3; $i < count($artikel); $i++) {
                        $listArtikel .= '<li class="mymedia" data-aos="fade-in-up" data-aos-duration="600" data-aos-delay="'.($i*100).'" data-aos-once="true"><div class="media-body align-self-center">';
                        $listArtikel .= '<a href="' . base_url('/artikel/list_artikel/' . $artikel[$i]['slug']) . '" class="item-berita-title">' . $artikel[$i]['judul'] . '</a>';
                        $listArtikel .= '<div class="text-muted item-berita-subtitle">last updated ' . date('d-m-Y', strtotime($artikel[$i]['tanggal_edit'])) . '</div>';
                        $listArtikel .= '</div></li>';
                    }
                    echo $listArtikel;
                    echo '</ul><div class="berita-end"><a href="' . base_url('/artikel/list_artikel') . '" class="link-next">Artikel lainnya &egs;</a></div></div>';
                } else {
                    echo '<div class="berita-top col-lg-12 col-md-12"><div class="card-deck">';
                    for ($i = 0; $i < count($artikel); $i++) {
                        $image = json_decode($artikel[$i]['image']);
                        $cardArtikel .= '<div class="card sharp-card" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="'.($i*200).'" data-aos-once="true">';
                        $cardArtikel .= '<img class="img-fluid card-img-top-sharp" src="' . $image->url . '" alt="">';
                        $cardArtikel .= '<div class="card-block card-block-berita">';
                        $cardArtikel .= '<a class="item-berita-title" href="' . base_url('/artikel/list_artikel/' . $artikel[$i]['slug']) . '">' . $artikel[$i]['judul'] . '</a>';
                        $cardArtikel .= '<div class="text-muted item-berita-subtitle">last updated ' . date('d-m-Y', strtotime($artikel[$i]['tanggal_edit'])) . '</div>';
                        $cardArtikel .= '<div class="card-text">' . str_replace($replace, '', substr($artikel[$i]['isi'], 0, 150)) . '</div>';
                        $cardArtikel .= '</div></div>';
                    }
                    for ($i = count($artikel); $i < 3; $i++) {
                        $cardArtikel .= '<div class="card sharp-card" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="'.($i*200).'" data-aos-once="true"></div>';
                    }
                    echo $cardArtikel;
                    echo '</div></div>';
                    echo '<div class="berita-end"><a href="' . base_url('/artikel/list_artikel') . '" class="link-next">Artikel lainnya &egs;</a></div>';
                }
                ?>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="custom-title" data-aos="zoom-in-up" data-aos-duration="400" data-aos-once="true">Tweets Terkini</div>
                <div class="twitter" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="200" data-aos-once="true">
                    <a class="twitter-timeline" data-cards="hidden" data-theme="light" data-tweet-limit="3" data-chrome="noheader nofooter noborders noscrollbar transparent" href="https://twitter.com/Kampus_UKI">Tweets by Kampus_UKI</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid belt-wrapper-testimoni" data-aos="fade-in-up" data-aos-once="true">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="subtitle">KATA MEREKA, TENTANG UKI</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 margin-btm-20" data-aos="zoom-in-right" data-aos-duration="700" data-aos-delay="400" data-aos-once="true">
                    <div class="quote dark">
                        <blockquote>
                            <p>
                                <?php echo $testimoni[0]->content; ?>
                            </p>
                        </blockquote>                        
                    </div>
                    <div class="quote-footer text-right">
                        <div class="quote-author-img">
                            <img src="<?php echo $testimoni[0]->image; ?>" alt="">
                        </div>
                        <h4><?php echo $testimoni[0]->author; ?></h4>
                        <p>
                            <strong><?php echo $testimoni[0]->title; ?></strong>
                        </p>
                    </div>
                </div><!--colored quote box col-->
                <div class="col-md-4 margin-btm-20" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="400" data-aos-once="true">
                    <div class="quote dark">
                        <blockquote>
                            <p>
                                <?php echo $testimoni[1]->content; ?>
                            </p>
                        </blockquote>                        
                    </div>
                    <div class="quote-footer text-right">
                        <div class="quote-author-img">
                            <img src="<?php echo $testimoni[1]->image; ?>" alt="">
                        </div>
                        <h4><?php echo $testimoni[1]->author; ?></h4>
                        <p>
                            <strong><?php echo $testimoni[1]->title; ?></strong>
                        </p>
                    </div>
                </div><!--colored quote box col-->
                <div class="col-md-4 margin-btm-20" data-aos="zoom-in-left" data-aos-duration="700" data-aos-delay="400" data-aos-once="true">
                    <div class="quote dark">
                        <blockquote>
                            <p>
                                <?php echo $testimoni[2]->content; ?>  
                            </p>
                        </blockquote>                        
                    </div>
                    <div class="quote-footer text-right">
                        <div class="quote-author-img">
                            <img src="<?php echo $testimoni[2]->image; ?>" alt="">
                        </div>
                        <h4><?php echo $testimoni[2]->author; ?></h4>
                        <p>
                            <strong><?php echo $testimoni[2]->title; ?></strong>
                        </p>
                    </div>
                </div><!--colored quote box col-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="custom-large-title" data-aos="zoom-in-up" data-aos-duration="400" data-aos-once="true">Informasi Lainnya</div>
                <div class="list-group">

                    <?php
                    $i=0;
                    foreach ($informasi as $k => $v) {
                        echo '<a href="' . base_url('/informasi/list_informasi/' . $v['slug']) . '" class="list-group-item justify-content-between" data-aos="fade-in-up" data-aos-duration="350" data-aos-delay="'.($i*100).'" data-aos-once="true">';
                        echo '<div class="col-8"><i class="fa-li fa fa-chevron-right" aria-hidden="true"></i>' . $v['judul'] . '</div>';
                        echo '<span class="badge badge-default badge-pill" style="background-color: coral;">' . $v['kategori'] . '</span>';
                        echo '</a>';
                        $i++;
                    }
                    ?>
                </div>
                <div class="custom-large-end"><a href="<?php echo base_url('/informasi/list_informasi/'); ?>" class="link-next">Informasi lainnya &egs;</a></div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="custom-title" data-aos="zoom-in-up" data-aos-duration="400" data-aos-once="true">Kunjungi Juga</div>
                <div class="container-fluid col-lg-12 col-md-8">
                    <div class="row offset-lg-1 offset-md-1">
                        <a href="https://ais.uki.ac.id" class="big-link col-lg-4 col-md-3 col-sm-3" data-aos="fade-in-up" data-aos-duration="350" data-aos-delay="300" data-aos-once="true">
                            <i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i>
                            <span>Academic Information System</span>
                        </a>
                        <a href="http://pmb.uki.ac.id" class="big-link col-lg-4 col-md-3 col-sm-3" data-aos="fade-in-up" data-aos-duration="350" data-aos-delay="300" data-aos-once="true">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <span>Penerimaan Mahasiswa Baru</span>
                        </a>
                        <a href="http://digilib.uki.ac.id" class="big-link col-lg-4 col-md-3 col-sm-3" data-aos="fade-in-up" data-aos-duration="350" data-aos-delay="300" data-aos-once="true">
                            <i class="fa fa-book fa-3x" aria-hidden="true"></i>
                            <span>Digital Library</span>
                        </a>
                        <a href="http://login.microsoftonline.com" class="big-link col-lg-4 col-md-3 col-sm-3" data-aos="fade-in-up" data-aos-duration="350" data-aos-delay="300" data-aos-once="true">
                            <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i>
                            <span>Outlook Mail</span>
                        </a>
                        <a href="http://ejournal.uki.ac.id" class="big-link col-lg-4 col-md-3 col-sm-3" data-aos="fade-in-up" data-aos-duration="350" data-aos-delay="300" data-aos-once="true">
                            <i class="fa fa-flask fa-3x" aria-hidden="true"></i>
                            <span>Online Journal</span>
                        </a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>