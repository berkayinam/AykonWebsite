<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <!-- PROJECT DETAIL -->
                    <div class="row-project-detail">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="themesflat-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="detail-inner-wrap">
                                        <div class="detail-info">
                                            <div class="content-info">
                                                <div class="themesflat-headings style-2 clearfix">
                                                    <h2 class="heading line-height-62"><?=$data['proje']['proje_adi'];?></h2>
                                                    <div class="sep has-width w80 accent-bg clearfix">
                                                    </div>
                                                </div>
                                                <ul class="list-info has-icon icon-left">
                                                    <li>
                                                        <span class="text">İl</span>
                                                        <span class="right"><?=$data['proje']['il'];?></span>
                                                    </li>
                                                    <li>
                                                        <span class="text">İlçe</span>
                                                        <span class="right"><?=$data['proje']['ilce'];?></span>
                                                    </li>
                                                    <li>
                                                        <span class="text">Arsa</span>
                                                        <span class="right"><?=$data['proje']['arsa'];?> m<sup>2</sup></span>
                                                    </li>
                                                    <li>
                                                        <span class="text">Proje Niteliği</span>
                                                        <span class="right"><?=$data['proje']['proje_niteligi'];?></span>
                                                    </li>
                                                    <li>
                                                        <span class="text">Bağımsız Bölüm</span>
                                                        <span class="right"><?=$data['proje']['bagimsiz_bolum'];?></span>
                                                    </li>
                                                    <li>
                                                        <span class="text">Seçenekleri</span>
                                                        <span class="right"><?=$data['proje']['secenekler'];?></span>
                                                    </li>
                                                    <li>
                                                        <span class="text">Sosyal Donantılar</span>
                                                        <span class="right"><?=$data['proje']['sosyal_donantilar'];?></span>
                                                    </li>
                                                </ul>
                                            </div><!-- /.content-info -->
                                            <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-spacer clearfix" data-desktop="46" data-mobile="35" data-smobile="35"></div>

                                        </div>
                                        <div class="content-area blog-page padding-top-40" style="background-color: #fff; padding-bottom: 55px;">
                                            <div class="container">
                                                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
                                                <div class="container">
                                                    <div class="row">
                                                        <?php foreach ($data['image'] as $resim): ?>
                                                        <div class="col-md-3">
                                                            <div class="thumbnail">
                                                                <a data-fancybox="gallery" data-caption="" href="/assets/img/project/<?=$resim['resim_adi'] ?>">
                                                                    <img src="/assets/img/project/<?=$resim['resim_adi'] ?>?fsr=1&amp;maxsize=400&maxsize2=400&img=/assets/img/project/<?=$resim['resim_adi'] ?>" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- END PROJECT DETAIL -->

                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
<style>
    .thumbnail{
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
    }
</style>