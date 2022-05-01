<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-solid">
                        <div class="card-body">
                            <form action="/panel/addproje" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_adi">Proje Adı</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="proje_adi" placeholder="Buraya Proje Adını Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_aciklama">Proje Açıklama</label>
                                    <div class=" col-xs-12">
                                        <textarea rows="5" class="form-control col-xs-12" name="proje_aciklama" placeholder="Buraya Proje Açıklaması Giriniz"></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_kisa_aciklama">Proje Kısa Açıklama</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="proje_kisa_aciklama" placeholder="Buraya Proje Kısa Açıklama Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="il">İl</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="il" placeholder="Buraya İl Adını Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ilce">İlçe Adı</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="ilce" placeholder="Buraya İlçe Adını Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="arsa">Arsa Boyutu</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="arsa" placeholder="Buraya Arsa Boyutunu Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_niteligi">Proje Niteligi</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="proje_niteligi" placeholder="Buraya Proje Niteligi Giriniz (Ticari + Konut)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bagimsiz_bolum">Bağımsız Bölüm</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="bagimsiz_bolum" placeholder="Buraya Bağımsız Bölüm Giriniz (.. Dükkan - .. Daire)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="secenekler">Seçenekler</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="secenekler" placeholder="Buraya Seçenekleri Giriniz (2+1 - 3+1)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sosyal_donantilar">Sosyal Donantılar</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="sosyal_donantilar" placeholder="Buraya Sosyal Donantılar Giriniz (Kapalı Otopark - Çocuk Parkı)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_resim">Proje Resim</label>
                                    <div class= col-xs-12">
                                        <input class="form-control form-control-lg col-xs-12" name="proje_resim[]" multiple type="file">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Slug</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="slug" placeholder="Buraya Slug Adını Giriniz (Sadece Anasayfa için Dev - Gel - Tam Yazılacak)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hangi Vitrin</label><br>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="vitrin" id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Vitrin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="devam" id="inlineCheckbox2" value="1">
                                        <label class="form-check-label" for="inlineCheckbox2">Devam Eden Projeler</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="gelecek" id="inlineCheckbox3" value="1">
                                        <label class="form-check-label" for="inlineCheckbox3">Gelecek Projeler</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="tamamlanan" id="inlineCheckbox4" value="1">
                                        <label class="form-check-label" for="inlineCheckbox5">Tamamlanan Projeler</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="kentsel" id="inlineCheckbox5" value="1">
                                        <label class="form-check-label" for="inlineCheckbox5">Kentsel Dönüşüm Projeler</label>
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
                    <h3 class="card-title">Projeler</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Proje Adı</th>
                            <th>Proje Açıklama</th>
                            <th>Proje Kısa Açıklama</th>
                            <th>İl</th>
                            <th>İlçe</th>
                            <th>Arsa Boyutu</th>
                            <th>Proje Niteligi</th>
                            <th>Bağımsız Bölüm</th>
                            <th>Seçenekler</th>
                            <th>Sosyal Donantılar</th>
                            <th>Slug</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['projeler'] as $urun): ?>
                            <tr>
                                <td><?=$urun['proje_adi']?></td>
                                <td><?=$urun['proje_aciklama']?></td>
                                <td><?=$urun['proje_kisa_aciklama']?></td>
                                <td><?=$urun['il']?></td>
                                <td><?=$urun['ilce']?></td>
                                <td><?=$urun['arsa']?></td>
                                <td><?=$urun['proje_niteligi']?></td>
                                <td><?=$urun['bagimsiz_bolum']?></td>
                                <td><?=$urun['secenekler']?></td>
                                <td><?=$urun['sosyal_donantilar']?></td>
                                <td><?=$urun['slug']?></td>

                                <td>
                                    <a href="/panel/editproje/<?=$urun['proje_id']; ?>" class="btn btn-xm btn-default"><i class="fa fa-edit"></i>Düzenle</a>
                                    <pre></pre>
                                    <a href="/panel/deleteproje/<?=$urun['proje_id']; ?>" class="btn btn-xm btn-danger"><i class="fa fa-times"></i>Sil</a>
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

