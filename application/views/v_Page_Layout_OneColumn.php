<div class="container wrapper">
	<div class="col-lg-12 col-md-12">
		 <!--Breadcrumbs-->
		 <nav class="breadcrumb col-lg-12 col-md-12">
                    <a class="breadcrumb-item" href="<?php echo site_url(); ?>">Home</a>
                    <a class="breadcrumb-item" href="#"><?php echo $dataPage['judul']; ?></a>
                </nav>
                <!--End of Breadcrumbs-->
		<div class="page-title">
			<?php echo $dataPage['judul']; ?>
		</div>
		<div class="page-content">
			<?php echo $dataPage['isi']; ?>
		</div>
	</div>
</div>