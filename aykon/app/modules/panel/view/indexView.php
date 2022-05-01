<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php if (isset($_SESSION['admin'])): ?>
                <h2>
                    <?php echo "Hoşgeldiniz Admin "; ?><b><?=$_SESSION['admin']['name']?></b> Anasayfadasınız

                    <!--Hangi dizinde olduğunu söyler ==> ?php echo getcwd(); ? -->
                </h2>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>



