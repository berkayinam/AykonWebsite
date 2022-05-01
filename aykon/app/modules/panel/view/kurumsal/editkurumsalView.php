<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="card card-solid">
                    <div class="card-body">
                        <form action="/panel/updatekurumsal/<?=$data['kurumsal']['id']?>" method="POST" class="form-horizontal form-label-left" novalidate>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Misyon 1</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="misyon_1" rows="2"><?=$message = $data['kurumsal']['misyon_1']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Misyon 2</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="misyon_2" rows="1"><?=$message = $data['kurumsal']['misyon_2']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Misyon 2</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="misyon_2" rows="1"><?=$message = $data['kurumsal']['misyon_2']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Misyon 3</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="misyon_3" rows="2"><?=$message = $data['kurumsal']['misyon_3']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Vizyon</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="vizyon" rows="1"><?=$message = $data['kurumsal']['vizyon']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Hakkımızda</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="hakkimizda" rows="6"><?=$message = $data['kurumsal']['hakkimizda']?></textarea>
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