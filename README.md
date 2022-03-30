## Deployment

### Web server setup
Install the required web server and PHP packages:
```bash
apt install apache2 php libapache2-mod-php
```

Disable default page:
```bash
a2dissite /etc/apache2/sites-available/000-default.conf
```

Create a new .conf file for this web page and enable it:
```bash
a2ensite /etc/apache2/sites-available/<name_of_web_page>.conf
```

### Setup files
Create a directory in /var/www/ :
```bash
mkdir <name_of_web_page>
```

Copy all repo files into /var/www/<name_of_web_page>/ and make sure their owner is www-data
```bash
chown -R www-data:www-data /var/www/<name_of_web_page>/
```
