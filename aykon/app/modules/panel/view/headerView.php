<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/panel/index" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AYKON GYO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <?php if (isset($_SESSION['admin'])): ?>
                <div class="info">
                    <a href="/panel/index" class="d-block"><?=$_SESSION['admin']['name'] ?></a>
                </div>
            <?php endif; ?>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/panel/kurumsal" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Kurumsal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/panel/iletisim" class="nav-link">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                            İletişim
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/panel/kentsel" class="nav-link">
                        <i class="nav-icon fas fa-house-damage"></i>
                        <p>
                            Kentsel Dnüşüm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/panel/haberler" class="nav-link">
                        <i class="nav-icon fas fa-paperclip"></i>
                        <p>
                            Haberler
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/panel/projeler" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Projeler
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/panel/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Çıkış
                        </p>
                    </a>
                </li>
                <!--<li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-envelope"></i>
                         <p>
                             Mailbox
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/mailbox/mailbox.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inbox</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/mailbox/compose.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Compose</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/mailbox/read-mail.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Read</p>
                             </a>
                         </li>
                     </ul>
                 </li>-->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>