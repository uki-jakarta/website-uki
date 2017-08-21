<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>My Website Title</title>

        <link rel="icon" href="<?php echo site_url('assets/'); ?>img/logo.png">
        <!-- CSS -->
        <!-- Bootstrap -->
        <link href="<?php echo site_url('assets/'); ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Dan's Animate -->
        <link href="<?php echo site_url('assets/'); ?>css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Custom -->
        <link href="<?php echo site_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css"/>

        <!-- JS -->
        <!-- JQuery -->
        <script src="<?php echo site_url('assets/'); ?>jquery/jquery.js"></script>
        <!-- Tether -->
        <script src="<?php echo site_url('assets/'); ?>tether/js/tether.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo site_url('assets/'); ?>bootstrap/js/bootstrap.js"></script>
        <!-- Custom Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald');
            @import url('https://fonts.googleapis.com/css?family=Boogaloo');
            @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');
            @import url('https://fonts.googleapis.com/css?family=Roboto');
        </style>
    </head>
    <body>
        <header>
            <!-- Sub Header -->
            <div class="subheader">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <a class="sublink" href="#">EN</a>
                            <a class="sublink" href="#">IN</a>
                            <a class="sublink" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <a class="sublink" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a class="sublink" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a class="sublink" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-3 offset-lg-6 offset-md-0 offset-sm-0">
                            <a class="sublink" href="#">Alumni</a>
                            <a class="sublink" href="#">Karir</a>
                            <a class="sublink" href="#">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sub Header End -->
            <!-- Navigation -->
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#miniUKI" aria-controls="miniUKI" aria-expanded="false" aria-label="Toggle Mini View UKI">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8080/TemplateBS4a6/index.php"><img src="assets/img/logo-utama.png" width="250" alt="Logo UKI"></a>

                <div class="collapse navbar-collapse offset-0 offset-md-0 offset-lg-1" id="miniUKI">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link menulink dropdown-toggle" href="#" id="dd-tentangUKI" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tentang UKI
                            </a>
                            <div class="dropdown-menu dd-one-col" aria-labelledby="dd-tentangUKI">
                                <a class="dropdown-item item-head disabled" href="#">UNIVERSITAS KRISTEN INDONESIA</a>
                                <a class="dropdown-item item-head" href="#">Sejarah UKI</a>
                                <a class="dropdown-item item-head" href="#">Visi Misi & Identitas UKI</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item item-child" href="#">Visi Misi</a>
                                <a class="dropdown-item item-child" href="#">Identitas UKI</a>
                                <a class="dropdown-item item-child" href="#">Hymne UKI</a>
                                <a class="dropdown-item item-child" href="#">Mars UKI</a>
                                <a class="dropdown-item item-head" href="#">Struktur Organisasi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item item-child" href="#">Yayasan UKI</a>
                                <a class="dropdown-item item-child" href="#">Rektorat UKI</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dd-megamenu">
                            <a class="nav-link menulink dropdown-toggle" href="#" id="dd-programAkademik" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Program Akademik
                            </a>
                            <div class="dropdown-menu dd-fw" aria-labelledby="dd-programAkademik">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">PROGRAM PASCASARJANA</a>
                                            <a class="dropdown-item item-head" href="#">Administrasi Pendidikan</a>
                                            <a class="dropdown-item item-head" href="#">Ilmu Hukum</a>
                                            <a class="dropdown-item item-head" href="#">Pendidikan Agama Kristen</a>
                                            <a class="dropdown-item item-head" href="#">Manajemen</a>
                                            <a class="dropdown-item item-head" href="#">Teknik Elektro</a>
                                            <a class="dropdown-item item-head" href="#">Arsitektur</a>
                                            <a class="dropdown-item item-head" href="#">Kesehatan Masyarakat</a>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">PROGRAM SARJANA</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Kedokteran</a>
                                            <a class="dropdown-item item-child" href="#">Pendidikan Dokter</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Ekonomi</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="#">Manajemen</a>
                                            <a class="dropdown-item item-child" href="#">Akuntansi</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Ilmu Sosial & Politik</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="#">Ilmu Hubungan Internasional</a>
                                            <a class="dropdown-item item-child" href="#">Ilmu Komunikasi</a>
                                            <a class="dropdown-item item-child" href="#">Ilmu Politik</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Sastra</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="#">Sastra Inggris</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Hukum</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="#">Ilmu Hukum</a>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <a class="dropdown-item item-head" href="#">Fakultas Teknik</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="#">Teknik Elektro</a>
                                            <a class="dropdown-item item-child" href="#">Teknik Mesin</a>
                                            <a class="dropdown-item item-child" href="#">Teknik Sipil</a>
                                            <a class="dropdown-item item-child" href="#">Arsitektur</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Keguruan dan Ilmu Pendidikan</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="#">Bimbingan dan Konseling</a>
                                            <a class="dropdown-item item-child" href="#">Pendidikan Bahasa Inggris</a>
                                            <a class="dropdown-item item-child" href="#">Pendidikan Agama Kristen</a>
                                            <a class="dropdown-item item-child" href="#">Pendidikan Matematika</a>
                                            <a class="dropdown-item item-child" href="#">Pendidikan Biologi</a>
                                            <a class="dropdown-item item-child" href="#">Pendidikan Bahasa Mandarin</a>
                                            <a class="dropdown-item item-child" href="#">Pendidikan Kimia</a>
                                            <a class="dropdown-item item-child" href="#">Pendidikan Fisika</a>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">PROGRAM DIPLOMA</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Ekonomi</a>
                                            <a class="dropdown-item item-child" href="#">Manajemen Perpajakan</a>
                                            <a class="dropdown-item item-child" href="#">Akuntansi</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Sastra</a>
                                            <a class="dropdown-item item-child" href="#">Bahasa Inggris</a>
                                            <a class="dropdown-item item-head disabled" href="#">AKADEMI</a>
                                            <a class="dropdown-item item-head" href="#">Akademi Fisioterapi</a>
                                            <a class="dropdown-item item-head" href="#">Akademi Perbankan</a>
                                            <a class="dropdown-item item-head" href="#">Akademi Keperawatan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link menulink dropdown-toggle" href="#" id="dd-Admisi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admisi
                            </a>
                            <div class="dropdown-menu dd-two-col" aria-labelledby="dd-Admisi">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">JADWAL REGISTRASI</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Kedokteran</a>
                                            <a class="dropdown-item item-head" href="#">Non-Fakultas Kedokteran</a>
                                            <a class="dropdown-item item-head" href="#">Pascasarjana</a>
                                            <a class="dropdown-item item-head" href="#">Persyaratan Registrasi</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="#">Mahasiswa Jalur Umum</a>
                                            <a class="dropdown-item item-child" href="#">Mahasiswa Jalur Khusus</a>
                                            <a class="dropdown-item item-child" href="#">Mahasiswa Alih Program</a>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">REGISTRASI ONLINE</a>
                                            <a class="dropdown-item item-head" href="#">Registrasi  Program S1</a>
                                            <a class="dropdown-item item-head" href="#">Registrasi  Program S2</a>
                                            <a class="dropdown-item item-head disabled" href="#">INFORMASI LAINNYA</a>
                                            <a class="dropdown-item item-head" href="#">Biaya Kuliah</a>
                                            <a class="dropdown-item item-head" href="#">Materi USM</a>
                                            <a class="dropdown-item item-head" href="#">Prosedur Pendaftaran</a>
                                            <a class="dropdown-item item-head" href="#">Prosedur Pengunduran Diri</a>
                                            <a class="dropdown-item item-head" href="#">Surat Pernyataan</a>
                                            <a class="dropdown-item item-head" href="#">Form Jaket Almamater</a>
                                            <a class="dropdown-item item-head" href="#">Brosur PMB UKI</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dd-megamenu">
                            <a class="nav-link menulink dropdown-toggle" href="#" id="dd-Beasiswa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Beasiswa</a>
                            <div class="dropdown-menu dd-three-col" aria-labelledby="dd-Beasiswa">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">COLUMN #1</a>
                                            <a class="dropdown-item item-head" href="#">Head 1</a>
                                            <a class="dropdown-item item-head" href="#">Head 2</a>
                                            <a class="dropdown-item item-head" href="#">Head 3</a>
                                            <a class="dropdown-item item-head" href="#">Head 4</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="#">Child 1</a>
                                            <a class="dropdown-item item-child" href="#">Child 2</a>
                                            <a class="dropdown-item item-child" href="#">Child 3</a>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">COLUMN #2</a>
                                            <a class="dropdown-item item-head" href="#">Head 1</a>
                                            <a class="dropdown-item item-head" href="#">Head 2</a>
                                            <a class="dropdown-item item-head disabled" href="#">BIG HEAD</a>
                                            <a class="dropdown-item item-head" href="#">Head 1</a>
                                            <a class="dropdown-item item-head" href="#">Head 2</a>
                                            <a class="dropdown-item item-head" href="#">Head 3</a>
                                            <a class="dropdown-item item-head" href="#">Head 4</a>
                                            <a class="dropdown-item item-head" href="#">Head 5</a>
                                            <a class="dropdown-item item-head" href="#">Head 6</a>
                                            <a class="dropdown-item item-head" href="#">Head 7</a>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">Column #3</a>
                                            <a class="dropdown-item item-head" href="news.php">Template Berita</a>
                                            <a class="dropdown-item item-head" href="event.php">Template Event</a>
                                            <a class="dropdown-item item-head" href="article.php">Template Artikel</a>
                                            <a class="dropdown-item item-head" href="OneBigPage.php">One Big Page</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="emptypage.php">Empty Page</a>
                                            <a class="dropdown-item item-child" href="#">Child 2</a>
                                            <a class="dropdown-item item-child" href="#">Child 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menulink" href="#">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menulink" href="#">Fasilitas Kampus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menulink" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Navigation End -->
        </header>