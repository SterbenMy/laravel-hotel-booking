 docker run --name it-academy-project -d \
    -p 88:80 \
    -p 8822:22 \
    --restart unless-stopped \
    --volume /home/sterbenm/www/laravel-intro:/var/www/html \
    --network=laravel_intro_network \
    amoraresco/it-academy-project:latest \
