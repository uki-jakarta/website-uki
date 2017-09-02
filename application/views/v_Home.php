
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
                        $listBerita ='';
                        $cardBerita ='';
                        if (count($berita) > 3) { 
                            echo '<div class="berita-top col-lg-12 col-md-12"><div class="card-group">';
                            for ($i=0; $i<3 ; $i++) {
                                $cardBerita .= '<div class="card sharp-card">';
                                $cardBerita .= '<img class="card-img-top-sharp" src="'.$berita[$i]['image'].'" alt="">';
                                $cardBerita .= '<div class="card-block card-block-berita">';
                                $cardBerita .= '<h4 class="card-title item-berita-title">'.$berita[$i]['judul'].'</h4>';
                                $cardBerita .= '<div class="text-muted item-berita-subtitle">last updated '.$berita[$i]['tanggal_edit'].'</div>';
                                $cardBerita .= '<p class="card-text">'.substr($berita[$i]['isi'], 0, 150).'</p>';
                                $cardBerita .= '</div></div>';
                            }
                            echo $cardBerita;
                            echo '</div></div>';
                            echo '<ul class="list-unstyled">';
                            for ($i=3; $i<count($berita); $i++) {
                                $listBerita .= '<li class="mymedia"><div class="media-body align-self-center">';
                                $listBerita .= '<a href="'.base_url('/berita/'.$berita[$i]['slug']).'" class="item-berita-title">'.$berita[$i]['judul'].'</a>';
                                $listBerita .= '<div class="text-muted item-berita-subtitle">last updated '.$berita[$i]['tanggal_edit'].'</div>';
                                $listBerita .= '</div></li>';
                            }
                            echo $listBerita;
                            echo '</ul><div class="berita-end"><a href="'.base_url('/berita/list_berita').'" class="link-next">Berita lainnya &egs;</a></div></div>';
                        } else {
                            echo '<div class="berita-top col-lg-12 col-md-12"><div class="card-group">';
                            for ($i=0; $i<count($berita) ; $i++) {
                                $cardBerita .= '<div class="card sharp-card">';
                                $cardBerita .= '<img class="card-img-top-sharp" src="'.$berita[$i]['image'].'" alt="">';
                                $cardBerita .= '<div class="card-block card-block-berita">';
                                $cardBerita .= '<h4 class="card-title item-berita-title">'.$berita[$i]['judul'].'</h4>';
                                $cardBerita .= '<div class="text-muted item-berita-subtitle">last updated '.$berita[$i]['tanggal_edit'].'</div>';
                                $cardBerita .= '<p class="card-text">'.substr($berita[$i]['isi'], 0, 150).'</p>';
                                $cardBerita .= '</div></div>';
                            }
                            for ($i= count($berita); $i<3; $i++) {
                                $cardBerita .= '<div class="card sharp-card"></div>';
                            }
                            echo $cardBerita;
                            echo '</div></div>';
                            echo '<div class="berita-end"><a href="'.base_url('/berita/list_berita').'" class="link-next">Berita lainnya &egs;</a></div>';
                        }?>
                    </div>
                    <div class="col-lg-4 col-md-12 ">
                        <div class="event-title">Events</div>
                        <?php 
                            $listEvent ='<ul class="list-unstyled">';
                            for ($i=0; $i<count($event) ; $i++) {
                                $listEvent .= '<li class="event-item"><div class="d-flex mr-3"><div class="thumb-calendar-event">';
                                $listEvent .= '<div class="thumb-calendar-short-date"><p class="thumb-month">'.date('M \'y',strtotime($event[$i]['tanggal_mulai'])).'</p><p class="thumb-date">'.date('d',strtotime($event[$i]['tanggal_mulai'])).'</p></div>';
                                $listEvent .= '</div></div><div class="event-body align-self-center">';
                                $listEvent .= '<a href="'.base_url('/event/'.$event[$i]['slug']).'" class="item-event-title">"'.$event[$i]['judul'].'"</a>';
                                $listEvent .= '</div></li>';
                            }
                            $listEvent .=  '</ul><div class="event-end"><a href="'.base_url('/event/list_event').'" class="link-next">Peristiwa lainnya &egs;</a></div>';
                            echo $listEvent;
                            ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid belt-wrapper">
                
                <div class="text-center container">
                    <div class="mymedia">
                        <img class="img-thumbnail rektor-image" src="<?php echo $pojokrektor->image; ?>" alt="Generic placeholder image">
                        <div class="media-body">
                            <div class="subtitle">Pojok Rektor</div>
                            <div class="col-md-12 quotes text-left"><?php echo $pojokrektor->content; ?></div>
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