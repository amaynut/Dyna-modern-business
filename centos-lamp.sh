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

# install some php extensions
# mcrypt
#sudo wget http://dl.fedoraproject.org/pub/epel/7/x86_64/e/epel-release-7-5.noarch.rpm
#sudo rpm -ivh epel-release-7-5.noarch.rpm
#sudo yum install -y --enablerepo="epel" php-mcrypt
# mbstring
sudo yum -y install php-mbstring
sudo echo "extension=php_mbstring.so" >> /etc/php.ini
# mcrypt
sudo yum -y install php-mcrypt
# ext-dom
sudo yum -y install php-xml

# Download Started Content from github
cd /vagrant
sudo -u vagrant git clone https://github.com/laravel/laravel.git

# install composer
sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# run composer install in Laravel project
cd /vagrant/laravel
composer install

service httpd restart
