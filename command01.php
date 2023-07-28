ssh-keygen -t rsa -b 4096 -C "sujonahmed424@gmail.com"
cat /root/.ssh/id_rsa.pub
ssh -T git@github.com

sudo apt-get update
sudo apt-cache search php
sudo add-apt-repository ppa:ondrej/php
sudo apt-add-repository ppa:nilarimogard/webupd8


sudo launchpad-getkeys

sudo apt-get install -y php8.1-cli php8.1-fpm php8.0-mbstring php8.1-mysql php8.1-curl php8.1-mcrypt
sudo add-apt-repository ppa:ondrej/php && sudo apt-get update && sudo apt -y install php8.1 && sudo apt-get install -y
php8.1-cli php8.1-json php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml
php8.1-bcmath

sudo apt-get install mysql-server
sudo apt-get install nginx
sudo apt-get install git
sudo apt-get install zip unzip

curl -sS https://getComposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

sudo apt-get install php8.1-curl




================================================================
# sudo apt-get update
# sudo apt-get install nginx
# sudo apt install software-properties-common apt-transport-https -y
# sudo add-apt-repository ppa:ondrej/php && sudo apt-get update && sudo apt -y install php8.1 && sudo apt-get install -y php8.1-cli php8.1-json php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath
# systemctl status nginx


=== cd var/ww/html===
# rm -rf index.html

# ssh-keygen -t rsa -b 4096 -C "sujonahmed424@gmail.com"
# cat /root/.ssh/id_rsa.pub
# ssh -T git@github.com
# git clone 


****** Composer install ******
# curl -sS https://getComposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
# composer -version
*search google if face any error on composer install (remove server requirments)*
# composer install --ignore-platform-reqs


***** Install Mysql *****
# sudo apt update
# sudo apt install mysql-server
# sudo mysql
# ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'HugeIcon@#2023';
# sudo mysql -u root -p
# CREATE DATABASE db_name


sudo service nginx restart
sudo service nginx reload


sudo nginx -t
systemctl status nginx

======== sudo /etc/nginx/sites-available/default =====
server {
    listen 80;
    server_name 64.227.8.60;
    root /var/www/html/hugeicon/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    index index.html index.htm index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}


502 error
apt install php8.1-fpm

========== file permission =======

chown -R www-data:www-data /var/www/html/projectName/storage/
chown -R www-data:www-data /var/www/html/projectName/bootstrap/



========== ssl install ==================
sudo apt install certbot python3-certbot-nginx
sudo nginx -t
sudo systemctl reload nginx
sudo ufw status
sudo ufw allow 'Nginx Full'
sudo ufw allow 'OpenSSH'
sudo certbot --nginx -d takmel.com -d www.takmel.com



https://developers.google.com/speed/public-dns/cache
https://1.1.1.1/purge-cache/




#Sub domain Create
# Git clone
# env update
# cp default crm.educationat.org.conf
# server_name example.example.com www.example.example.org;
# default page configaration
# nginx -t
# ln -s /etc/nginx/sites-avaialble/crm.educationat.org.conf /etc/nginx/sites-enabled/
# systemctl restart nginx


composer --version
composer self-update --1
composer install


Seed Problem
sudo apt-get install php8.1-mysql
sudo apt install php8.1-mbstring
sudo apt-get install php8.1-xml



