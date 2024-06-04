# Use a imagem base oficial do PHP com Apache
FROM php:7.4-apache

# Copie os arquivos do aplicativo para o diretório padrão do Apache
COPY . /var/www/html/

# Exponha a porta 80 para o tráfego HTTP
EXPOSE 80