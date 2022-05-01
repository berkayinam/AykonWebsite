<?php

class defaultModel extends Model {

    public function getKurumsalOneModel (){
        return $this->db->getOne("kurumsal");
    }

    public function getIletisimOneModel(){
        return $this->db->getOne("iletisim");
    }

    public function getProjeDevamModel(){
        $this->db->groupBy("projeler.proje_id");
        $this->db->where("devam", 1);
        $this->db->join("proje_resim","proje_resim.proje_id = projeler.proje_id");
        return $this->db->get("projeler");
    }

    public function getProjeGelecekModel(){
        $this->db->groupBy("projeler.proje_id");
        $this->db->where("gelecek", 1);
        $this->db->join("proje_resim","proje_resim.proje_id = projeler.proje_id");
        return $this->db->get("projeler");
    }

    public function getProjeTamamModel(){
        $this->db->groupBy("projeler.proje_id");
        $this->db->where("tamamlanan", 1);
        $this->db->join("proje_resim","proje_resim.proje_id = projeler.proje_id");
        return $this->db->get("projeler");
    }

    public function getProjeKentselModel(){
        $this->db->groupBy("projeler.proje_id");
        $this->db->where("kentsel", 1);
        $this->db->join("proje_resim","proje_resim.proje_id = projeler.proje_id");
        return $this->db->get("projeler");
    }

    public function getProjelerModel(){
        $this->db->groupBy("projeler.proje_id");
        $this->db->where("vitrin", 1);
        $this->db->join("proje_resim","proje_resim.proje_id = projeler.proje_id");
        return $this->db->get("projeler");
    }

    public function getKentselOneModel (){
        return $this->db->getOne("kentsel_donusum");
    }

    public function getYapiModel(){
        $this->db->groupBy("haberler.haber_id");
        $this->db->where("yapi", 1);
        $this->db->join("haber_resim","haber_resim.haber_id = haberler.haber_id");
        return $this->db->get("haberler");
    }

    public function getKentselModel(){
        $this->db->groupBy("haberler.haber_id");
        $this->db->where("kentsel", 1);
        $this->db->join("haber_resim","haber_resim.haber_id = haberler.haber_id");
        return $this->db->get("haberler");
    }

    public function getBasinModel(){
        $this->db->groupBy("haberler.haber_id");
        $this->db->where("basin", 1);
        $this->db->join("haber_resim","haber_resim.haber_id = haberler.haber_id");
        return $this->db->get("haberler");
    }


}