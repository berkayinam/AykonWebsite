<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-solid">
                        <div class="card-body">
                            <form action="/panel/updateiletisim/<?=$data['iletisim']['id']?>" method="POST" class="form-horizontal form-label-left" novalidate>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Telefon</label>
                                    <div class="col-xs-12">
                                        <input id="option" class="form-control col-xs-12" name="telefon" value="<?=$data['iletisim']['telefon']?>" required type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Adres</label>
                                    <div class=" col-xs-12">
                                        <input id="option" class="form-control col-xs-12" name="adres" value="<?=$data['iletisim']['adres']?>" required type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Mail</label>
                                    <div class="col-xs-12">
                                        <input id="option" class="form-control  col-xs-12" name="mail" value="<?=$data['iletisim']['mail']?>" required type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Facebook</label>
                                    <div class="col-xs-12">
                                        <input id="option" class="form-control  col-xs-12" name="facebook" value="<?=$data['iletisim']['facebook']?>" required type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Twitter</label>
                                    <div class="col-xs-12">
                                        <input id="option" class="form-control  col-xs-12" name="twitter" value="<?=$data['iletisim']['twitter']?>" required type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Instragram</label>
                                    <div class="col-xs-12">
                                        <input id="option" class="form-control  col-xs-12" name="instagram" value="<?=$data['iletisim']['instagram']?>" required type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Linked-in</label>
                                    <div class="col-xs-12">
                                        <input id="option" class="form-control  col-xs-12" name="linkedin" value="<?=$data['iletisim']['linkedin']?>" required type="text"/>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="option">Whatsapp</label>
                                    <div class="col-xs-12">
                                        <input id="option" class="form-control  col-xs-12" name="whatsapp" value="<?=$data['iletisim']['whatsapp']?>" required type="text"/>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success form-control"><b>Güncelle</b></button>
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