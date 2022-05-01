<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-solid">
                        <div class="card-body">
                            <form action="/panel/addhaberler" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="haber_adi">Haber Adı</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="haber_adi" placeholder="Buraya Haber Adını Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="haber_aciklama">Haber Açıklama</label>
                                    <div class="col-xs-12">
                                        <textarea rows="15" class="form-control col-xs-12" name="haber_aciklama" id="editor" placeholder="Buraya Haber Açıklaması Giriniz"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="haber_kisa_aciklama">Haber Kısa Açıklama</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="haber_kisa_aciklama" placeholder="Buraya Kısa Haber Açıklaması Giriniz"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="haber_resim">Haber Resim</label>
                                    <div class="col-xs-12">
                                        <input class="form-control form-control-lg col-xs-12" name="haber_resim[]" multiple type="file">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hangi Vitrin</label><br>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="yapi" id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yapı Sektörü</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="kentsel" id="inlineCheckbox2" value="1">
                                        <label class="form-check-label" for="inlineCheckbox2">Kentsel Dönüşüm</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="basin" id="inlineCheckbox3" value="1">
                                        <label class="form-check-label" for="inlineCheckbox3">Basında Biz</label>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success form-control"><b>Ekle</b></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Haberler</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Haber Adı</th>
                            <th>Haber Açıklama</th>
                            <th>Haber Kısa Açıklama</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['haberler'] as $urun): ?>
                        <tr>
                            <td><?=$urun['haber_adi']?></td>
                            <td><?=$urun['haber_aciklama']?></td>
                            <td><?=$urun['haber_kisa_aciklama']?></td>
                            <td>
                                <a href="/panel/edithaberler/<?=$urun['haber_id']; ?>" class="btn btn-xm btn-default"><i class="fa fa-edit"></i>Düzenle</a>
                                <pre></pre>
                                <a href="/panel/deletehaberler/<?=$urun['haber_id']; ?>" class="btn btn-xm btn-danger"><i class="fa fa-times"></i>Sil</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>

