FROM ubuntu:latest

# Update package list and install essential software
RUN apt-get update && apt-get install -y \
    cron wget nano vim curl unzip python3 python3-venv libaugeas0 apache2 certbot

# Copy crontab file to the cron.d directory
COPY ddns_update.cron /etc/cron.d/ddns_update

# Ensure cron job file has proper permissions and add a newline before EOF
RUN chmod 0644 /etc/cron.d/ddns_update && echo "" >> /etc/cron.d/ddns_update && crontab /etc/cron.d/ddns_update

# Set nano as the default editor
ENV EDITOR=nano

# Copy the script to obtain and configure SSL certificates
COPY obtain_ssl.sh /usr/local/bin/obtain_ssl.sh
RUN chmod +x /usr/local/bin/obtain_ssl.sh

# Start cron in the foreground
# CMD ["/usr/local/bin/obtain_ssl.sh"]




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