# Requirement

1. Apache2 or httpd
2. MariaDB
3. php7.4+

<b>Extension for php</b>
<br>
php-mysql php-cli php-pdo

# Installation

<b>Ubuntu</br>
1. sudo apt install -y apache2 mariadb-server php libapache2-mod-php php-{mysql,pdo,cli} git
2. sudo systemctl enable apache2 / mariadb
3. sudo ufw allow http / https / openssh
4. sudo ufw enable
5. sudo mysql_secure_installation
6. sudo mysql -u root -p
 -> CREATE DATABASE nightfox CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
 -> exit;
7. sudo -i
8. mysql -uroot -pnightfox < /var/www/html/sql/.sql>
9. systemctl restart apache2
10. --> http://domain_or_ip
