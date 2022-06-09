<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Installing
<p>
    <ul>
    <li>git clone https://github.com/Ksarddtb/test2.me.git</li>
    <li>cd test.me</li>
    <li>cp .env.example .env</li>
    <li>config DB in  .env</li>
    <li>php artisan key:generate</li>
    <li>php migrate</li>
    <li>php db:seed     # Creating user:admin@test.me   pass: password</li>
    <li>Creting TableList</li>
    <li>Enter to site:</li>
    <li>1. Dashboard tableList without jquery ajax</li>
    <li>2. Generate tableList with jquery ajax</li>
    </ul>
</p>


## nginx config Laravel
<pre>
    <code>server {
        listen 80;
        server_name <mark>server_domain_or_IP</mark>;
        root /var/www/<mark>travellist</mark>/public;

        add_header X-Frame-Options "SAMEORIGIN";
        add_header X-XSS-Protection "1; mode=block";
        add_header X-Content-Type-Options "nosniff";

        index index.html index.htm index.php;

        charset utf-8;

        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        location = /favicon.ico { access_log off; log_not_found off; }
        location = /robots.txt  { access_log off; log_not_found off; }

        error_page 404 /index.php;

        location ~ \.php$ {
            fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
            include fastcgi_params;
        }

        location ~ /\.(?!well-known).* {
            deny all;
        }
    }
    </code>
</pre>
## Apache config Laravel
<pre>
    <code>
    #Vhost file for test2.me
    <VirtualHost *:80>
        ServerAdmin admin@test2.me
        ServerName test2.me
        ServerAlias www.test2.me
        DocumentRoot /var/www/vhosts/test2.me/public
          <Directory /var/www/vhosts/test2.me/>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all
                Require all granted
          </Directory> 
        LogLevel debug
        ErrorLog /var/log/test2.me-error.log
        CustomLog /var/log/test2.me-access.log combined
    </VirtualHost>

    </code>
</pre>


## Contributing

