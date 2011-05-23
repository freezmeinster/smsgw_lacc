<?php
class Sms_kontak extends CI_Model {
    
    function save($id_kontak,$id_sms,$id_kriteria){
    
        $q = $this->db->get_where('sms_kontak',array('id_sms' => $id_sms));
        if ($q->num_rows() > 0){
            $data = array(
                'id_kriteria' => $id_kriteria,
            );
            
            $this->db->update('sms_kontak',$data);
        } else {
        $data = array(
                'id_kriteria' => $id_kriteria,
                'id_sms' => $id_sms,
                'id_kontak' => $id_kontak
            );
            
            $this->db->insert('sms_kontak',$data);
       }
    }

}
?>