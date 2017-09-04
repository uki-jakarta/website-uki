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
                        <?php  
                        foreach ($newslist as $k => $v) { 
                            echo '<li class="mymedia">';
                            echo '<img class="d-flex mr-3" src="'.$v['image'].'" alt="IMAGE">';
                            echo '<div class="media-body">';
                            echo '<a href="#" class="item-berita-title">'.$v['judul'].'</a>';
                            echo '<div class="text-muted item-berita-subtitle">last updated '.$v['tanggal_edit'].'</div>';
                            echo '<div></li>';                            
                        }
                        ?>
                        </ul>
                        <!--Pagination-->
                        <nav aria-label="Page navigation example">
                            <?php echo $pagination; ?>
                        </nav>
                        <!--Pagination end-->
                    </div>
                </div>

            </div>
        </div>