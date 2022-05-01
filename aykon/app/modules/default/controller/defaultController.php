<?php

class defaultController extends Controller{

        public function indexAction()
        {
            $data = array();
            $defaultModel = new defaultModel();
            $data['projeler']   = $defaultModel->getProjelerModel();
            $data['kentsel']   = $defaultModel->getProjeKentselModel();
            $data['kurumsal']   = $defaultModel->getKurumsalOneModel();
            $this->renderLayout("main", "default", "index", $data);
        }

        public function aboutAction(){
            $data               = array();
            $defaultModel       = new defaultModel();
            $data['kurumsal']   = $defaultModel->getKurumsalOneModel();
            $this->renderLayout("main", "default", "about", $data);
        }

        public function contactAction(){
            $data               = array();
            $defaultModel       = new defaultModel();
            $data['iletisim']   = $defaultModel->getIletisimOneModel();
            $this->renderLayout("main", "default", "contact", $data);
        }

        public function devamedenprojelerAction(){
            $data            = array();
            $defaultModel    = new defaultModel();
            $data['proje'] = $defaultModel->getProjeDevamModel();
            $this->renderLayout("main", "default", "devamedenprojeler", $data);
        }

        public function gelecekprojelerAction(){
            $data            = array();
            $defaultModel    = new defaultModel();
            $data['proje'] = $defaultModel->getProjeGelecekModel();
            $this->renderLayout("main", "default", "gelecekprojeler", $data);
        }

        public function tamamlananprojelerAction(){
            $data            = array();
            $defaultModel    = new defaultModel();
            $data['proje'] = $defaultModel->getProjeTamamModel();
            $this->renderLayout("main", "default", "tamamlananprojeler", $data);
        }

        public function kentselprojelerAction(){
            $data            = array();
            $defaultModel    = new defaultModel();
            $data['proje']   = $defaultModel->getProjeKentselModel();
            $this->renderLayout("main", "default", "kentselprojeler", $data);
        }

        public function kentselhakkindaAction(){
            $data            = array();
            $defaultModel    = new defaultModel();
            $data['kentsel']   = $defaultModel->getKentselOneModel();
            $this->renderLayout("main", "default", "kentselhakkinda", $data);
        }

        public function yapisektoruAction(){
        $data            = array();
        $defaultModel    = new defaultModel();
        $data['yapi']   = $defaultModel->getYapiModel();
        $this->renderLayout("main", "default", "yapisektoru", $data);
    }

        public function kentseldonusumAction(){
        $data            = array();
        $defaultModel    = new defaultModel();
        $data['kentsel']   = $defaultModel->getKentselModel();
        $this->renderLayout("main", "default", "kentseldonusum", $data);
    }

        public function basindabizAction(){
        $data            = array();
        $defaultModel    = new defaultModel();
        $data['basin']   = $defaultModel->getBasinModel();
        $this->renderLayout("main", "default", "basindabiz", $data);
    }

        public function kentseldonusumsureciAction(){
        $data            = array();
        $defaultModel    = new defaultModel();
        $data['kentsel']   = $defaultModel->getKentselOneModel();
        $this->renderLayout("main", "default", "kentseldonusumsureci", $data);
    }

        public function riskliyapiAction(){
        $data            = array();
        $defaultModel    = new defaultModel();
        $data['kentsel']   = $defaultModel->getKentselOneModel();
        $this->renderLayout("main", "default", "riskliyapi", $data);
    }

}