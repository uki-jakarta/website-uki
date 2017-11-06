<div class="container wrapper">
            <div class="row">
                <!--Breadcrumbs-->
                <nav class="breadcrumb col-lg-12 col-md-12">
                    <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Home</a>
                    <a class="breadcrumb-item active" href="<?php echo base_url('informasi'); ?>">Informasi</a>
                </nav>
                <!--End of Breadcrumbs-->
                <div class="offset-lg-2 col-lg-8 col-md-12 card sharp-card">
                    <div class="page-title-u">Informasi</div>
                    <div class="page-content ">
                        <ul class="list-unstyled">
                        <?php  
                        foreach ($informationslist as $k => $v) { 
                            echo '<li class="mymedia">';
                            echo '<div class="media-body">';
                            echo '<a href="'.base_url('informasi/list_informasi/').$v['slug'].'" class="item-informasi-title">'.$v['judul'].'</a>';
                            echo '<div class="text-muted item-informasi-subtitle">last updated '.$v['tanggal_edit'].'</div>';
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