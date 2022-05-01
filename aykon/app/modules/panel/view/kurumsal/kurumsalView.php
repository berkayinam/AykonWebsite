<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Misyon 1</th>
                        <th scope="col">Misyon 2</th>
                        <th scope="col">Misyon 3</th>
                        <th scope="col">Vizyon</th>
                        <th scope="col">Hakkımızda</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['kurumsal'] as $option): ?>
                        <tr>
                            <td><?=$option['misyon_1']?></td>
                            <td><?=$option['misyon_2']?></td>
                            <td><?=$option['misyon_3']?></td>
                            <td><?=$option['vizyon']?></td>
                            <td><?=$option['hakkimizda']?></td>
                            <td><a href="/panel/editkurumsal/<?=$option['id']?>" class="btn btn-xm btn-default"><i class="fa fa-edit"></i>Düzenle</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</div>