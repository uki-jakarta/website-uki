<div class="container wrapper">
            <div class="row">
                <!--Breadcrumbs-->
                <nav class="breadcrumb col-lg-12 col-md-12">
                    <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Home</a>
                    <a class="breadcrumb-item active" href="<?php echo base_url('artikel'); ?>">Artikel</a>
                </nav>
                <!--End of Breadcrumbs-->
                <div class="offset-lg-2 col-lg-8 col-md-12 card sharp-card">
                    <div class="page-title-u">Artikel</div>
                    <div class="page-content ">
                        <ul class="list-unstyled">
                        <?php  
                        foreach ($articleslist as $k => $v) { 
                            $image = json_decode($v['image']);
                            echo '<li class="mymedia">';
                            echo '<img class="my-img-thumbnail d-flex mr-3" src="'.$image->url.'" alt="IMAGE">';
                            echo '<div class="media-body">';
                            echo '<a href="'.base_url('artikel/list_artikel/').$v['slug'].'" class="item-artikel-title">'.$v['judul'].'</a>';
                            echo '<div class="text-muted item-artikel-subtitle">last updated '. date('d-m-Y', strtotime($v['tanggal_edit'])).'</div>';
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