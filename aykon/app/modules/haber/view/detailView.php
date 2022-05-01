<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <article class="hentry data-effect">
                    <div class="post-media has-effect-icon offset-v-25 offset-h-24 clerafix">
                        <br>
                        <?php foreach ($data['image'] as $resim): ?>
                        <a><img src="/assets/img/news/<?=$resim['resim_adi'] ?>" alt="Image"></a>
                        <?php endforeach; ?>
                        <div class="overlay-effect bg-color-1"></div>
                    </div><!-- /.post-media -->

                    <div class="post-content-wrap clearfix">
                        <div class="post-content post-excerpt margin-bottom-43">
                            <p class="line-height-27 letter-spacing-005"><?=$data['haber']['haber_aciklama'];?></p>
                        </div><!-- /.post-excerpt -->
                    </div><!-- /.post-content-wrap -->
                </article><!-- /.hentry -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->