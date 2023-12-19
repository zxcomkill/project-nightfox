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
6. sudo mysql -u root -p <br>
 -> CREATE DATABASE nightfox CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci; <br>
 -> USE nightfox; <br>
 -> CREATE TABLE `nightfox`.`users` (`user_id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `role` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = 
    InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci; <br>
 -> exit; <br>
7. systemctl restart apache2
8. --> http://domain_or_ip/

# Installation for Centos 7
1. sudo yum -y install https://rpms.remirepo.net/enterprise/remi-release-7.rpm
2. sudo yum-config-manager --enable remi-php74
3. sudo yum install -y httpd mariadb-server
4. sudo yum install -y php php-cli php-fpm php-mysqlnd php-zip php-devel php-gd php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json
5. sudo yum --enablerepo=remi-php74 install php-xml php-soap php-xmlrpc php-mbstring php-json php-gd php-mcrypt
6. sudo mysql -u root -p <br>
 -> CREATE DATABASE nightfox CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci; <br>
 -> USE nightfox; <br>
 -> CREATE TABLE `nightfox`.`users` (`user_id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `role` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = 
    InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci; <br>
 -> exit; <br>
7. sudo firewall-cmd --permanent --add-service=http
8. sudo firewall-cmd --permanent --add-service= openssh
9. sudo firewall-cmd --reload
10. --> http://domain_or_ip/

# Add firewall rules port Centos 7
1. sudo firewall-cmd --permanent --add-port= /tcp or udp
