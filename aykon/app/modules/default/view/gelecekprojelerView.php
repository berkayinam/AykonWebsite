<!-- Featured Title -->
<div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="/default/index" class="trail-begin">Anasayfa</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Gelecek Projeler</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    GELECEK PROJELER
                </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div>
<!-- End Featured Title -->

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <!-- SERVICES -->
                    <div class="row-services">
                        <div class="container-fluid maxwidth-99">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="73"
                                         data-mobile="60" data-smobile="60"></div>
                                    <div class="themesflat-headings style-1 text-center clearfix">
                                        <h2 class="heading">Gelecek Projelerimiz</h2>
                                        <div class="sep has-icon width-125 clearfix">
                                            <div class="sep-icon">
                                                <span class="sep-icon-before sep-center sep-solid"></span>
                                                <span class="icon-wrap"><i
                                                        class="autora-icon-build"></i></span>
                                                <span class="sep-icon-after sep-center sep-solid"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="40"
                                         data-mobile="35" data-smobile="35"></div>
                                    <div
                                        class="themesflat-project style-1 isotope-project has-margin mg15 w25 data-effect clearfix">
                                        <?php foreach ($data['proje'] as $product): ?>
                                        <div class="project-item">
                                            <div class="inner">
                                                <div
                                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                                    <img src="/assets/img/project/<?=$product['resim_adi']?>"
                                                         alt="Image">
                                                    <div class="text-wrap text-center">
                                                        <h5 class="heading"><a href="/proje/detail/<?=$product['proje_id']; ?>"><?=$product['proje_adi']; ?></a>
                                                        </h5>
                                                        <div class="elm-meta">
                                                            <span><a><?=$product['proje_kisa_aciklama']; ?></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-effect bg-color-3"></div>
                                                </div>
                                            </div>
                                        </div><!-- /.product-item -->
                                        <?php endforeach; ?>
                                    </div><!-- /.themesflat-project -->
                                    <div class="themesflat-spacer clearfix" data-desktop="51"
                                         data-mobile="60" data-smobile="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END SERVICES -->

                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->