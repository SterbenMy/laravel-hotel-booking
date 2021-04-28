docker run --name it-academy-db -d \
	   -p 33069:3306 \
           -e MYSQL_ROOT_PASSWORD=root \
	   --restart unless-stopped \
	   --volume /home/sterbenm/www/laravel-intro/docker-containers/db:/var/lib/mysql \
	   --network=laravel_intro_network \
	   mariadb:latest \
