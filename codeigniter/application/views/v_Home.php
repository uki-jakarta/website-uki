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
                    <div class="quotes"><?php echo $pengumuman->pengumuman; ?></div>
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
                        <div class="berita-top col-lg-12 col-md-12">
                            <div class="card-group">
                                <div class="card sharp-card">
                                    <img class="card-img-top-sharp" src="http://placehold.it/200x150" alt="Card image cap">
                                    <div class="card-block card-block-berita">
                                        <h4 class="card-title item-berita-title">Website UKI yang Baru</h4>
                                        <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="card sharp-card">
                                    <img class="card-img-top-sharp" src="http://placehold.it/200x150" alt="Card image cap">
                                    <div class="card-block card-block-berita">
                                        <h4 class="card-title item-berita-title">Pengembangan Website Baru</h4>
                                        <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                                <div class="card sharp-card">
                                    <img class="card-img-top-sharp" src="http://placehold.it/200x150" alt="Card image cap">
                                    <div class="card-block card-block-berita">
                                        <a href="#" class="card-title item-berita-title">PKM UKI 2017: Berjibaku di Malang Selatan </a>
                                        <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mymedia">
                                <div class="media-body align-self-center">
                                    <a href="#" class="item-berita-title">DR. Maruarar Siahaan, S.H.,"JANGAN SAMPAI KEHILANGAN KARAKTER AKADEMISI"</a>
                                    <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                                </div>
                            </li>
                            <div class="mymedia">
                                <div class="media-body align-self-center">
                                    <a href="#" class="item-berita-title">Regenerasi dalam Strategi </a>
                                    <div class="text-muted item-berita-subtitle">last updated 6 Juli 2017</div>
                                </div>
                            </div>
                        </ul>
                        <div class="berita-end"><a href="#" class="link-next">Berita lainnya &egs;</a></div>
                    </div>
                    <div class="col-lg-4 col-md-12 ">
                        <div class="event-title">Events</div>
                        <ul class="list-unstyled">
                            <li class="event-item">
                                <div class="d-flex mr-3">
                                    <div class="thumb-calendar-event">
                                        <div class="thumb-calendar-short-date"><p class="thumb-month">Ags '17</p><p class="thumb-date">10</p></div>
                                    </div>
                                </div>
                                <div class="event-body align-self-center">
                                    <a href="#" class="item-event-title">"Menjadi yang Terbaik, Butuh Proses"</a>
                                </div>
                            </li>
                            <li class="event-item">
                                <div class="d-flex mr-3">
                                    <div class="thumb-calendar-event">
                                        <div class="thumb-calendar-short-date"><p class="thumb-month">Ags '17</p><p class="thumb-date">15</p></div>
                                    </div>
                                </div>
                                <div class="event-body align-self-center">
                                    <a href="#" class="item-event-title">Self-Regulated Learning FK UKI: Pdt. Esther: "Ini Bentuk Perhatian, Bukan Penghakiman."</a>
                                </div>
                            </li>
                            <li class="event-item">
                                <div class="d-flex mr-3">
                                    <div class="thumb-calendar-event">
                                        <div class="thumb-calendar-short-date"><p class="thumb-month">Ags '17</p><p class="thumb-date">24</p></div>
                                    </div>
                                </div>
                                <div class="event-body align-self-center">
                                    <a href="#" class="item-event-title">Program Peningkatan Kreativitas Mahasiswa</a>
                                </div>
                            </li>
                            <li class="event-item">
                                <div class="d-flex mr-3">
                                    <div class="thumb-calendar-event">
                                        <div class="thumb-calendar-short-date"><p class="thumb-month">Ags '17</p><p class="thumb-date">25</p></div>
                                    </div>
                                </div>
                                <div class="event-body align-self-center">
                                    <a href="#" class="item-event-title">"Mengapa Roh Kudus Penting?"</a>
                                </div>
                            </li>
                            <li class="event-item">
                                <div class="d-flex mr-3">
                                    <div class="thumb-calendar-event">
                                        <div class="thumb-calendar-short-date"><p class="thumb-month">Ags '17</p><p class="thumb-date">31</p></div>
                                    </div>
                                </div>
                                <div class="event-body align-self-center">
                                    <a href="#" class="item-event-title">UKI Gelar Ibadah Kebangsaan dan Doa Lintas Agama</a>
                                </div>
                            </li>
                        </ul>
                        <div class="event-end"><a href="#" class="link-next">Peristiwa lainnya &egs;</a></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid belt-wrapper">
                
                <div class="text-center container">
                    <div class="mymedia">
                        <img class="img-thumbnail rektor-image" src="http://placehold.it/100x150" alt="Generic placeholder image">
                        <div class="media-body">
                            <div class="subtitle">Pojok Rektor</div>
                            <div class="col-md-12 quotes text-left"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</div>
                            <div class="quoted-from">Dr. Maruarar Siahaan</div>
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
                                <img class="card-img-top-sharp" src="http://placehold.it/200x150" alt="Card image cap">
                                <div class="card-block card-block-berita">
                                    <h4 class="card-title item-berita-title">Website UKI yang Baru</h4>
                                    <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="card sharp-card">
                                <img class="card-img-top-sharp" src="http://placehold.it/200x150" alt="Card image cap">
                                <div class="card-block card-block-berita">
                                    <h4 class="card-title item-berita-title">Pengembangan Website Baru</h4>
                                    <div class="text-muted item-berita-subtitle">last updated 13 Juli 2017</div>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                            <div class="card sharp-card">
                                <img class="card-img-top-sharp" src="http://placehold.it/200x150" alt="Card image cap">
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
                        <div class="custom-title">Didukung Oleh</div>
                        Lorem ipsum dolor sit amet
                    </div>
                </div>
            </div>
        </div>