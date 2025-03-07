#!/bin/sh

# Obtain SSL certificates using Certbot
certbot certonly --webroot -w /usr/local/apache2/htdocs -d yourdomain.com --email youremail@example.com --agree-tos --non-interactive

# Configure Apache to use the obtained SSL certificates
cat <<EOT >> /usr/local/apache2/conf/httpd.conf

# Enable SSL module
LoadModule ssl_module modules/mod_ssl.so

# Listen on port 443 for HTTPS
Listen 443

<VirtualHost *:443>
    DocumentRoot "/usr/local/apache2/htdocs"
    ServerName yourdomain.com

    SSLEngine on
    SSLCertificateFile "/etc/letsencrypt/live/yourdomain.com/fullchain.pem"
    SSLCertificateKeyFile "/etc/letsencrypt/live/yourdomain.com/privkey.pem"

    <Directory "/usr/local/apache2/htdocs">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
EOT

# Restart Apache to apply changes
httpd -k restart