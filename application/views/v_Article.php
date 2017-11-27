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
                    <div class="text-muted berita-last-update">last updated <?php echo date('d-m-Y', strtotime($articledetail['tanggal_edit'])); ?></div>
                    <div class="page-content">
                        <!--Featured Image-->
                        <div class="page-image">
                            <img class="img-thumbnail mx-auto d-block" src="<?php $image = json_decode($articledetail['image']); echo $image->url;  ?>" alt="<?php echo $articledetail['judul']; ?>">
                        </div>
                        <!--End of Featured Image-->
                        <strong><?php echo $articledetail['reporter']; ?> &mdash; </strong> <div class="rm-content"><?php echo $articledetail['isi']; ?></div>
                        <?php 
                            $additionalimages = json_decode($articledetail['additional_image']);
                        
                            if (count($additionalimages) > 0) {
                                echo '<div class="row berita-thumb-images">';
                                foreach ($additionalimages as $k => $v) {
                                    echo '<img class="card-img my-img-thumbnail" src="'.$v->url.'" alt="'.$v->caption.'">';
                                }
                                echo '</div>';
                            } 
                        
                        ?>

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
                            for($i=0; $i<count($recentarticles); $i++) {
                                $image = json_decode($recentarticles[$i]['image']);
                                echo '<li class="mymedia"><div class="media-body align-self-center">';
                                echo '<a href="'.base_url('artikel/list_artikel/').$recentarticles[$i]['slug'].'" class="item-berita-title">'.$recentarticles[$i]['judul'].'</a>';
                                echo '<div class="text-muted item-berita-subtitle">last updated '.$recentarticles[$i]['tanggal_edit'].'</div>';
                                echo '</div>';
                                echo '<img class="my-img-thumbnail card-img img-thumbnail" src="'.$image->url.'" alt="IMAGE">';
                                echo '</li>';
                            }
                            ?>
                    </ul>
                </div>
            </div>
        </div>