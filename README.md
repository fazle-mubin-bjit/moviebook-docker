# moviebook-docker
I doveloped this project using Core PHP,HTML,JavaScript,CSS,Bootstrap and Docker

# Note
1. This project is for college and study only
2. that is not use for Commercial project

# Docker Tutorial
First we need to create a <b>docker-compose.yml</b> file and a <b>Dockerfile</b>. The given two are made with specific network and volumes where the apache is installed through <b>php:7.4-apache</b> with the needed packages for running. These dependencies are mentioned in the Dockerfile. In the docker-compose.yml file, the <b>mysql:latest</b> image was taken and for apache it was build with the help of the Dockerfile. To connect with the backend we only need to change two files, the database_connection.php and the database.php file. The host will be named as per the name of the database container name. We need to copy the file of the git directly in to the ```var/www/html/``` folder and the sql file needs to be in ```var/lib/mysql/``` folder. This can easily be done by copying them in the volume created. Now in order to dump the database entries into the created but empty database the following code has to written: 

```mysql -u root -p moviebook < moviebook.sql```
Then we need to need to go to the ip of the main vm or machine with the given port of the web-container.

# Screenshot

## 1. Home page ##
![home1](https://user-images.githubusercontent.com/104883953/167260990-670d3197-5c62-44bc-b821-fcc8d0efd36d.jpg)
![home2](https://user-images.githubusercontent.com/104883953/167261156-947f1206-6d2f-48c5-b3ba-319ff50b2e95.jpg)

## 2. All Movie ##
![all movie](https://user-images.githubusercontent.com/104883953/167261026-0c6d020e-7963-4e33-85e9-97b2b118d2e6.jpg)

## 3. Seat Book ##
![seat book](https://user-images.githubusercontent.com/104883953/167261039-e45bb084-ed5a-4b43-b8d2-132a16100d41.jpg)

#works
