<?php


class projeModel extends Model{

    public function getProjeDetailModel($id){
        $this->db->where("proje_id",$id);
        return $this->db->getOne("projeler");
    }

    public function getProjeImageModel($id){
        $this->db->where("proje_id",$id);
        return $this->db->get("proje_resim");
    }
}