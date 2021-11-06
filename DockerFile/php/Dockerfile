FROM php:8.0-fpm-buster

COPY php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

RUN apt-get update && apt-get -y install cron
RUN apt-get -y install supervisor && \
  mkdir -p /var/log/supervisor && \
  mkdir -p /etc/supervisor/conf.d


RUN apt-get update && apt-get upgrade -y && apt-get install -y \
      procps \
      nano \
      git \
      unzip \
      libicu-dev \
      zlib1g-dev \
      libxml2 \
      libxml2-dev \
      libreadline-dev \
      supervisor \
      cron \
      sudo \
      libzip-dev \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
      pdo_mysql \
      sockets \
      intl \
      opcache \
      zip \
    && rm -rf /tmp/* \
    && rm -rf /var/list/apt/* \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean

# Set timezone
RUN ln -snf /usr/share/zoneinfo/Asia/Tehran /etc/localtime && echo Asia/Tehran > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', Asia/Tehran > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

COPY www.conf /usr/local/etc/php-fpm.d/www.conf
COPY php.ini /usr/local/etc/php/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy cronjobs file to the path
COPY /supervisord/cronjobs /etc/cron.d/cronjobs
# Apply permissions
RUN chmod 0644 /etc/cron.d/cronjobs
# Run crontab
RUN crontab /etc/cron.d/cronjobs
# Create log file where the result of running the cronjobs will be saved
RUN touch /var/log/cron.log
# Copy supervisord
COPY /supervisord/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

WORKDIR /var/www

ENTRYPOINT ["/usr/bin/supervisord"]

USER root
