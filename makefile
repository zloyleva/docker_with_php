docker_php = simple_docker_php-fpm_1
docker_nginx = simple_docker_nginx_1
docker_mysql = simple_docker_mysql_1

#some commands
start: #Containers start
	@sudo docker-compose up -d

stop: #Stop
	@sudo docker-compose stop

show_containers:
	@sudo docker ps

connect_php:
	@sudo docker exec -it $(docker_php) bash

connect_nginx:
	@sudo docker exec -it $(docker_nginx) bash

connect_mysql:
	@sudo docker exec -it $(docker_mysql) bash