FROM ubuntu:latest

# Update the package list and install necessary packages including cron
RUN apt-get update && apt-get install -y cron wget

# Copy your cron jobs, if any
# COPY my_cron_jobs.txt /etc/cron.d/my_cron_jobs

# Ensure cron jobs have proper permissions (if copying custom jobs)
# RUN chmod 0644 /etc/cron.d/my_cron_jobs

# Create a start-up script to start cron
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Set entrypoint to the start script
ENTRYPOINT ["/start.sh"]