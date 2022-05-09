# start project

```
composer update
```

## start  php-cgi
```
 php-cgi.exe -b 127.0.0.1:9000
```Get Free Shipping!

## nginx config

```
  server {
    listen 80;
    charset utf-8;
    server_name dev.f3api.cn;
    root D:/other/php/php-project;
    access_log logs/dev.f3api.cn.access.log;
    error_log  logs/dev.f3api.cn.error.log;

    location / {
      index index.php;
      try_files $uri /index.php?$query_string;
    }

    location ~ \.php$ {
      fastcgi_split_path_info ^(.+\.php)(/.+)$;
      fastcgi_pass 127.0.0.1:9000;
      fastcgi_index index.php;
      include fastcgi_params;
      fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
  }

```
