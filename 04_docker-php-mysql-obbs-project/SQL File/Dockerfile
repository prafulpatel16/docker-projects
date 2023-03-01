FROM mysql:5.7.34

# Copy content from .sql to Docker mysql container
COPY ./docker/mysql/obbs.sql /docker-entrypoint-initdb.d/init.sql

EXPOSE 3306



