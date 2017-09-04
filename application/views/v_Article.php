<div class="container wrapper">
            <div class="row">
                <!--Breadcrumbs-->
                <nav class="breadcrumb col-lg-12 col-md-12">
                    <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Home</a>
                    <a class="breadcrumb-item" href="<?php echo base_url('artikel'); ?>">Artikel</a>
                    <a class="breadcrumb-item active" href="#"><?php echo $articledetail['judul']; ?></a>
                </nav>
                <!--End of Breadcrumbs-->
                <div class="col-lg-8 col-md-12">
                    <div class="page-title"><?php echo $articledetail['judul']; ?></div>
                    <div class="text-muted berita-last-update">last updated <?php echo $articledetail['tanggal_edit']; ?></div>
                    <div class="page-content">
                        <!--Featured Image-->
                        <div class="page-image">
                            <img class="img-thumbnail mx-auto d-block" src="<?php echo $articledetail['image']; ?>" alt="<?php echo $articledetail['judul']; ?>">
                        </div>
                        <!--End of Featured Image-->
                        <strong><?php echo $articledetail['location']; ?>, <?php echo $articledetail['reporter']; ?> &mdash; </strong><?php echo $articledetail['isi']; ?>
<!--                        <div class="row berita-thumb-images">
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
                        </div> -->
                        <div class="social-media-sharing">
                            <div class="sub-u">Share via</div>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="<?php echo $articledetail['facebook']; ?>"  rel="nofollow"><i class="fa fa-facebook-official fa-2x mod-facebook" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo $articledetail['twitter']; ?>" rel="nofollow"><i class="fa fa-twitter fa-2x mod-twitter" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo $articledetail['mail']; ?>" rel="nofollow"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="small-sections col-lg-4 col-md-12">
                    <ul class="list-unstyled">
                        <?php 
                            for($i=0; $i<count($recentarticle); $i++) {
                                echo '<li class="mymedia"><div class="media-body align-self-center">';
                                echo '<a href="'.base_url('artikel/list_artikel/').$recentarticle[$i]['slug'].'" class="item-berita-title">'.$recentarticle[$i]['judul'].'</a>';
                                echo '<div class="text-muted item-berita-subtitle">last updated '.$recentarticle[$i]['tanggal_edit'].'</div>';
                                echo '</div>';
                                echo '<img class="my-img-thumbnail card-img img-thumbnail" src="'.$recentarticle[$i]['image'].'" alt="IMAGE">';
                                echo '</li>';
                            }
                            ?>
                    </ul>
                </div>
            </div>
        </div>