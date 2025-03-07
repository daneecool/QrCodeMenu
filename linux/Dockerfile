FROM ubuntu:latest

# Update package list and install essential software
RUN apt-get update && apt-get install -y \
    cron wget nano vim curl unzip python3 python3-venv libaugeas0 apache2

# Setup Python virtual environment
RUN python3 -m venv /opt/certbot/ && /opt/certbot/bin/pip install --upgrade pip

# Install Certbot
RUN /opt/certbot/bin/pip install certbot certbot-apache

# Prepare the Certbot command
RUN ln -s /opt/certbot/bin/certbot /usr/bin/certbot

# Get the certificate non-interactively
# RUN certbot certonly --apache --non-interactive --agree-tos --email daneework93@gmail.com -d iwibarngsbryn.f5.si

# Copy crontab file to the cron.d directory
COPY ddns_update.cron /etc/cron.d/ddns_update

# Ensure cron job file has proper permissions
RUN chmod 0644 /etc/cron.d/ddns_update && crontab /etc/cron.d/ddns_update

# Set nano as the default editor
ENV EDITOR=nano

# Start cron in the foreground
CMD ["cron", "-f"]




# With GPG
# FROM ubuntu:latest

# # Update package list and install essential software
# RUN apt-get update && apt-get install -y \
#     cron wget nano vim curl unzip gnupg

# # Copy the encrypted crontab file to the cron.d directory
# COPY ddns_update.cron.gpg /etc/cron.d/ddns_update.cron.gpg

# # Set environment variable for GPG passphrase
# ARG GPG_PASSPHRASE

# # Decrypt the crontab file
# RUN echo "$GPG_PASSPHRASE" | gpg --batch --yes --passphrase-fd 0 -o /etc/cron.d/ddns_update.cron -d /etc/cron.d/ddns_update.cron.gpg

# # Ensure the cron job file has proper permissions
# RUN chmod 0644 /etc/cron.d/ddns_update.cron && crontab /etc/cron.d/ddns_update.cron

# # Set nano as the default editor
# ENV EDITOR=nano

# # Start cron in the foreground
# CMD ["cron", "-f"]