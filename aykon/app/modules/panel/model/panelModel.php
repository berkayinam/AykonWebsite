<?php


class panelModel extends Model{

    public function getLoginModel(){
        $this->db->where("mail", $_POST['mail']);
        $this->db->where("password", $_POST['password']);
        $kullanici = $this->db->getOne('admin');

        if (isset($kullanici['admin_id'])) {
            $_SESSION['admin'] = $kullanici;
            return "ok";
        }
        return "kullanıcı yok";
    }

    function sef($text){
        $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
        $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
        $text = strtolower(str_replace($find, $replace, $text));
        $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
        $text = trim(preg_replace('/\s+/', ' ', $text));
        $text = str_replace(' ', '-', $text);
        return $text;
    }

    public function getKurumsalModel(){
        return $this->db->get("kurumsal");
    }

    public function getKurumsalOneModel($id){
        $this->db->where("id",$id);
        return $this->db->getOne("kurumsal");
    }

    public function updateKurumsalModel($id){
        $update = array();
        $update['misyon_1']     = $_POST['misyon_1'];
        $update['misyon_2']     = $_POST['misyon_2'];
        $update['misyon_3']     = $_POST['misyon_3'];
        $update['vizyon']       = $_POST['vizyon'];
        $update['hakkimizda']   = $_POST['hakkimizda'];

        $this->db->where("id",$id);
        $this->db->update("kurumsal",$update);
    }

    public function getIletisimModel(){
        return $this->db->get("iletisim");
    }

    public function getIletisimOneModel($id){
        $this->db->where("id",$id);
        return $this->db->getOne("iletisim");
    }

    public function updateIletisimModel($id){
        $update = array();
        $update['telefon']      = $_POST['telefon'];
        $update['adres']        = $_POST['adres'];
        $update['mail']         = $_POST['mail'];
        $update['facebook']     = $_POST['facebook'];
        $update['twitter']      = $_POST['twitter'];
        $update['instagram']    = $_POST['instagram'];
        $update['linkedin']     = $_POST['linkedin'];
        $update['whatsapp']     = $_POST['whatsapp'];

        $this->db->where("id",$id);
        $this->db->update("iletisim",$update);
    }

    public function getKentselModel(){
        return $this->db->get("kentsel_donusum");
    }

    public function getKentselOneModel($id){
        $this->db->where("id",$id);
        return $this->db->getOne("kentsel_donusum");
    }

    public function updateKentselModel($id){
        $update = array();
        $update['kentsel_aciklama'] = $_POST['kentsel_aciklama'];

        $this->db->where("id",$id);
        $this->db->update("kentsel_donusum",$update);
    }

    public function getHaberlerModel(){
        return $this->db->get("haberler");
    }

    public function addHaberlerModel(){
        $insert = array();
        $insert['haber_adi']            = $_POST['haber_adi'];
        $insert['haber_aciklama']       = $_POST['haber_aciklama'];
        $insert['haber_kisa_aciklama']  = $_POST['haber_kisa_aciklama'];
        $insert['haber_tarih']          = date("Y-m-d H:i:s");
        $insert['yapi']                = $_POST['yapi'];
        $insert['kentsel']              = $_POST['kentsel'];
        $insert['basin']           = $_POST['basin'];

        $this->db->insert("haberler",$insert);

        $lastID = $this->db->getInsertId();

        foreach ($_FILES['haber_resim']['tmp_name'] as $key => $val){
            $ext   = pathinfo($_FILES['haber_resim']['name'][$key], PATHINFO_EXTENSION);
            $resim = md5(time().$key).".".$ext;

            $insert = array();
            $insert['haber_id']  = $lastID;
            $insert['resim_adi'] = $resim;

            $this->db->insert("haber_resim",$insert);

            move_uploaded_file($_FILES['haber_resim']['tmp_name'][$key],"/home/dvyaykon/public_html/web/assets/img/news/".$resim);
            //D:/XAMPP/htdocs/aykon/web
        }

    }

    public function getHaberlerOneModel($id){
        $this->db->where("haber_id",$id);
        return $this->db->getOne("haberler");
    }

    public function updateHaberlerModel($id){
        $update = array();
        $update['haber_adi']            = $_POST['haber_adi'];
        $update['haber_aciklama']       = $_POST['haber_aciklama'];
        $update['haber_kisa_aciklama']  = $_POST['haber_kisa_aciklama'];
        $update['yapi']               = $_POST['yapi'];
        $update['kentsel']               = $_POST['kentsel'];
        $update['basin']               = $_POST['basin'];

        $this->db->where("haber_id",$id);
        $this->db->update("haberler",$update);
    }

    public function deleteHaberlerModel($id){
        $this->db->where("haber_id", $id);
        return $this->db->delete("haberler");
    }

