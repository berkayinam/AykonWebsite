<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-solid">
                        <div class="card-body">
                            <form action="/panel/updatehaberler/<?=$data['haber']['haber_id']; ?>" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <div class="row">
                                    <?php $i=1; foreach ($data['resim'] as $resim): ?>
                                        <?php if ($i==1):?>
                                            <div class="col-md-2">
                                                <img class="col-md-12 mb-3 img-fluid" src="/assets/img/news/<?=$resim['resim_adi']?>">
                                            </div>
                                        <?php else:?>
                                            <div class="col-md-1">
                                                <img class="col-md-12 mb-3 img-fluid" src="/assets/img/news/<?=$resim['resim_adi']?>">
                                            </div>
                                        <?php endif;?>
                                        <?php $i++; endforeach; ?>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="haber_adi">Haber Adı</label>
                                    <div class="col-md-12 col-sm-12">
                                        <input class="form-control col-xs-12" value="<?=$data['haber']['haber_adi']; ?>" name="haber_adi" type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="haber_aciklama">Haber Açıklama</label>
                                    <div class="col-xs-12">
                                        <textarea rows="8" class="form-control col-xs-12" id="editor" name="haber_aciklama"><?=$data['haber']['haber_aciklama']; ?></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="haber_kisa_aciklama">Haber Kısa Açıklama</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" value="<?=$data['haber']['haber_kisa_aciklama']; ?>" name="haber_kisa_aciklama"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hangi Vitrin</label><br>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if ($data['haber']['yapi'] == 1){echo 'checked';}else{echo '';} ?> type="checkbox" name="yapi" id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yapı Sektörü</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if ($data['haber']['kentsel'] == 1){echo 'checked';}else{echo '';} ?> type="checkbox" name="kentsel" id="inlineCheckbox2" value="1">
                                        <label class="form-check-label" for="inlineCheckbox2">Kentsel Dönüşüm</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" <?php if ($data['haber']['basin'] == 1){echo 'checked';}else{echo '';} ?> type="checkbox" name="basin" id="inlineCheckbox3" value="1">
                                        <label class="form-check-label" for="inlineCheckbox3">Basında Biz</label>
                                    </div>

                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-12 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success form-control"><b>Kaydet</b></button>
                                    </div>
                                </div>
                            </form>

                            <form action="/panel/addhaberlerimage/<?=$data['haber']['haber_id']; ?>" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data" multiple>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="haber_resim">Ürün Resim</label>
                                    <div class="col-xs-12">
                                        <input class="form-control col-xs-12" name="haber_resim[]" multiple type="file">
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