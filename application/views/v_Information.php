<div class="container wrapper">
    <div class="row">
        <!--Breadcrumbs-->
        <nav class="breadcrumb col-lg-12 col-md-12">
            <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Home</a>
            <a class="breadcrumb-item" href="<?php echo base_url('informasi'); ?>">Informasi</a>
            <a class="breadcrumb-item active" href="#"><?php echo $informationdetail['judul']; ?></a>
        </nav>
        <!--End of Breadcrumbs-->
        <div class="col-lg-8 col-md-12">
            <div class="page-title"><?php echo $informationdetail['judul']; ?></div>
            <div class="text-muted berita-last-update">last updated <?php echo date('d-m-Y', strtotime($informationdetail['tanggal_edit'])); ?></div>
            <div class="page-content">
                <!--Featured Image-->
                <div class="page-image">
                    <?php
                    $image = json_decode($informationdetail['image']);
                    if (isset($image->url)) {
                        echo '<img class="img-thumbnail mx-auto d-block" src="' . $image->url . '" alt="' . $informationdetail['judul'] . '">';
                    }
                    ?>

                </div>
                <!--End of Featured Image-->
                <?php echo $informationdetail['isi']; ?><br>&mdash;<br> 
                <strong><?php echo $informationdetail['sumber']; ?> </strong>
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
                        <li class="list-inline-item"><a href="<?php echo "https://www.facebook.com/sharer.php?u=" . base_url('/informasi/list_informasi/' . $informationdetail['slug']) . ""; ?>"  rel="nofollow"><i class="fa fa-facebook-official fa-2x mod-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="<?php echo "https://twitter.com/intent/tweet?url=" . base_url('/informasi/list_informasi/' . $informationdetail['slug']) . "&text=" . $informationdetail['judul'] . ""; ?>" rel="nofollow"><i class="fa fa-twitter fa-2x mod-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="<?php echo "mailto:?subject=" . $informationdetail['judul'] . "&body=Check out this site " . base_url('/informasi/list_informasi/' . $informationdetail['slug']); ?>" rel="nofollow"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="small-sections col-lg-4 col-md-12">
            <ul class="list-unstyled">
                <?php
                for ($i = 0; $i < count($recentinformations); $i++) {
                    $image = json_decode($recentinformations[$i]['image']);
                    echo '<li class="mymedia"><div class="media-body align-self-center">';
                    echo '<a href="' . base_url('informasi/list_informasi/') . $recentinformations[$i]['slug'] . '" class="item-berita-title">' . $recentinformations[$i]['judul'] . '</a>';
                    echo '<div class="text-muted item-berita-subtitle">last updated ' . date('d-m-Y', strtotime($recentinformations[$i]['tanggal_edit'])) . '</div>';
                    echo '</div>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>