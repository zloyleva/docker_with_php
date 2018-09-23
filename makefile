docker_php = simple_docker_php-fpm_1
docker_nginx = simple_docker_nginx_1

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