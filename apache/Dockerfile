ARG APACHE_VERSION=""
FROM httpd:${APACHE_VERSION:+${APACHE_VERSION}-}alpine

RUN apk update && \
    apk upgrade && \
    apk add certbot

# Expose ports 80 and 443
EXPOSE 80 443

# Copy apache vhost file to proxy php requests to php-fpm container
COPY demo.apache.conf /usr/local/apache2/conf/demo.apache.conf
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf

# Copy the script to obtain and configure SSL certificates
COPY obtain_ssl.sh /usr/local/bin/obtain_ssl.sh
RUN chmod +x /usr/local/bin/obtain_ssl.sh

# Run the script to obtain and configure SSL certificates
# CMD ["/usr/local/bin/obtain_ssl.sh"]