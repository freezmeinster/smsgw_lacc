import os
#sms = open('sms.txt','r').read()
sms = os.popen('gammu --getallsms').read()
h = sms.split('\n\n')
s_pesan = []

total_sms = range(1,h.__len__(),2).__len__() - 1

print "total sms adalah "
print total_sms

for a in range(0,total_sms*2,2):
    head = h[a].split('\n')
    telp = head[5].split(':')
    no_telp = telp[1].replace("\"",'').replace('+62','0').strip()
    pesan = h[a+1].strip()
    
    s_pesan.append({'pengirim': no_telp , 'pesan': pesan})
    

print s_pesan
    