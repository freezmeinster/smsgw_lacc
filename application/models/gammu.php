<?php
class Gammu extends CI_Model {

    function sms_to_db($jenis,$pesan,$id_kriteria,$id_kontak)
    {
        if ($jenis == 'outbox')
        {
            $data = array(
                'id_kontak' => $id_kontak,
                'isi_sms' => $pesan,
                'id_kriteria' => $id_kriteria
            );
            $this->db->insert('sms_outbox',$data);
        }
    }
    
    function send_one_sms($id_kontak,$number,$message,$id_kriteria)
    {
         function send_message($number,$mess)
         {
             shell_exec("sudo gammu sendsms TEXT $number -text \"$mess\" > /dev/null 2>/dev/null &");
         }
         
         
         if (strlen($message)>160)
         {
             $array_of_message = strsplt($message,160);
             foreach($array_of_message as $one_mess)
             {
                 send_message($number,$one_mess);
                 $this->gammu->sms_to_db('outbox',$one_mess,$id_kriteria,$id_kontak);
             }
         } 
         else
         { 
             send_message($number,$message);
             $this->gammu->sms_to_db('outbox',$message,$id_kriteria,$id_kontak);
         }

    }
}
?>