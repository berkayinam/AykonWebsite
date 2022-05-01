<?php


class panelController extends Controller{

    public function indexAction(){
        $data = array();
        $this->RenderLayout("panel","panel","index",$data);
    }

    public function loginAction(){
        $data = array();
        if (isset($_POST['mail']) && isset($_POST['password'])) {
            $panelModel = new panelModel();
            $result = $panelModel->getLoginModel();

            if ($result == "ok") {
                Controller::redirect("/panel/index");
            }else{
                $data['msg'] = $result;
            }
        }
        $this->RenderLayout("panel","panel","login",$data);
    }

    public function logoutAction(){
        session_destroy();

        Controller::redirect("/panel/login");
    }

    public function KurumsalAction(){
        $panelModel = new panelModel();
        $data = array();
        $data['kurumsal'] = $panelModel->getKurumsalModel();
        $this->RenderLayout("panel","panel","kurumsal/kurumsal",$data);
    }

    public function EditKurumsalAction($id){
        $panelModel = new panelModel();
        $data = array();
        $data['kurumsal'] = $panelModel->getKurumsalOneModel($id);
        $this->RenderLayout("panel","panel","kurumsal/editkurumsal",$data);
    }

    public function UpdateKurumsalAction($id){
        $panelModel = new panelModel();
        $panelModel->updateKurumsalModel($id);

        Controller::redirect("/panel/kurumsal");
    }

    public function IletisimAction(){
        $panelModel = new panelModel();
        $data = array();
        $data['iletisim'] = $panelModel->getIletisimModel();
        $this->RenderLayout("panel","panel","iletisim/iletisim",$data);
    }

    public function EditIletisimAction($id){
        $panelModel = new panelModel();
        $data = array();
        $data['iletisim'] = $panelModel->getIletisimOneModel($id);
        $this->RenderLayout("panel","panel","iletisim/editiletisim",$data);
    }

    public function UpdateIletisimAction($id){
        $panelModel = new panelModel();
        $panelModel->updateIletisimModel($id);

        Controller::redirect("/panel/iletisim");
    }

    public function KentselAction(){
        $panelModel = new panelModel();
        $data = array();
        $data['kentsel'] = $panelModel->getKentselModel();
        $this->RenderLayout("panel","panel","kentsel/kentsel",$data);
    }

    public function EditKentselAction($id){
        $panelModel = new panelModel();
        $data = array();
        $data['kentsel'] = $panelModel->getKentselOneModel($id);
        $this->RenderLayout("panel","panel","kentsel/editkentsel",$data);
    }

    public function UpdateKentselAction($id){
        $panelModel = new panelModel();
        $panelModel->updateKentselModel($id);

        Controller::redirect("/panel/kentsel");
    }

    public function HaberlerAction(){
        $data = array();
        $panelModel = new panelModel();

        $data['haberler'] = $panelModel->getHaberlerModel();
        $this->RenderLayout("panel","panel","haberler/haberler",$data);
    }

    public function AddHaberlerAction(){
        $panelModel = new panelModel();
        $panelModel->addHaberlerModel();

        Controller::redirect("/panel/haberler");
    }

    public function EditHaberlerAction($id){
        $data = array();
        $panelModel = new panelModel();

        $data['haber']       = $panelModel->getHaberlerOneModel($id);
        $data['resim']      = $panelModel->getHaberlerImageModel($id);

        $this->RenderLayout("panel","panel","haberler/edithaberler",$data);
    }

    public function UpdateHaberlerAction($id){
        $panelModel = new panelModel();
        $panelModel->updateHaberlerModel($id);

        Controller::redirect("/panel/edithaberler/".$id);
    }

    public function DeleteHaberlerAction($id){
        $panelModel = new panelModel();
        $panelModel->deleteHaberlerModel($id);

        Controller::redirect("/panel/haberler");
    }

    public function AddHaberlerImageAction($id){
        $panelModel = new panelModel();
        $panelModel->addHaberlerImageModel($id);

        Controller::redirect("/panel/edithaberler/".$id);
    }

    public function ProjelerAction(){
        $data = array();
        $panelModel = new panelModel();

        $data['projeler'] = $panelModel->getProjelerModel();
        $this->RenderLayout("panel","panel","projeler/projeler",$data);
    }

    public function AddProjeAction(){
        $panelModel = new panelModel();
        $panelModel->addProjelerModel();

        Controller::redirect("/panel/projeler");
    }

    public function EditProjeAction($id){
        $data = array();
        $panelModel = new panelModel();

        $data['proje']       = $panelModel->getProjelerOneModel($id);
        $data['resim']      = $panelModel->getProjelerImageModel($id);

        $this->RenderLayout("panel","panel","projeler/editproje",$data);
    }

    public function UpdateProjeAction($id){
        $panelModel = new panelModel();
        $panelModel->updateProjelerModel($id);

        Controller::redirect("/panel/editproje/".$id);
    }

    public function DeleteProjeAction($id){
        $panelModel = new panelModel();
        $panelModel->deleteProjelerModel($id);

        Controller::redirect("/panel/projeler");
    }

    public function AddProjeImageAction($id){
        $panelModel = new panelModel();
        $panelModel->addProjelerImageModel($id);

        Controller::redirect("/panel/editproje/".$id);
    }

}