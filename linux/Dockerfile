# Without GPG
FROM ubuntu:latest

# Update package list and install essential software
RUN apt-get update && apt-get install -y \
    cron wget nano vim curl unzip

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