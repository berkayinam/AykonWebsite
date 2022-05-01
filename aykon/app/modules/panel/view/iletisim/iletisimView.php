<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Telefon</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Twitter</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Linkedin</th>
                        <th scope="col">Whatsapp</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['iletisim'] as $option): ?>
                    <tr>
                        <td><?=$option['telefon']?></td>
                        <td><?=$option['adres']?></td>
                        <td><?=$option['mail']?></td>
                        <td>@<?=$option['facebook']?></td>
                        <td>@<?=$option['twitter']?></td>
                        <td>@<?=$option['instagram']?></td>
                        <td>@<?=$option['linkedin']?></td>
                        <td><?=$option['whatsapp']?></td>
                        <td><a href="/panel/editiletisim/<?=$option['id']?>" class="btn btn-xm btn-default"><i class="fa fa-edit"></i>Düzenle</a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</div>