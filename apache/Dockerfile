ARG APACHE_VERSION=""
FROM httpd:${APACHE_VERSION:+${APACHE_VERSION}-}alpine

RUN apk update && \
    apk upgrade && \
    apk add certbot openssl

# Enable SSL and rewrite modules
RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf && \
    sed -i '/LoadModule ssl_module/s/^#//g' /usr/local/apache2/conf/httpd.conf

# Expose ports
EXPOSE 80 443

# Copy apache vhost file
COPY demo.apache.conf /usr/local/apache2/conf/demo.apache.conf
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf

# Copy the script to obtain and configure SSL certificates
COPY obtain_ssl.sh /usr/local/bin/obtain_ssl.sh
RUN chmod +x /usr/local/bin/obtain_ssl.sh

# Persist SSL certificates
VOLUME ["/etc/letsencrypt"]

# Run the script to obtain and configure SSL certificates
CMD ["/usr/local/bin/obtain_ssl.sh"]