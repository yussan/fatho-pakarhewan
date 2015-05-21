    <div class="pre-loader">
        <div class="load-con">
            <img src="<?php echo base_url('resource')?>/assets/img/freeze/logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <header>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php echo base_url('resource')?>/assets/img/freeze/logo.png" alt="" class="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#about">Tentang Kami</a>
                            </li>
                            <li><a href="#features">Penggunaan</a>
                            </li>
                            <li><a href="#reviews">Reviews</a>
                            </li>
                            <li><a href="#support">Support</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>


        <!--RevSlider-->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url('resource')?>/assets/img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="30"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="<?php echo base_url('resource')?>/assets/img/home.png" alt="">
                        </div>

                        <div class="tp-caption lfl fadeout visible-xs"
                            data-x="left"
                            data-y="center"
                            data-hoffset="700"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="<?php echo base_url('resource')?>/assets/img/freeze/iphone-freeze.png" alt="">
                        </div>

                        <div class="tp-caption large_white_bold sft" data-x="550" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                            Sistem Pakar
                        </div>
                        <!-- <div class="tp-caption large_white_light sfr" data-x="770" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1400" data-easing="Power4.easeOut">

                        </div> -->
                        <div class="tp-caption large_white_light sfb" data-x="550" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                            Hewan 1.0
                        </div>
                        <div class="tp-caption sfb hidden-xs" data-x="550" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="<?php echo site_url('start/firststep?type=vertebrata');?>" class="btn btn-primary inverse btn-lg">Vertebrata</a>
                        </div><div class="tp-caption sfb hidden-xs" data-x="690" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="<?php echo site_url('start/firststep?type=avertebrata');?>" class="btn btn-primary inverse btn-lg">Avertebrata</a>
                        </div>
                        <div class="tp-caption sfr hidden-xs" data-x="840" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                            <a href="#features" class="btn btn-default btn-lg">Cara Penggunaan</a>
                        </div>

                    </li>

                </ul>
            </div>
        </div>


    </header>


    <div class="wrapper">



        <section id="about">
            <div class="container">

                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Tentang Kami</h1>
                    <div class="divider"></div>
                    <p>SMAN 01 Depok Babarsari</p>
                </div>
                <div class="row">
                    <p><strong>Berprestasi tinggi</strong> adalah dengan meningkatkan kualitas pembelajaran yang efektif sehingga standar kompetensi minimal dapat terkuasai 100 %, memperoleh nilai Ujian Nasional yang tinggi serta mampu bersaing dalam seleksi penerimaan mahasiswa baru di Perguruan Tinggi Negeri dan Perguruan Tinggi Swasta favorit.</p>
                    <p><strong>Berkepribadian</strong> adalah warga sekolah memiliki kepribadian  yang mantap dan  kuat, sehingga tidak mudah terpengaruh perkembangan jaman yang negatif.</p>
                    <p><strong>Kreatif</strong> adalah mampu memanfaatkan peluang yang ada, mampu mengembangkan potensi diri secara maksimal dalam situasi dan kondisi apapun.</p>
                    <p><strong>Berwawasan Global</strong> adalah mampu mengikuti perkembangan global baik di bidang ilmu pengetahuan dan teknologi, membuka wawasan dunia luar serta mengambil segi ? segi positifnya untuk pengembangan diri peserta didik.</p>
                </div>
            </div>
        </section>

        <section id="features">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Features</h1>
                    <div class="divider"></div>
                    <p>Cara penggunaan sistem pakar</p>
                </div>
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-6 scrollpoint sp-effect1">
                        <div class="media text-right feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-cogs fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Aplikasi Ini Untuk Apa</h3>
                                Aplikasi ini adalah sistem pakar untuk mengetahui klasifkasi hewani berdasarkan kunci determinasi.
                            </div>
                        </div>
                        <div class="media text-right feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-envelope fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Messages Inbox</h3>
                                Gunakan fitur contact us untuk keterangan lebih lanjut dan error report.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="reviews">
            <div class="container">
                <div class="section-heading inverse scrollpoint sp-effect3">
                    <h1>Reviews</h1>
                    <div class="divider"></div>
                    <p>Lihat apa yang orang bilang tentang kami</p>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-push-1 scrollpoint sp-effect3">
                        <div class="review-filtering">
                            <div class="review">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="<?php echo base_url('resource/images/avatar/hijab.jpg')?>" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“Benar berguna untuk kegiatan belajar”</h3>
                                            <p>
                                                - Ninda Farisma
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review rollitin">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="<?php echo base_url('resource/images/avatar/liz.jpg')?>" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“Akhirnya saya tahu tentang kunci determinasi”</h3>
                                            <p>
                                                - Aliza Fitria
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-half-o fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review rollitin">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="<?php echo base_url('resource/images/avatar/alex.jpg')?>" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“Semoga ada implementasi untuk android juga :)”</h3>
                                            <p>
                                                - Alex Firza
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-half-o fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="support" class="doublediagonal">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Support</h1>
                    <div class="divider"></div>
                    <p>Untuk keterangan lebih lanjut, silahkan isi formulir dibawah ini</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 scrollpoint sp-effect1">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your email">
                                    </div>
                                    <div class="form-group">
                                        <textarea cols="30" rows="10" class="form-control" placeholder="Your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 contact-details scrollpoint sp-effect2">
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-map-marker fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jl. Babarsari, Caturtunggal, Depok, Sleman, Yogyakarta 55281</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-envelope fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="mailto:support@oleose.com">support@sman1depokbabarsari.sch.id</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#" >
                                        <i class="fa fa-phone fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">0274 - 485794</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <a href="#" class="scrollpoint sp-effect3">
                    <img src="<?php echo base_url('resource')?>/assets/img/freeze/logo.png" alt="" class="logo">
                </a>
                <div class="social">
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                </div>
                <div class="rights">
                    <p>Copyright &copy; 2014</p>
                    <p>By<a href="#" target="_blank">Fatho</a></p>
                </div>
            </div>
        </footer>



    </div>
    <script src="<?php echo base_url('resource')?>/assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url('resource')?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('resource')?>/assets/js/slick.min.js"></script>
    <script src="<?php echo base_url('resource')?>/assets/js/placeholdem.min.js"></script>
    <script src="<?php echo base_url('resource')?>/assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="<?php echo base_url('resource')?>/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url('resource')?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url('resource')?>/assets/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>
</body>

</html>
