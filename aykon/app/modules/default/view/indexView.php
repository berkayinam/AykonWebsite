<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <!-- SLIDER -->
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/assets/img/slider/slider-bg-1.jpg" class="d-block w-100 " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/img/slider/slider-bg-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/img/slider/slider-bg-3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/img/slider/slider-bg-4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/assets/img/slider/slider-bg-5.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a style="color: black" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- END SLIDER -->

                    <!-- PROJECT -->
                    <div class="row-services">
                        <div class="container-fluid maxwidth-99">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                    <ul class="themesflat-filter style-1 text-center clearfix">
                                        <li class="active">
                                            <a href="#" data-filter="*">Hepsi</a></li>
                                        <li><a href="#" data-filter=".dev">Devam Eden Projeler</a></li>
                                        <li><a href="#" data-filter=".gel">Gelecek Projeler</a></li>
                                        <li><a href="#" data-filter=".tam">Tamamlanan Projeler</a></li>
                                    </ul>
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-project style-1 isotope-project has-margin mg15 w25 data-effect clearfix">
                                        <?php foreach ($data['projeler'] as $product): ?>
                                        <div class="project-item <?=$product['slug'] ?>">
                                            <div class="inner">
                                                <div class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                    <img src="/assets/img/project/<?=$product['resim_adi'] ?>" alt="Image">
                                                    <div class="text-wrap text-center">
                                                        <h5 class="heading"><a href="/proje/detail/<?=$product['proje_id']; ?>"><?=$product['proje_adi'] ?></a></h5>
                                                        <div class="elm-meta">
                                                            <span><a><?=$product['proje_kisa_aciklama'] ?></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        <!-- /.product-item -->
                                    </div><!-- /.themesflat-project -->
                                    <div class="themesflat-spacer clearfix" data-desktop="51" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END PROJECT -->

                    <!-- ABOUT -->
                    <div class="row-about">
                        <div class="container-fluid">
                            <div class="row equalize sm-equalize-auto">
                                <div class="col-md-6 half-background style-1">

                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 bg-light-grey">
                                    <div class="themesflat-spacer clearfix" data-desktop="64" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-content-box clearfix" data-margin="0 25% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                        <div class="themesflat-headings style-1 clearfix">
                                            <h2 class="heading">Geleceği İnşa Ediyoruz...</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                            <p class="sub-heading margin-top-30"><?=$data['kurumsal']['hakkimizda']?></p>
                                        </div>
                                        <div class="themesflat-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                                    </div><!-- /.themesflat-content-box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- END ABOUT -->

                    <!-- SERVICES -->
                    <div class="row-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="81"
                                         data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                        <h2 class="heading">Kentsel Dönüşüm Projeleri</h2>
                                        <div class="sep has-icon width-125 clearfix">
                                            <div class="sep-icon">
                                                <span class="sep-icon-before sep-center sep-solid"></span>
                                                <span class="icon-wrap"><i
                                                            class="autora-icon-build"></i></span>
                                                <span class="sep-icon-after sep-center sep-solid"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="27" data-mobile="35" data-smobile="35"></div>
                                    <div class="themesflat-carousel-box data-effect clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                        <div class="owl-carousel owl-theme">
                                            <?php foreach ($data['kentsel'] as $product): ?>
                                            <div class="themesflat-image-box style-2 clearfix">
                                                <div class="image-box-item">
                                                    <div class="inner">
                                                        <div class="thumb">
                                                            <img src="/assets/img/project/<?=$product['resim_adi']?>"
                                                                 alt="Image">
                                                            <div class="overlay-effect bg-color-accent">
                                                            </div>
                                                        </div>
                                                        <div class="text-wrap">
                                                            <h5 class="heading"><a href="/proje/detail/<?=$product['proje_id']; ?>"><?=$product['proje_adi']; ?></a>
                                                            </h5>
                                                            <p class="letter-spacing-01"><?=$product['proje_kisa_aciklama']; ?></p>
                                                            <div class="elm-readmore">
                                                                <a href="/proje/detail/<?=$product['proje_id']; ?>">DETAY</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.themesflat-image-box -->
                                            <?php endforeach; ?>
                                        </div>
                                    </div><!-- /.themesflat-carousel-box -->
                                    <div class="themesflat-spacer clearfix" data-desktop="45"
                                         data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END SERVICES -->

                    <!-- QUOTE -->
                    <div class="row-quote bg-row-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-quote style-1 clearfix">
                                        <div class="quote-item">
                                            <div class="inner">
                                                <div class="heading-wrap">
                                                    <h3 class="heading">PROJELERİNİZE DEĞER KATIN</h3>
                                                </div>
                                                <div class="button-wrap has-icon icon-left">
                                                    <a href="tel:02124288859" class="themesflat-button bg-white small">
                                                    <span>0212 428 88 59
                                                        <span class="icon">
                                                            <i class="autora-icon-phone-contact"></i>
                                                        </span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END QUOTE -->
                    
                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->