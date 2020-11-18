## Local-Image-Sharing@php-apache-docker

=> get-started
```
git clone this_repo && cd this_repo
```
=> create container and run (once)
```
docker run --name app -d -p 8080:80 -v "$PWD":/var/www/html minlaxz/php-apache:local-file-sharing
```
=> repeatable
```
docker exec -it app bash # if you want shell
docker stop app # stop share-application
docker start # start sharing
```

=> If you want to autostart docker conatiner,
```
docker update --restart unless-stopped {contaienr_id} or {container_name}
```
or
```
docker run --name app --restart unless-stopped -d -p 8080:80 -v "$PWD":/var/www/html minlaxz/php-apache:local-file-sharing
```
> check at your localhost:8080 or 0.0.0.0:8080
