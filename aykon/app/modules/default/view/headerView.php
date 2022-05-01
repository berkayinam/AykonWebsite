<?php
@$defaultModel  = new defaultModel();
@$iletisim = $defaultModel->getIletisimOneModel();
?>
<div id="wrapper" class="animsition">
<div id="page" class="clearfix">
<!-- Header Wrap -->
<div id="site-header-wrap">
    
<!-- Top Bar -->
<div id="top-bar">
    <div id="top-bar-inner" class="container">
        <div class="top-bar-inner-wrap">
            <div class="top-bar-content">
                <div class="inner">
                    <span class="phone content"><a href="tel:<?=$iletisim['telefon']; ?>"><?=$iletisim['telefon']; ?></a></span>
                 </div>
            </div><!-- /.top-bar-content -->

            <div class="top-bar-socials">
                <div class="inner">
                    <span class="icons">
                        <a href="https://www.facebook.com/<?=$iletisim['facebook']; ?>/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/<?=$iletisim['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/<?=$iletisim['instagram']; ?>/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/<?=$iletisim['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                        <a href="https://wa.me/<?=$iletisim['whatsapp']; ?>?text=Merhaba,"><i class="fa fa-whatsapp"></i></a>
                    </span>
                </div>
            </div><!-- /.top-bar-socials -->
        </div>
        </div>
</div>
<!-- /#top-bar -->

<!-- Header -->
<header id="site-header">
    <div id="site-header-inner" class="container">
        <div class="wrap-inner clearfix">

            <div id="site-logo" class="clearfix">
                <div id="site-log-inner">
                    <a href="/default/index" rel="home" class="main-logo">
                        <img src="/assets/img/logo-small.png" alt="Aykon" width="200" height="50" data-width="200" data-height="50">
                    </a>
                </div>
            </div><!-- /#site-logo -->

            <div class="mobile-button">
                <span></span>
            </div><!-- /.mobile-button -->

            <nav id="main-nav" class="main-nav">
                <ul id="menu-primary-menu" class="menu">
                    <li class="menu-item menu-item-has-children">
                        <a href="/default/index">ANASAYFA</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="/default/about">KURUMSAL</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a>PROJELER</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="/default/devamedenprojeler">Devam Eden Projeler</a></li>
                            <li class="menu-item"><a href="/default/gelecekprojeler">Gelecek Projeler</a></li>
                            <li class="menu-item"><a href="/default/tamamlananprojeler">Tamamlanan Projeler</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a>KENTSEL DÖNÜŞÜM</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="/default/kentselhakkinda">Kentsel Dönüşüm Hakkında</a></li>
                            <li class="menu-item"><a href="/default/kentselprojeler">Kentsel Dönüşüm Projeleri</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a>HABERLER</a>
                        <ul class="sub-menu right-sub-menu">
                            <li class="menu-item"><a href="/default/yapisektoru">Yapı Sektörü</a></li>
                            <li class="menu-item"><a href="/default/kentseldonusum">Kentsel Dönüşüm</a></li>
                            <li class="menu-item"><a href="/default/basindabiz">Basında Biz</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="/default/contact">İLETİŞİM</a>
                    </li>
                </ul>
            </nav><!-- /#main-nav -->

        </div><!-- /.wrap-inner -->
    </div><!-- /#site-header-inner -->
</header>
<!-- /#site-header -->

</div>
<!-- #site-header-wrap -->