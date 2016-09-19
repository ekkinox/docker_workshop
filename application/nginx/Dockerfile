FROM nginx:stable

MAINTAINER Jonathan VUILLEMIN <ekkinox@gmail.com>

ADD nginx.conf /etc/nginx/
ADD vhost.conf /etc/nginx/conf.d/

RUN rm /etc/nginx/conf.d/default.conf