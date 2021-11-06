FROM nginx:1.21-alpine

RUN apk update && \
  apk add --update --no-cache --virtual=.build-dependencies g++

COPY nginx.conf  /etc/nginx/
COPY templates /etc/nginx/templates/
RUN echo "upstream php-upstream { server app:9000; }" > /etc/nginx/conf.d/upstream.conf

EXPOSE 80
EXPOSE 443
