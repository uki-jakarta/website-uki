<div class="container wrapper">
    <div class="row">
        <!--Breadcrumbs-->
        <nav class="breadcrumb col-lg-12 col-md-12">
            <a class="breadcrumb-item" href="<?php echo site_url(); ?>">Home</a>
            <a class="breadcrumb-item" href="#"><?php echo $dataPage['judul']; ?></a>
        </nav>
        <!--End of Breadcrumbs-->
        <div class="col-lg-8 col-md-12">
            <div class="page-title"><?php echo $dataPage['judul']; ?></div>
            <div class="page-content">
                <?php echo $dataPage['isi']; ?>
            </div>
        </div>
        <div class="sidebar-sections col-lg-4 col-md-12">
            <div class="sidebar-content">
                <div class="page-title"><?php if (isset($dataPage['sidebar'])) echo $dataPage['sidebar']; ?></div><br />
                <?php
                if (isset($dataPage['sidebarlist'])) {
                    foreach ($dataPage['sidebarlist'] as $k => $v) {
                        echo '<a href="' . $v['url'] . '">' . $v['label'] . '</a><br />';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>