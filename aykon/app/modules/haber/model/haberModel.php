<?php

class haberModel extends Model {

    public function getHaberDetailModel($id){
        $this->db->where("haber_id",$id);
        return $this->db->getOne("haberler");
    }

    public function getHaberImageModel($id){
        $this->db->where("haber_id",$id);
        return $this->db->get("haber_resim");
    }

}