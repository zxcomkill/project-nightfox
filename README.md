# Requirement

1. apache2 or httpd
2. mariadb-server
3. php7.4+
4. net-tools

<b>Extension php for centos 7</b>
<br>
php-mysql php-cli php-pdo

# Installation for Ubuntu

1. sudo apt install -y apache2 mariadb-server php libapache2-mod-php php-{mysql,pdo,cli} git
2. sudo systemctl enable apache2 / mariadb
3. sudo ufw allow http / https / openssh
4. sudo ufw enable
5. sudo mysql_secure_installation
6. sudo mysql -u root -p
 -> CREATE DATABASE nightfox CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
 -> USE nightfox;
 -> CREATE TABLE `nightfox`.`users` (`user_id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `role` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = 
    InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;
 -> exit;
7. systemctl restart apache2
8. --> http://domain_or_ip
