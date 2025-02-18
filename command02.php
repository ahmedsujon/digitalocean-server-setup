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
root@takmel:~# ufw status
Status: inactive
root@takmel:~# cd /etc/nginx/sites-available/
root@takmel:/etc/nginx/sites-available# sudo nano default 
root@takmel:/etc/nginx/sites-available# cd
root@takmel:~# sudo service nginx restart
root@takmel:~# sudo service nginx reload
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
