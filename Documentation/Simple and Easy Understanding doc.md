# QrCodeMenu

## Design Flow 

### Image 
- 1 test image is been upload into database for checking 

### Category 
1. Beer
2. Wine
3. Non-Alcohol
4. Shots
5. Cocktails 
6. Premium Cocktails 
7. Japanese Sake 
8. Bottle 

<br><br>
--------
<br><br>

## Architecture Flow

### HTML
- basic design for functionality has been tested 

- Problem encounter
    - in mobile 800px, there is a minor click issue
    - when any button being click, the page will refresh to its initial position.


### DDNS
dns: iwibarngsbryn.f5.si
passwd: Happy_New_Year

### Crontab
Check if ```Cron``` is running in Docker/WSL
- **Ensure Cron Daemon is Running** in **Docker** or **WSL**, cron service might not be running by default.
  ```
  sudo service cron start
  ```
Verify Cron Jobs Directly
- **List cron jobs for the current user**
  ```
  crontab -l
  ```
**Check cron logs directly** (using ```syslog``` or a specific log file like ```/var/log/cron```)
- ```
  grep CRON /var/log/syslog
  ```
**Check if Cron is Running Using ps**
- check if the cron daemon is running by searching for it with the ```ps``` command
  ```
  ps aux | grep cron
  ```
- If cron is running
  ```
  root     3561  0.0  0.0   3808  1408 ?     Ss   11:15   0:00 /usr/sbin/cron -P
  ```
**Check Cron Logs (Syslog)**
- Cron often logs its actions to ```/var/log/syslog```.
  ```
  grep CRON /var/log/syslog
  ```
**Check Cron's Status with service**
- Status checking with command 
  ```
  service cron status
  ```
- result 
  ```
  * cron is running
  ```
  