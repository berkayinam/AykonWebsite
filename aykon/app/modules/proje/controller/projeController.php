<?php


class projeController extends Controller{

    public function indexAction(){
        $data = array();
        $this->RenderLayout("main","proje ","index",$data);
    }

    public function detailAction($id){
        $data = array();
        $projeModel = new projeModel();
        $data['proje'] = $projeModel->getProjeDetailModel($id);
        $data['image'] = $projeModel->getProjeImageModel($id);

        $this->RenderLayout("main","proje","detail",$data);
    }
}