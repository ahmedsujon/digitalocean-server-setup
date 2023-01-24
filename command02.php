root@takmel:~# sudo service nginx reload
root@takmel:~# sudo nginx -t
nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful
root@takmel:~# systemctl status nginx
● nginx.service - A high performance web server and a reverse proxy server
   Loaded: loaded (/lib/systemd/system/nginx.service; enabled; vendor preset: enabled)
   Active: active (running) since Thu 2023-01-05 18:10:53 UTC; 1min 17s ago
     Docs: man:nginx(8)
  Process: 23892 ExecStop=/sbin/start-stop-daemon --quiet --stop --retry QUIT/5 --pidfile /run/nginx.pid (code=exited, status=0/SUCCESS)
  Process: 23923 ExecReload=/usr/sbin/nginx -g daemon on; master_process on; -s reload (code=exited, status=0/SUCCESS)
  Process: 23904 ExecStart=/usr/sbin/nginx -g daemon on; master_process on; (code=exited, status=0/SUCCESS)
  Process: 23893 ExecStartPre=/usr/sbin/nginx -t -q -g daemon on; master_process on; (code=exited, status=0/SUCCESS)
 Main PID: 23907 (nginx)
    Tasks: 2 (limit: 1151)
   CGroup: /system.slice/nginx.service
           ├─23907 nginx: master process /usr/sbin/nginx -g daemon on; master_process on;
           └─23924 nginx: worker process
root@takmel:~# ufw status
Status: inactive
root@takmel:~# cd /etc/nginx/sites-available/
root@takmel:/etc/nginx/sites-available# sudo nano default 
root@takmel:/etc/nginx/sites-available# cd
root@takmel:~# sudo service nginx restart
root@takmel:~# sudo service nginx reload
root@takmel:~# ps auxf | grep nginx
root     24004  0.0  0.1  14860  1048 pts/0    S+   18:19   0:00          \_ grep --color=auto nginx
root     23970  0.0  0.7 141384  7248 ?        Ss   18:14   0:00 nginx: master process /usr/sbin/nginx -g daemon on; master_process on;
www-data 23988  0.0  0.6 143864  6388 ?        S    18:14   0:00  \_ nginx: worker process
root@takmel:~# ufw status
Status: inactive
root@takmel:~# cd /etc/nginx/sites-available/
root@takmel:/etc/nginx/sites-available# sudo nano default 
root@takmel:/etc/nginx/sites-available# cd
root@takmel:~# sudo service nginx restart
root@takmel:~# sudo service nginx reload
root@takmel:~# php -m
[PHP Modules]
calendar
Core
ctype
curl
date
dom
exif
FFI
fileinfo
filter
ftp
gettext
hash
iconv
json
libxml
mbstring
mysqli
mysqlnd
openssl
pcntl
pcre
PDO
pdo_mysql
Phar
posix
readline
Reflection
session
shmop
SimpleXML
sockets
sodium
SPL
standard
sysvmsg
sysvsem
sysvshm
tokenizer
xml
xmlreader
xmlwriter
xsl
Zend OPcache
zlib

[Zend Modules]
Zend OPcache

root@takmel:~# php -v
PHP 8.1.13 (cli) (built: Nov 26 2022 14:07:18) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.13, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.13, Copyright (c), by Zend Technologies
root@takmel:~# apt install php8.1-fpm
Reading package lists... Done
Building dependency tree       
Reading state information... Done
Suggested packages:
  php-pear
The following NEW packages will be installed:
  php8.1-fpm
