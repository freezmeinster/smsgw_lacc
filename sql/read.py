import os
import _mysql

db_user_name = 'root';
db_password = '';
db_name = 'sms-gw';

db = _mysql.connect(user=db_user_name,passwd=db_password,db=db_name)

while True :
    sms = os.popen('gammu --getallsms').read()
    h = sms.split('\n\n')
    s_pesan = []

    total_sms = range(1,h.__len__(),2).__len__() - 1

    print "total sms adalah "
    print total_sms

    if total_sms != 0 :
        for a in range(0,total_sms*2,2):
            head = h[a].split('\n')
            telp = head[5].split(':')
            no_telp = telp[1].replace("\"",'').replace('+62','0').strip()
            pesan = h[a+1].strip()
            
            db.query("insert into sms_inbox(no_kontak,isi_sms) values(\""+no_telp+"\",\""+pesan+"\")")

        os.popen('gammu --deleteallsms 1')
  
    else :
        pass
    
    db.query("select * from sms_outbox where status_kirim = 0 ")
    row = db.store_result()
    for sms in row.fetch_row(maxrows=0) :
        os.popen("gammu sendsms TEXT "+sms[2]+" -text \""+sms[3]+"\"")
        db.query("update sms_outbox SET status_kirim = 1  where sms_outbox.id_sms = "+sms[0]+"")
        