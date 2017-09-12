# qiniu-project
## service nginx1.10
> Nginx conf
```
server {
    listen       88;
    server_name localhost;
    root  /srv/hourse/token;
    index index.html index.htm index.php;

    access_log /var/log/nginx/localhost-access.log;
    error_log  /var/log/nginx/localhost-error.log;
    location / {
        #proxy_pass http://localhost:8886/;
        try_files $uri $uri/ /index.html;
    }

    location ~ .*\.(php|php5|php7.0)?$ {
#        fastcgi_pass   unix:/var/run/php/php7.0-fpm.sock;
#        include        fastcgi_params;
        fastcgi_pass    unix:/run/php/php7.0-fpm.sock;
        fastcgi_intercept_errors        on;
        #fastcgi_param  SCRIPT_FILENAME  /home/gittest/$fastcgi_script_name;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include        fastcgi_params;

   }
   location ~ /\.(ht|svn|git) {
            deny all;
   }
}

````
