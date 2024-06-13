FROM php:8.0-apache

WORKDIR .

COPY . .

EXPOSE 80