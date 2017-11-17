<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="UKI merupakan salah satu universitas unggul dalam bidang pendidikan, penelitian, pengabdian dan pelayanan kepada masyarakat di Indonesia dan Asia sesuai dengan nilai-nilai kristiani. Berlokasi di jantung kota Jakarta menjadikannya salah satu Universitas dengan akses terbaik.">
        <meta name="author" content="Unit Pengembangan Sistem Informasi Universitas Kristen Indonesia">
        <meta name="keywords" content="universitas, universitas kristen, universitas kristen indonesia, uki, cawang, universitas terbaik, universitas unggul, kedokteran, ekonomi, manajemen, pendidikan, hukum, akuntansi, indonesia, pps, program, program pascasarjana, doctoral">
        <title><?php
            if (isset($page_title)) {
                echo $page_title;
            } else {
                echo "UNIVERSITAS KRISTEN INDONESIA";
            }
            ?></title>

        <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo.png">
        <!-- CSS -->
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Dan's Animate -->
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- AOS -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

        <?php
        if (isset($additionalCSS)) {
            echo $additionalCSS;
        }
        ?>
        <!-- Custom -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- JS -->
        <!-- JQuery -->
        <script src="<?php echo base_url(); ?>assets/fullcalendar/lib/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/jquery/jquery.js"></script>
        <!-- Tether -->
        <script src="<?php echo base_url(); ?>assets/tether/js/tether.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
        <!-- AOS JS -->
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <!-- Readmore -->
        <script src="https://fastcdn.org/Readmore.js/2.1.0/readmore.min.js"></script>
        <?php
        if (isset($additionalJS)) {
            echo $additionalJS;
        }
        ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-103026398-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-103026398-1');
        </script>
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function () {
                    $('#back-to-top').tooltip('hide');
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
                $('#back-to-top').tooltip('show');
            });
            $(function () { /* to make sure the script runs after page load */
                $('.rm-content').each(function (event) {
                    $('.rm-content').readmore({
                        speed: 75,
                        moreLink: '<div class="middle-centered-container"><a class="link-read-more" href="#">Selengkapnya</a></div>',
                        lessLink: '<br>'
                    });
                });
            });
        </script>
        <script>
            $(function () {
                AOS.init({
                    disable: 'mobile'
                });
            });
            $(window).on('load', function () {
                AOS.refresh();
            });
            //$('news-content').readmore();
        </script>
        <!-- Custom Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald');
            @import url('https://fonts.googleapis.com/css?family=Boogaloo');
            @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');
            @import url('https://fonts.googleapis.com/css?family=Roboto');
            @import url('https://fonts.googleapis.com/css?family=Corben:400,700&subset=latin-ext');
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
                            <a class="sublink" href="https://www.facebook.com/Univ.Kristen.Indonesia/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <a class="sublink" href="https://www.facebook.com/pmbuki"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a class="sublink" href="https://twitter.com/Kampus_UKI"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a class="sublink" href="https://www.instagram.com/uki_1953/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-lg-4 offset-lg-5 offset-md-0 offset-sm-0">
                            <!--   <a class="sublink" href="#">Alumni</a>
                               <a class="sublink" href="#">Karir</a>
                               <a class="sublink" href="#">Hubungi Kami</a> -->
                            <a class="sublink-inverse" href="http://pmb.uki.ac.id/">Daftar Sekarang!</a>
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
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo8wmod.png" width="250" alt="Logo UKI"></a>

                <div class="collapse navbar-collapse offset-0 offset-md-0 offset-lg-2" id="miniUKI">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link menulink dropdown-toggle" href="#" id="dd-tentangUKI" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tentang UKI
                            </a>
                            <div class="dropdown-menu dd-one-col" aria-labelledby="dd-tentangUKI">
                                <a class="dropdown-item item-head disabled" href="#">UNIVERSITAS KRISTEN INDONESIA</a>
                                <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171010-sejarah-universitas">Sejarah UKI</a>
                                <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171010-visi-misi">Visi Misi & Identitas UKI</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-visi-misi">Visi Misi</a>
                                <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-identitas-uki">Identitas UKI</a>
                                <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-himne-uki">Hymne UKI</a>
                                <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-mars-uki">Mars UKI</a>
                                <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171010-struktur-organisasi">Struktur Organisasi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-rektorat-uki">Rektorat UKI</a>
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
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171019-magister-administrasi-pendidikan">Administrasi Pendidikan</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171019-magister-ilmu-hukum">Ilmu Hukum</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171019-magister-pendidikan-agama-kristen">Pendidikan Agama Kristen</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171102-magister-manajemen">Manajemen</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171019-magister-teknik-elektro">Teknik Elektro</a>
                                            <a class="dropdown-item item-head" href="#">Arsitektur</a>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">PROGRAM SARJANA</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Kedokteran</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-pendidikan-dokter">Pendidikan Dokter</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Ekonomi</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-program-studi-manajemen-s1">Manajemen</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-program-studi-akuntansi-s1">Akuntansi</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Ilmu Sosial & Politik</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171019-hubungan-internasional">Ilmu Hubungan Internasional</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171019-ilmu-komunikasi">Ilmu Komunikasi</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171019-ilmu-politik">Ilmu Politik</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Sastra</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-sastra-inggris">Sastra Inggris</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Hukum</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171010-ilmu-hukum">Ilmu Hukum</a>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <a class="dropdown-item item-head" href="#">Fakultas Teknik</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171018-teknik-elektro">Teknik Elektro</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171018-teknik-mesin">Teknik Mesin</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171018-teknik-sipil">Teknik Sipil</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171018-teknik-arsitektur">Arsitektur</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Keguruan dan Ilmu Pendidikan</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-bimbingan-konseling">Bimbingan dan Konseling</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-pendidikan-bahasa-inggris">Pendidikan Bahasa Inggris</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171018-pendidikan-agama-kristen">Pendidikan Agama Kristen</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-pendidikan-matematika">Pendidikan Matematika</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-pendidikan-biologi">Pendidikan Biologi</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-pendidikan-bahasa-mandarin">Pendidikan Bahasa Mandarin</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-pendidikan-kimia">Pendidikan Kimia</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-pendidikan-fisika">Pendidikan Fisika</a>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">PROGRAM DIPLOMA</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Ekonomi</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-diploma-manajemen-perpajakan">Manajemen Perpajakan</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-diploma-akuntansi">Akuntansi</a>
                                            <a class="dropdown-item item-head" href="#">Fakultas Sastra</a>
                                            <a class="dropdown-item item-child" href="#">Bahasa Inggris</a>
                                            <a class="dropdown-item item-head disabled" href="#">AKADEMI</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171013-akademi-fisioterapi">Akademi Fisioterapi</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171013-akademi-perbankan">Akademi Perbankan</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171013-akademi-keperawatan">Akademi Keperawatan</a>
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
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171013-jadwal-registrasi-fakultas-kedokteran">Fakultas Kedokteran</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171013-jadwal-registrasi-non-fakultas-kedokteran">Non-Fakultas Kedokteran</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171013-jadwal-registrasi-program-pascasarjana">Pascasarjana</a>
                                            <a class="dropdown-item item-head" href="#">Persyaratan Registrasi</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-mahasiswa-jalur-umum">Mahasiswa Jalur Umum</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-mahasiswa-jalur-khusus">Mahasiswa Jalur Khusus</a>
                                            <a class="dropdown-item item-child" href="<?php echo base_url(); ?>halaman/index/20171013-mahasiswa-alih-program">Mahasiswa Alih Program</a>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <a class="dropdown-item item-head disabled" href="#">REGISTRASI ONLINE</a>
                                            <a class="dropdown-item item-head" href="http://pmb.uki.ac.id/admission/S1/form/setup-online-account">Registrasi  Program S1</a>
                                            <a class="dropdown-item item-head" href="http://pmb.uki.ac.id/admission/S2/form/setup-online-account">Registrasi  Program S2</a>
                                            <a class="dropdown-item item-head disabled" href="#">PROSEDUR LAINNYA</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171024-prosedur-pendaftaran-pengunduran-diri">Prosedur Pengunduran Diri</a>
                                            <a class="dropdown-item item-head disabled" href="#">INFORMASI LAINNYA</a>
                                            <a class="dropdown-item item-head" href="<?php echo base_url(); ?>halaman/index/20171024-biaya-kuliah">Biaya Kuliah</a>
                                            <!--<a class="dropdown-item item-head disabled" href="#">INFORMASI LAINNYA</a>
                                            <a class="dropdown-item item-head" href="#">Biaya Kuliah</a>
                                            <a class="dropdown-item item-head" href="#">Materi USM</a>
                                            <a class="dropdown-item item-head" href="#">Prosedur Pendaftaran</a>
                                            <a class="dropdown-item item-head" href="#">Prosedur Pengunduran Diri</a>
                                            <a class="dropdown-item item-head" href="#">Surat Pernyataan</a>
                                            <a class="dropdown-item item-head" href="#">Form Jaket Almamater</a>
                                            <a class="dropdown-item item-head" href="#">Brosur PMB UKI</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--<li class="nav-item dropdown dd-megamenu">
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
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link menulink" href="<?php echo base_url(); ?>halaman/index/20171018-beasiswa">Beasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menulink" href="#" onclick="return false;">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menulink" href="#" onclick="return false;">Fasilitas Kampus</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link menulink" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>-->
                    </ul>
                </div>
            </nav>
            <!-- Navigation End -->
        </header>