0 upgraded, 1 newly installed, 0 to remove and 92 not upgraded.
Need to get 1646 kB of archives.
After this operation, 5514 kB of additional disk space will be used.
Get:1 http://ppa.launchpad.net/ondrej/php/ubuntu bionic/main amd64 php8.1-fpm amd64 8.1.13-1+ubuntu18.04.1+deb.sury.org+1 [1646 kB]
Fetched 1646 kB in 3s (634 kB/s)      
Selecting previously unselected package php8.1-fpm.
(Reading database ... 62276 files and directories currently installed.)
Preparing to unpack .../php8.1-fpm_8.1.13-1+ubuntu18.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.1-fpm (8.1.13-1+ubuntu18.04.1+deb.sury.org+1) ...
Setting up php8.1-fpm (8.1.13-1+ubuntu18.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.1/fpm/php.ini with new version
NOTICE: Not enabling PHP 8.1 FPM by default.
NOTICE: To enable PHP 8.1 FPM in Apache2 do:
NOTICE: a2enmod proxy_fcgi setenvif
NOTICE: a2enconf php8.1-fpm
NOTICE: You are seeing this message because you have apache2 package installed.
Created symlink /etc/systemd/system/multi-user.target.wants/php8.1-fpm.service → /lib/systemd/system/php8.1-fpm.service.
Processing triggers for man-db (2.8.3-2ubuntu0.1) ...
Processing triggers for ureadahead (0.100.0-21) ...
Processing triggers for systemd (237-3ubuntu10.53) ...
Processing triggers for php8.1-fpm (8.1.13-1+ubuntu18.04.1+deb.sury.org+1) ...
NOTICE: Not enabling PHP 8.1 FPM by default.
NOTICE: To enable PHP 8.1 FPM in Apache2 do:
NOTICE: a2enmod proxy_fcgi setenvif
NOTICE: a2enconf php8.1-fpm
NOTICE: You are seeing this message because you have apache2 package installed.
root@takmel:~# chown -R www-data:www-data /var/www/html/project/storage
chown: cannot access '/var/www/html/project/storage': No such file or directory
root@takmel:~# cd /var/www/html/takmel/storage/
root@takmel:/var/www/html/takmel/storage# cd
root@takmel:~# chown -R www-data:www-data /var/www/html/takmel/storage/
root@takmel:~# chown -R www-data:www-data /var/www/html/takmel/bootstrap/
root@takmel:~# cd /var/www/html/takmel/
root@takmel:/var/www/html/takmel# php artisan key:generate

   INFO  Application key set successfully.  

root@takmel:/var/www/html/takmel# ping takmel.com
PING takmel.com (139.59.28.148) 56(84) bytes of data.
64 bytes from takmel (139.59.28.148): icmp_seq=1 ttl=64 time=0.011 ms
64 bytes from takmel (139.59.28.148): icmp_seq=2 ttl=64 time=0.043 ms
64 bytes from takmel (139.59.28.148): icmp_seq=3 ttl=64 time=0.056 ms

--- takmel.com ping statistics ---
735 packets transmitted, 735 received, 0% packet loss, time 751582ms
rtt min/avg/max/mdev = 0.011/0.049/0.460/0.020 ms
root@takmel:/var/www/html/takmel# cd
root@takmel:~# cd /etc/nginx/sites-available/
root@takmel:/etc/nginx/sites-available# sudo nano default 
root@takmel:/etc/nginx/sites-available# 
root@takmel:/etc/nginx/sites-available# sudo nano default 
root@takmel:/etc/nginx/sites-available# sudo nano default 
root@takmel:/etc/nginx/sites-available# nginx -t
nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful
root@takmel:/etc/nginx/sites-available# sudo service nginx restart
root@takmel:/etc/nginx/sites-available# ufw status
Status: inactive
root@takmel:/etc/nginx/sites-available# ufw enable
Command may disrupt existing ssh connections. Proceed with operation (y|n)? y
Firewall is active and enabled on system startup
root@takmel:/etc/nginx/sites-available# ufw allow 'OpenSSH'
Rule added
Rule added (v6)
root@takmel:/etc/nginx/sites-available# sudo ufw allow 'Nginx Full'
Rule added
Rule added (v6)
root@takmel:/etc/nginx/sites-available# ufw status
Status: active

To                         Action      From
--                         ------      ----
OpenSSH                    ALLOW       Anywhere                  
Nginx Full                 ALLOW       Anywhere                  
OpenSSH (v6)               ALLOW       Anywhere (v6)             
Nginx Full (v6)            ALLOW       Anywhere (v6)             

root@takmel:/etc/nginx/sites-available# ufw reload
Firewall reloaded
root@takmel:/etc/nginx/sites-available# sudo apt install certbot python3-certbot-nginx
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following additional packages will be installed:
  libpython-stdlib libpython2.7-minimal libpython2.7-stdlib python python-minimal python-pyicu python2.7 python2.7-minimal python3-acme python3-certbot python3-configargparse python3-future python3-josepy python3-lib2to3
  python3-mock python3-parsedatetime python3-pbr python3-pyparsing python3-requests-toolbelt python3-rfc3339 python3-tz python3-zope.component python3-zope.event python3-zope.hookable
Suggested packages:
  python3-certbot-apache python-certbot-doc python-doc python-tk python2.7-doc binutils binfmt-support python-acme-doc python-certbot-nginx-doc python-future-doc python-mock-doc python-pyparsing-doc
The following NEW packages will be installed:
  certbot libpython-stdlib libpython2.7-minimal libpython2.7-stdlib python python-minimal python-pyicu python2.7 python2.7-minimal python3-acme python3-certbot python3-certbot-nginx python3-configargparse python3-future
  python3-josepy python3-lib2to3 python3-mock python3-parsedatetime python3-pbr python3-pyparsing python3-requests-toolbelt python3-rfc3339 python3-tz python3-zope.component python3-zope.event python3-zope.hookable
0 upgraded, 26 newly installed, 0 to remove and 92 not upgraded.
Need to get 5221 kB of archives.
After this operation, 24.2 MB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://mirrors.digitalocean.com/ubuntu bionic-updates/main amd64 libpython2.7-minimal amd64 2.7.17-1~18.04ubuntu1.10 [336 kB]
Get:2 http://mirrors.digitalocean.com/ubuntu bionic-updates/main amd64 python2.7-minimal amd64 2.7.17-1~18.04ubuntu1.10 [1290 kB]
Get:3 http://mirrors.digitalocean.com/ubuntu bionic/main amd64 python-minimal amd64 2.7.15~rc1-1 [28.1 kB]
Get:4 http://mirrors.digitalocean.com/ubuntu bionic-updates/main amd64 libpython2.7-stdlib amd64 2.7.17-1~18.04ubuntu1.10 [1917 kB]
Get:5 http://mirrors.digitalocean.com/ubuntu bionic-updates/main amd64 python2.7 amd64 2.7.17-1~18.04ubuntu1.10 [248 kB]
Get:6 http://mirrors.digitalocean.com/ubuntu bionic/main amd64 libpython-stdlib amd64 2.7.15~rc1-1 [7620 B]
Get:7 http://mirrors.digitalocean.com/ubuntu bionic/main amd64 python amd64 2.7.15~rc1-1 [140 kB]
Get:8 http://mirrors.digitalocean.com/ubuntu bionic/main amd64 python-pyicu amd64 1.9.8-0ubuntu1 [176 kB]
Get:9 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-josepy all 1.1.0-1 [27.6 kB]
Get:10 http://mirrors.digitalocean.com/ubuntu bionic/main amd64 python3-pbr all 3.1.1-3ubuntu3 [53.8 kB]
Get:11 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-mock all 2.0.0-3 [47.5 kB]
Get:12 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-requests-toolbelt all 0.8.0-1 [35.1 kB]
Get:13 http://mirrors.digitalocean.com/ubuntu bionic/main amd64 python3-tz all 2018.3-2 [25.1 kB]
Get:14 http://mirrors.digitalocean.com/ubuntu bionic/main amd64 python3-rfc3339 all 1.0-4 [6356 B]
Get:15 http://mirrors.digitalocean.com/ubuntu bionic-updates/universe amd64 python3-acme all 0.31.0-2~ubuntu18.04.1 [49.3 kB]
Get:16 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-configargparse all 0.11.0-1 [22.4 kB]
Get:17 http://mirrors.digitalocean.com/ubuntu bionic-updates/main amd64 python3-lib2to3 all 3.6.9-1~18.04 [77.4 kB]
Get:18 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-future all 0.15.2-4ubuntu2 [333 kB]
Get:19 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-parsedatetime all 2.4-2 [31.6 kB]
Get:20 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-zope.hookable amd64 4.0.4-4build4 [9372 B]
Get:21 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-zope.event all 4.2.0-1 [7402 B]
Get:22 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-zope.component all 4.3.0-1 [38.2 kB]
Get:23 http://mirrors.digitalocean.com/ubuntu bionic-updates/universe amd64 python3-certbot all 0.27.0-1~ubuntu18.04.2 [201 kB]
Get:24 http://mirrors.digitalocean.com/ubuntu bionic-updates/universe amd64 certbot all 0.27.0-1~ubuntu18.04.2 [18.1 kB]
Get:25 http://mirrors.digitalocean.com/ubuntu bionic/main amd64 python3-pyparsing all 2.2.0+dfsg1-2 [52.2 kB]
Get:26 http://mirrors.digitalocean.com/ubuntu bionic/universe amd64 python3-certbot-nginx all 0.23.0-1 [43.5 kB]
Fetched 5221 kB in 1s (6418 kB/s)            
Selecting previously unselected package libpython2.7-minimal:amd64.
(Reading database ... 62299 files and directories currently installed.)
Preparing to unpack .../0-libpython2.7-minimal_2.7.17-1~18.04ubuntu1.10_amd64.deb ...
Unpacking libpython2.7-minimal:amd64 (2.7.17-1~18.04ubuntu1.10) ...
Selecting previously unselected package python2.7-minimal.
Preparing to unpack .../1-python2.7-minimal_2.7.17-1~18.04ubuntu1.10_amd64.deb ...
Unpacking python2.7-minimal (2.7.17-1~18.04ubuntu1.10) ...
Selecting previously unselected package python-minimal.
Preparing to unpack .../2-python-minimal_2.7.15~rc1-1_amd64.deb ...
Unpacking python-minimal (2.7.15~rc1-1) ...
Selecting previously unselected package libpython2.7-stdlib:amd64.
Preparing to unpack .../3-libpython2.7-stdlib_2.7.17-1~18.04ubuntu1.10_amd64.deb ...
Unpacking libpython2.7-stdlib:amd64 (2.7.17-1~18.04ubuntu1.10) ...
Selecting previously unselected package python2.7.
Preparing to unpack .../4-python2.7_2.7.17-1~18.04ubuntu1.10_amd64.deb ...
Unpacking python2.7 (2.7.17-1~18.04ubuntu1.10) ...
Selecting previously unselected package libpython-stdlib:amd64.
Preparing to unpack .../5-libpython-stdlib_2.7.15~rc1-1_amd64.deb ...
Unpacking libpython-stdlib:amd64 (2.7.15~rc1-1) ...
Setting up libpython2.7-minimal:amd64 (2.7.17-1~18.04ubuntu1.10) ...
Setting up python2.7-minimal (2.7.17-1~18.04ubuntu1.10) ...
Linking and byte-compiling packages for runtime python2.7...
Setting up python-minimal (2.7.15~rc1-1) ...
Selecting previously unselected package python.
(Reading database ... 63047 files and directories currently installed.)
Preparing to unpack .../00-python_2.7.15~rc1-1_amd64.deb ...
Unpacking python (2.7.15~rc1-1) ...
Selecting previously unselected package python-pyicu.
Preparing to unpack .../01-python-pyicu_1.9.8-0ubuntu1_amd64.deb ...
Unpacking python-pyicu (1.9.8-0ubuntu1) ...
Selecting previously unselected package python3-josepy.
Preparing to unpack .../02-python3-josepy_1.1.0-1_all.deb ...
Unpacking python3-josepy (1.1.0-1) ...
Selecting previously unselected package python3-pbr.
Preparing to unpack .../03-python3-pbr_3.1.1-3ubuntu3_all.deb ...
Unpacking python3-pbr (3.1.1-3ubuntu3) ...
Selecting previously unselected package python3-mock.
Preparing to unpack .../04-python3-mock_2.0.0-3_all.deb ...
Unpacking python3-mock (2.0.0-3) ...
Selecting previously unselected package python3-requests-toolbelt.
Preparing to unpack .../05-python3-requests-toolbelt_0.8.0-1_all.deb ...
Unpacking python3-requests-toolbelt (0.8.0-1) ...
Selecting previously unselected package python3-tz.
Preparing to unpack .../06-python3-tz_2018.3-2_all.deb ...
Unpacking python3-tz (2018.3-2) ...
Selecting previously unselected package python3-rfc3339.
Preparing to unpack .../07-python3-rfc3339_1.0-4_all.deb ...
Unpacking python3-rfc3339 (1.0-4) ...
Selecting previously unselected package python3-acme.
Preparing to unpack .../08-python3-acme_0.31.0-2~ubuntu18.04.1_all.deb ...
Unpacking python3-acme (0.31.0-2~ubuntu18.04.1) ...
Selecting previously unselected package python3-configargparse.
Preparing to unpack .../09-python3-configargparse_0.11.0-1_all.deb ...
Unpacking python3-configargparse (0.11.0-1) ...
Selecting previously unselected package python3-lib2to3.
Preparing to unpack .../10-python3-lib2to3_3.6.9-1~18.04_all.deb ...
Unpacking python3-lib2to3 (3.6.9-1~18.04) ...
Selecting previously unselected package python3-future.
Preparing to unpack .../11-python3-future_0.15.2-4ubuntu2_all.deb ...
Unpacking python3-future (0.15.2-4ubuntu2) ...
Selecting previously unselected package python3-parsedatetime.
Preparing to unpack .../12-python3-parsedatetime_2.4-2_all.deb ...
Unpacking python3-parsedatetime (2.4-2) ...
Selecting previously unselected package python3-zope.hookable.
Preparing to unpack .../13-python3-zope.hookable_4.0.4-4build4_amd64.deb ...
Unpacking python3-zope.hookable (4.0.4-4build4) ...
Selecting previously unselected package python3-zope.event.
Preparing to unpack .../14-python3-zope.event_4.2.0-1_all.deb ...
Unpacking python3-zope.event (4.2.0-1) ...
Selecting previously unselected package python3-zope.component.
Preparing to unpack .../15-python3-zope.component_4.3.0-1_all.deb ...
Unpacking python3-zope.component (4.3.0-1) ...
Selecting previously unselected package python3-certbot.
Preparing to unpack .../16-python3-certbot_0.27.0-1~ubuntu18.04.2_all.deb ...
Unpacking python3-certbot (0.27.0-1~ubuntu18.04.2) ...
Selecting previously unselected package certbot.
Preparing to unpack .../17-certbot_0.27.0-1~ubuntu18.04.2_all.deb ...
Unpacking certbot (0.27.0-1~ubuntu18.04.2) ...
Selecting previously unselected package python3-pyparsing.
Preparing to unpack .../18-python3-pyparsing_2.2.0+dfsg1-2_all.deb ...
Unpacking python3-pyparsing (2.2.0+dfsg1-2) ...
Selecting previously unselected package python3-certbot-nginx.
Preparing to unpack .../19-python3-certbot-nginx_0.23.0-1_all.deb ...
Unpacking python3-certbot-nginx (0.23.0-1) ...
Setting up python3-requests-toolbelt (0.8.0-1) ...
Setting up python3-pbr (3.1.1-3ubuntu3) ...
update-alternatives: using /usr/bin/python3-pbr to provide /usr/bin/pbr (pbr) in auto mode
Setting up python3-mock (2.0.0-3) ...
Setting up python3-zope.event (4.2.0-1) ...
Setting up python3-pyparsing (2.2.0+dfsg1-2) ...
Setting up python3-configargparse (0.11.0-1) ...
Setting up python3-zope.hookable (4.0.4-4build4) ...
Setting up python3-josepy (1.1.0-1) ...
Setting up python3-lib2to3 (3.6.9-1~18.04) ...
Setting up python3-tz (2018.3-2) ...
Setting up libpython2.7-stdlib:amd64 (2.7.17-1~18.04ubuntu1.10) ...
Setting up python3-rfc3339 (1.0-4) ...
Setting up python3-zope.component (4.3.0-1) ...
Setting up python2.7 (2.7.17-1~18.04ubuntu1.10) ...
Setting up libpython-stdlib:amd64 (2.7.15~rc1-1) ...
Setting up python3-future (0.15.2-4ubuntu2) ...
update-alternatives: using /usr/bin/python3-futurize to provide /usr/bin/futurize (futurize) in auto mode
update-alternatives: using /usr/bin/python3-pasteurize to provide /usr/bin/pasteurize (pasteurize) in auto mode
Setting up python (2.7.15~rc1-1) ...
Setting up python-pyicu (1.9.8-0ubuntu1) ...
Setting up python3-acme (0.31.0-2~ubuntu18.04.1) ...
Setting up python3-parsedatetime (2.4-2) ...
Setting up python3-certbot (0.27.0-1~ubuntu18.04.2) ...
Setting up certbot (0.27.0-1~ubuntu18.04.2) ...
Created symlink /etc/systemd/system/timers.target.wants/certbot.timer → /lib/systemd/system/certbot.timer.
Setting up python3-certbot-nginx (0.23.0-1) ...
Processing triggers for mime-support (3.60ubuntu1) ...
Processing triggers for man-db (2.8.3-2ubuntu0.1) ...
root@takmel:/etc/nginx/sites-available# sudo certbot --nginx -d takmel.com -d www.takmel.com
root@takmel:/etc/nginx/sites-available# sudo certbot --nginx -d hugeidea.design -d www.hugeidea.design
Saving debug log to /var/log/letsencrypt/letsencrypt.log
Plugins selected: Authenticator nginx, Installer nginx
Enter email address (used for urgent renewal and security notices) (Enter 'c' to
cancel): sujonahmed424@gmail.com

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Please read the Terms of Service at
https://letsencrypt.org/documents/LE-SA-v1.3-September-21-2022.pdf. You must
agree in order to register with the ACME server at
https://acme-v02.api.letsencrypt.org/directory
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
(A)gree/(C)ancel: A

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Would you be willing to share your email address with the Electronic Frontier
Foundation, a founding partner of the Let's Encrypt project and the non-profit
organization that develops Certbot? We'd like to send you email about our work
encrypting the web, EFF news, campaigns, and ways to support digital freedom.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
(Y)es/(N)o: N
Obtaining a new certificate
Performing the following challenges:
http-01 challenge for takmel.com
http-01 challenge for www.takmel.com
Waiting for verification...
Cleaning up challenges
Failed authorization procedure. www.takmel.com (http-01): urn:ietf:params:acme:error:dns :: DNS problem: NXDOMAIN looking up A for www.takmel.com - check that a DNS record exists for this domain; DNS problem: NXDOMAIN looking up AAAA for www.takmel.com - check that a DNS record exists for this domain

IMPORTANT NOTES:
 - The following errors were reported by the server:

   Domain: www.takmel.com
   Type:   None
   Detail: DNS problem: NXDOMAIN looking up A for www.takmel.com -
   check that a DNS record exists for this domain; DNS problem:
   NXDOMAIN looking up AAAA for www.takmel.com - check that a DNS
   record exists for this domain
 - Your account credentials have been saved in your Certbot
   configuration directory at /etc/letsencrypt. You should make a
   secure backup of this folder now. This configuration directory will
   also contain certificates and private keys obtained by Certbot so
   making regular backups of this folder is ideal.
root@takmel:/etc/nginx/sites-available# sudo certbot --nginx -d takmel.com -d www.takmel.com
Saving debug log to /var/log/letsencrypt/letsencrypt.log
Plugins selected: Authenticator nginx, Installer nginx
Obtaining a new certificate
Performing the following challenges:
http-01 challenge for takmel.com
http-01 challenge for www.takmel.com
Waiting for verification...
Cleaning up challenges
Failed authorization procedure. www.takmel.com (http-01): urn:ietf:params:acme:error:dns :: DNS problem: NXDOMAIN looking up A for www.takmel.com - check that a DNS record exists for this domain; DNS problem: NXDOMAIN looking up AAAA for www.takmel.com - check that a DNS record exists for this domain

IMPORTANT NOTES:
 - The following errors were reported by the server:

   Domain: www.takmel.com
   Type:   None
   Detail: DNS problem: NXDOMAIN looking up A for www.takmel.com -
   check that a DNS record exists for this domain; DNS problem:
   NXDOMAIN looking up AAAA for www.takmel.com - check that a DNS
   record exists for this domain
root@takmel:/etc/nginx/sites-available# ping www.takmel.com
ping: www.takmel.com: Name or service not known
root@takmel:/etc/nginx/sites-available# ping www.takmel.com
ping: www.takmel.com: Name or service not known
root@takmel:/etc/nginx/sites-available# sudo certbot --nginx -d takmel.com -d www.takmel.com
root@takmel:/etc/nginx/sites-available# sudo certbot --nginx -d hugeidea.design -d www.hugeidea.design
Saving debug log to /var/log/letsencrypt/letsencrypt.log
Plugins selected: Authenticator nginx, Installer nginx
Obtaining a new certificate
Performing the following challenges:
http-01 challenge for takmel.com
http-01 challenge for www.takmel.com
Waiting for verification...
Cleaning up challenges
Deploying Certificate to VirtualHost /etc/nginx/sites-enabled/default
Deploying Certificate to VirtualHost /etc/nginx/sites-enabled/default

Please choose whether or not to redirect HTTP traffic to HTTPS, removing HTTP access.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
1: No redirect - Make no further changes to the webserver configuration.
2: Redirect - Make all requests redirect to secure HTTPS access. Choose this for
new sites, or if you're confident your site works on HTTPS. You can undo this
change by editing your web server's configuration.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Select the appropriate number [1-2] then [enter] (press 'c' to cancel): 2
Redirecting all traffic on port 80 to ssl in /etc/nginx/sites-enabled/default
Redirecting all traffic on port 80 to ssl in /etc/nginx/sites-enabled/default

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Congratulations! You have successfully enabled https://takmel.com and
https://www.takmel.com

You should test your configuration at:
https://www.ssllabs.com/ssltest/analyze.html?d=takmel.com
https://www.ssllabs.com/ssltest/analyze.html?d=www.takmel.com
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

IMPORTANT NOTES:
 - Congratulations! Your certificate and chain have been saved at:
   /etc/letsencrypt/live/takmel.com/fullchain.pem
   Your key file has been saved at:
   /etc/letsencrypt/live/takmel.com/privkey.pem
   Your cert will expire on 2023-04-05. To obtain a new or tweaked
   version of this certificate in the future, simply run certbot again
   with the "certonly" option. To non-interactively renew *all* of
   your certificates, run "certbot renew"
 - If you like Certbot, please consider supporting our work by:

   Donating to ISRG / Let's Encrypt:   https://letsencrypt.org/donate
   Donating to EFF:                    https://eff.org/donate-le

root@takmel:/etc/nginx/sites-available# 