--- 
customlog: 
  - 
    format: combined
    target: /usr/local/apache/domlogs/vaishnavsamiti.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /usr/local/apache/domlogs/vaishnavsamiti.com-bytes_log
documentroot: /home/vaishnav/public_html
group: vaishnav
hascgi: 1
homedir: /home/vaishnav
ifmoduleconcurrentphpc: {}

ifmodulemodsuphpc: 
  group: vaishnav
ip: 111.118.180.37
owner: rahulber
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/vaishnav/public_html/cgi-bin
    url: /cgi-bin/
  - 
    path: /home/vaishnav/public_html/cgi-bin/
    url: /cgi-bin/
serveradmin: webmaster@vaishnavsamiti.com
serveralias: www.vaishnavsamiti.com
servername: vaishnavsamiti.com
usecanonicalname: 'Off'
user: vaishnav
userdirprotect: ''
