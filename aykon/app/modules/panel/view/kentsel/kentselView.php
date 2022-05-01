<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <table class="table">
                    <thead>
                    <tr>
                        <th>Kentsel Dönüşüm Süreci</th>
                        <th>Riskli Yapılar</th>
                        <th >İşlemler</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php foreach ($data['kentsel'] as $option): ?>
                        <tr>
                            <td><?=$option['kentsel_aciklama']?></td>
                            <td><?=$option['riskli_yapi']?></td>
                            <td><a href="/panel/editkentsel/<?=$option['id']?>" class="btn btn-xm btn-default"><i class="fa fa-edit"></i>Düzenle</a></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>