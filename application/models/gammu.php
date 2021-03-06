<?php
class Gammu extends CI_Model {

    function sms_to_db($jenis,$pesan,$no_kontak,$id_kriteria,$id_kontak=NULL)
    {
        if ($jenis == 'outbox')
        {
            $data = array(
                'id_kontak' => $id_kontak,
                'no_kontak' => $no_kontak,
                'isi_sms' => $pesan,
                'id_kriteria' => $id_kriteria
            );
           $this->db->insert('sms_outbox',$data);
        }
    }
    
    function send_one_sms($id_kontak,$number,$message,$id_kriteria)
    {     
         
         if (strlen($message)>160)
         {
             $array_of_message = strsplt($message,160);
             foreach($array_of_message as $one_mess)
             {
                echo  $this->gammu->sms_to_db('outbox',$one_mess,$number,$id_kriteria,$id_kontak);
                
             }
         } 
         else
         { 
            echo  $this->gammu->sms_to_db('outbox',$message,$number,$id_kriteria,$id_kontak);
         }

    }
}
?>