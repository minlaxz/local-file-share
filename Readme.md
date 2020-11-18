### Local-Image-Sharing@php-apache-docker

```
git clone this_repo && cd this_repo
```
create container and run => once
```
docker run --name app -d -p 8080:80 -v "$PWD":/var/www/html minlaxz/php-apache:local-file-sharing
```
=> repeatable
```
docker exec -it app bash # if you want shell
docker stop app # stop share-application
docker start # start sharing
```
> check at your localhost:8080 or 0.0.0.0:8080