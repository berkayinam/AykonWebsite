<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-solid">
                        <div class="card-body">
                            <form action="/panel/updateproje/<?=$data['proje']['proje_id']; ?>" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <div class="row">
                                    <?php $i=1; foreach ($data['resim'] as $resim): ?>
                                        <?php if ($i==1):?>
                                            <div class="col-md-2">
                                                <img class="col-md-12 mb-3 img-fluid" src="/assets/img/project/<?=$resim['resim_adi']?>">
                                            </div>
                                        <?php else:?>
                                            <div class="col-md-1">
                                                <img class="col-md-12 mb-3 img-fluid" src="/assets/img/project/<?=$resim['resim_adi']?>">
                                            </div>
                                        <?php endif;?>
                                        <?php $i++; endforeach; ?>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_adi">Proje Adı</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" value="<?=$data['proje']['proje_adi']; ?>" name="proje_adi" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_aciklama">Proje Açıklama</label>
                                    <div class="col-xs-12">
                                        <textarea rows="6" class="form-control  col-xs-12" name="proje_aciklama"><?=$data['proje']['proje_aciklama']; ?></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_kisa_aciklama">Proje Kısa Açıklama</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" value="<?=$data['proje']['proje_kisa_aciklama']; ?>" name="proje_kisa_aciklama" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="il">İl</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="il" value="<?=$data['proje']['il']; ?>" placeholder="Buraya İl Adını Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ilce">İlçe Adı</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="ilce" value="<?=$data['proje']['ilce']; ?>" placeholder="Buraya İlçe Adını Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="arsa">Arsa Boyutu</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="arsa" value="<?=$data['proje']['arsa']; ?>" placeholder="Buraya Arsa Boyutunu Giriniz" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_niteligi">Proje Niteligi</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="proje_niteligi" value="<?=$data['proje']['proje_niteligi']; ?>" placeholder="Buraya Proje Niteligi Giriniz (Ticari + Konut)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bagimsiz_bolum">Bağımsız Bölüm</label>
                                    <div class="col-xs-12">
                                        <input class="form-control  col-xs-12" name="bagimsiz_bolum" value="<?=$data['proje']['bagimsiz_bolum']; ?>" placeholder="Buraya Bağımsız Bölüm Giriniz (.. Dükkan - .. Daire)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="secenekler">Seçenekler</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="secenekler" value="<?=$data['proje']['secenekler']; ?>" placeholder="Buraya Seçenekleri Giriniz (2+1 - 3+1)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sosyal_donantilar">Sosyal Donantılar</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="sosyal_donantilar" value="<?=$data['proje']['sosyal_donantilar']; ?>" placeholder="Buraya Sosyal Donantılar Giriniz (Kapalı Otopark - Çocuk Parkı)" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hangi Vitrin</label><br>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if ($data['proje']['vitrin'] == 1){echo 'checked';}else{echo '';} ?> type="checkbox" name="vitrin" id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Vitrin</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if ($data['proje']['devam'] == 1){echo 'checked';}else{echo '';} ?> type="checkbox" name="devam" id="inlineCheckbox2" value="1">
                                        <label class="form-check-label" for="inlineCheckbox2">Devam Eden Projeler</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if ($data['proje']['gelecek'] == 1){echo 'checked';}else{echo '';} ?> type="checkbox" name="gelecek" id="inlineCheckbox3" value="1">
                                        <label class="form-check-label" for="inlineCheckbox3">Gelecek Projeler</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if ($data['proje']['tamamlanan'] == 1){echo 'checked';}else{echo '';} ?>  type="checkbox" name="tamamlanan" id="inlineCheckbox4" value="1">
                                        <label class="form-check-label" for="inlineCheckbox5">Tamamlanan Projeler</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if ($data['proje']['kentsel'] == 1){echo 'checked';}else{echo '';} ?> type="checkbox" name="kentsel" id="inlineCheckbox5" value="1">
                                        <label class="form-check-label" for="inlineCheckbox5">Kentsel Dönüşüm Projeler</label>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success form-control"><b>Kaydet</b></button>
                                    </div>
                                </div>
                            </form>

                            <form action="/panel/addprojeimage/<?=$data['proje']['proje_id']; ?>" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" multiple>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proje_resim">Ürün Resim</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="proje_resim[]" multiple type="file">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success form-control"><b>Yeni Resim Ekle</b></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>