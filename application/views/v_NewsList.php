<div class="container wrapper">
<div class="row">
    <!--Breadcrumbs-->
    <nav class="breadcrumb col-lg-12 col-md-12">
        <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Home</a>
        <a class="breadcrumb-item active" href="<?php echo base_url('berita'); ?>">Berita</a>
    </nav>
    <!--End of Breadcrumbs-->
    <div class="offset-lg-2 col-lg-8 col-md-12 card sharp-card">
        <div class="page-title-u">Berita</div>
        <div class="page-content ">
            <ul class="list-unstyled">
            <?php  
            foreach ($newslist as $k => $v) { 
                $image = json_decode($v['image']);
                echo '<li class="mymedia">';
                echo '<img class="my-img-thumbnail d-flex mr-3" src="'.$image->url.'" alt="IMAGE">';
                echo '<div class="media-body">';
                echo '<a href="'.base_url('berita/list_berita/').$v['slug'].'" class="item-berita-title">'.$v['judul'].'</a>';
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