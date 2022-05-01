<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-solid">
                        <div class="card-body">
                            <form action="/panel/updatekentsel/<?=$data['kentsel']['id']?>" method="POST" class="form-horizontal form-label-left" novalidate>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Kentsel Dönüşüm Süreci</label>
                                    <textarea class="form-control"  id="editor" name="kentsel_aciklama" rows="20"><?=$message = $data['kentsel']['kentsel_aciklama']?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Riskli Yapı</label>
                                    <textarea class="form-control" id="editor" name="riskli_yapi" rows="20"><?=$message = $data['kentsel']['riskli_yapi']?></textarea>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class=" col-md-offset-3">
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