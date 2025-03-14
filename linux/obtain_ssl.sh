#!/bin/sh

# Ensure Apache is running before obtaining SSL
apachectl start

# Wait for Apache to be fully up
sleep 10

# Obtain SSL certificate using the webroot method
certbot certonly --webroot -w /var/www/html -d iwibarngsbryn.f5.si --non-interactive --agree-tos --email daneework93@gmail.com

# Check if the certificates were obtained successfully
if [ -f /etc/letsencrypt/live/iwibarngsbryn.f5.si/fullchain.pem ] && [ -f /etc/letsencrypt/live/iwibarngsbryn.f5.si/privkey.pem ]; then
    # Symlink SSL certificates (Apache expects them in a specific location)
    ln -sf /etc/letsencrypt/live/iwibarngsbryn.f5.si/fullchain.pem /etc/ssl/certs/server.crt
    ln -sf /etc/letsencrypt/live/iwibarngsbryn.f5.si/privkey.pem /etc/ssl/private/server.key

    # Restart Apache to apply SSL
    apachectl stop
    apachectl -D FOREGROUND
else
    echo "Failed to obtain SSL certificates"
    exit 1
fi