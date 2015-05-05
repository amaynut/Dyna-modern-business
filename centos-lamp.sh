#!/bin/bash

#update CentOs
yum update -y --exclude=kernel

# install some utilities
yum install -y nano git unzip screen

# install apache ----------------------------------------
yum install -y httpd httpd-devel httpd-tools
chkconfig --add httpd
chkconfig httpd on
service httpd stop

rm -rf /var/www/html
ln -s /vagrant /var/www/html

service httpd start

# install php
yum install -y php php-cli php-common php-devel php-mysql

# install mysql
yum install -y mysql mysql-server mysql-devel
chkconfig --add mysqld
chkconfig mysqld on

service mysqld start

mysql -u root -e "SHOW DATABASES";

# Download Started Content from github
cd /vagrant
sudo -u vagrant git clone https://github.com/laravel/laravel.git

service httpd restart
