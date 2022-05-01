<?php

class haberController extends Controller{

    public function indexAction(){
        $data = array();
        $this->RenderLayout("main","haber ","index",$data);
    }

    public function detailAction($id){
        $data = array();
        $haberModel = new haberModel();
        $data['haber'] = $haberModel->getHaberDetailModel($id);
        $data['image'] = $haberModel->getHaberImageModel($id);

        $this->RenderLayout("main","haber","detail",$data);
    }

}