    public function getHaberlerImageModel($id){
        $this->db->where("haber_id",$id);
        return $this->db->get("haber_resim");
    }

    public function addHaberlerImageModel($id){

        foreach ($_FILES['haber_resim']['tmp_name'] as $key => $val){
            $ext   = pathinfo($_FILES['haber_resim']['name'][$key], PATHINFO_EXTENSION);
            $resim = md5(time().$key).".".$ext;

            $insert = array();
            $insert['haber_id']   = $id;
            $insert['resim_adi'] = $resim;

            $this->db->insert("haber_resim",$insert);

            move_uploaded_file($_FILES['haber_resim']['tmp_name'][$key],"/home/dvyaykon/public_html/web/assets/img/news/".$resim);
            ///home/u9176804/bahadirtilki.site/web
        }
    }

    public function getProjelerModel(){
        return $this->db->get("projeler");
    }

    public function addProjelerModel(){
        $insert = array();
        $insert['proje_adi']            = $_POST['proje_adi'];
        $insert['proje_aciklama']       = $_POST['proje_aciklama'];
        $insert['proje_kisa_aciklama']  = $_POST['proje_kisa_aciklama'];
        $insert['il']                   = $_POST['il'];
        $insert['ilce']                 = $_POST['ilce'];
        $insert['arsa']                 = $_POST['arsa'];
        $insert['proje_niteligi']       = $_POST['proje_niteligi'];
        $insert['bagimsiz_bolum']       = $_POST['bagimsiz_bolum'];
        $insert['secenekler']           = $_POST['secenekler'];
        $insert['sosyal_donantilar']    = $_POST['sosyal_donantilar'];
        $insert['vitrin']               = $_POST['vitrin'];
        $insert['devam']                = $_POST['devam'];
        $insert['gelecek']              = $_POST['gelecek'];
        $insert['tamamlanan']           = $_POST['tamamlanan'];
        $insert['kentsel']              = $_POST['kentsel'];
        $insert['slug']                 = $_POST['slug'];

        $this->db->insert("projeler",$insert);

        $lastID = $this->db->getInsertId();

        foreach ($_FILES['proje_resim']['tmp_name'] as $key => $val){
            $ext   = pathinfo($_FILES['proje_resim']['name'][$key], PATHINFO_EXTENSION);
            $resim = md5(time().$key).".".$ext;

            $insert = array();
            $insert['proje_id']  = $lastID;
            $insert['resim_adi'] = $resim;

            $this->db->insert("proje_resim",$insert);

            move_uploaded_file($_FILES['proje_resim']['tmp_name'][$key],"/home/dvyaykon/public_html/web/assets/img/project/".$resim);
            //D:/XAMPP/htdocs/aykon/web
        }

    }

    public function getProjelerOneModel($id){
        $this->db->where("proje_id",$id);
        return $this->db->getOne("projeler");
    }

    public function updateProjelerModel($id){
        $update = array();
        $update['proje_adi']            = $_POST['proje_adi'];
        $update['proje_aciklama']       = $_POST['proje_aciklama'];
        $update['proje_kisa_aciklama']  = $_POST['proje_kisa_aciklama'];
        $update['il']               = $_POST['il'];
        $update['ilce']               = $_POST['ilce'];
        $update['arsa']               = $_POST['arsa'];
        $update['proje_niteligi']               = $_POST['proje_niteligi'];
        $update['bagimsiz_bolum']               = $_POST['bagimsiz_bolum'];
        $update['secenekler']               = $_POST['secenekler'];
        $update['sosyal_donantilar']               = $_POST['sosyal_donantilar'];
        $update['vitrin']               = $_POST['vitrin'];
        $update['devam']               = $_POST['devam'];
        $update['gelecek']               = $_POST['gelecek'];
        $update['tamamlanan']               = $_POST['tamamlanan'];
        $update['kentsel']               = $_POST['kentsel'];
        $update['slug']               = $_POST['slug'];

        $this->db->where("proje_id",$id);
        $this->db->update("projeler",$update);
    }

    public function deleteProjelerModel($id){
        $this->db->where("proje_id", $id);
        return $this->db->delete("projeler");
    }

    public function getProjelerImageModel($id){
        $this->db->where("proje_id",$id);
        return $this->db->get("proje_resim");
    }

    public function addProjelerImageModel($id){

        foreach ($_FILES['proje_resim']['tmp_name'] as $key => $val){
            $ext   = pathinfo($_FILES['proje_resim']['name'][$key], PATHINFO_EXTENSION);
            $resim = md5(time().$key).".".$ext;

            $insert = array();
            $insert['proje_id']   = $id;
            $insert['resim_adi'] = $resim;

            $this->db->insert("proje_resim",$insert);

            move_uploaded_file($_FILES['proje_resim']['tmp_name'][$key],"/home/dvyaykon/public_html/web/assets/img/project/".$resim);
        }
    }
}