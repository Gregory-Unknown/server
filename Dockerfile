# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: esobchak <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/01/12 14:09:09 by esobchak          #+#    #+#              #
#    Updated: 2021/01/12 17:42:49 by esobchak         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

#Install Utilities
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get -y install wget vim

#Install Nginx
RUN apt-get -y install nginx
RUN rm /etc/nginx/sites-available/default
COPY ./srcs/default /etc/nginx/sites-available/

#Install Php
RUN apt-get -y install php php-mysql php-fpm php-cli php-mbstring php-zip php-gd

#Install MySql
RUN apt-get install default-mysql-server -y

#Install PhpMyAdmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz phpmyadmin.tar.gz
RUN tar xvzf phpmyadmin.tar.gz && mv phpMyAdmin-5.0.4-all-languages /var/www/html/phpmyadmin
COPY ./srcs/config.inc.php /var/www/html/phpmyadmin

#Install Wordpress
RUN apt-get install wordpress -y
RUN mv /usr/share/wordpress /var/www/html
COPY ./srcs/wp-config.php /var/www/html/wordpress

#Install and Configure SSL
RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Moscow/L=Moscow/O=21 SCHOOL/OU=ESOBCHAK/CN=cert"\
 -newkey rsa:2048\
 -keyout /etc/ssl/private/nginx-selfsigned.key\
 -out /etc/ssl/certs/nginx-selfsigned.crt
RUN chmod -R 600 /etc/ssl/*

COPY ./srcs/init.sh .
copy ./srcs/database.sql .

#Expose Port
EXPOSE 80 443

#Run and Configure MySql
RUN service mysql start && mysql < database.sql

#Run Start Servicies
ENTRYPOINT bash init.sh
