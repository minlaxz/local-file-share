### Image-sharing-local-php-development

`git clone this_repo && cd this_repo`

once # create container and run <br>
`docker run --name app -d -p 8080:80 -v "$PWD":/var/www/html minlaxz/local-file-sharing:php-apache`

repeatable <br>
`docker exec -it app bash # if you want shell`<br>
`docker stop app # stop share-application`<br>
`docker start # start sharing`<br>

> check at your localhost:8080 or 0.0.0.0:8080