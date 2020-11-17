### Image-sharing-local-php-development

once # create container and run <br>
`docker run --name app -d -p 8080:80 -v "$PWD":/var/www/html php:7.2-apache`

repeatable <br>
`docker exec -it app bash # if you want shell`<br>
`docker stop app # stop share-application`<br>
`docker start # start sharing`<br>