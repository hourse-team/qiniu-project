# qiniu-project
## service
> Nginx conf
```
server {
    listen       10000;
    server_name localhost;
    root  /root/html/;
    index index.html index.htm index.php;

    access_log /var/log/nginx/localhost-access.log;
    error_log  /var/log/nginx/localhost-error.log;

    location / {
        proxy_pass http://localhost:8886/;
    }

    location ~ .*\.(php|php5|php7.0)?$ {
        fastcgi_pass   unix:/var/run/php/php7.0-fpm.sock;
        include        fastcgi_params;
    }

    location ~ /\.(ht|svn|git) {
            deny all;
    }
}
````
