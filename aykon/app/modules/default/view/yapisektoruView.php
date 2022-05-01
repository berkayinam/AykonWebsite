<!-- Featured Title -->
<div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="/default/index" class="trail-begin">Anasayfa</a>
                        <span class="sep">|</span>
                        <span class="trail-end">Yapi Sektörü Haberleri</span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    YAPI SEKTÖRÜ HABERLERİ
                </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div>
<!-- End Featured Title -->

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <?php foreach ($data['yapi'] as $habers): ?>
                <article class="hentry data-effect">

                    <div class="post-media has-effect-icon offset-v-25 offset-h-24 clerafix"><br>
                        <a><img src="/assets/img/news/<?=$habers['resim_adi']?>" alt="Image"></a>
                        <div class="overlay-effect bg-color-1"></div>
                    </div><!-- /.post-media -->

                    <div class="post-content-wrap clearfix">
                        <h2 class="post-title">
                                    <span class="post-title-inner">
                                        <a href="/haber/detail/<?=$habers['haber_id'];?>"><?=$habers['haber_adi'];?></a>
                                    </span>
                        </h2><!-- /.post-title -->
                        <div class="post-meta">
                            <div class="post-meta-content">
                                <div class="post-meta-content-inner">
                                    <span class="post-date item"><span class="inner"><span class="entry-date"><?=$habers['haber_tarih'];?></span></span></span>
                                </div>
                            </div>
                        </div><!-- /.post-meta -->
                        <div class="post-content post-excerpt">
                            <p><?=$habers['haber_kisa_aciklama'];?></p>
                        </div><!-- /.post-excerpt -->
                        <div class="post-read-more">
                            <div class="post-link">
                                <a href="/haber/detail/<?=$habers['haber_id'];?>">DETAY</a>
                            </div>
                        </div>
                    </div><!-- /.post-content-wrap -->
                </article><!-- /.hentry -->
                <?php endforeach; ?>
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->