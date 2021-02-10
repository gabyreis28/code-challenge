FROM php:7.3.22-apache
LABEL maintainer="Gabriela Dias Reis <gabriela.dias.97@hotmail.com.br>"

RUN a2enmod rewrite

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

EXPOSE 80
