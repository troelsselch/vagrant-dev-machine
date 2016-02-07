<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /vagrant/sites
    ServerName dev.loc
    ServerAlias 192.168.33.10

    <Directory /vagrant/sites/>
        AllowOverride All
        Require all granted
    </Directory>

</VirtualHost>
