FROM mysql:8

ADD db.sql /docker-entrypoint-initdb.d/db.sql
RUN echo "default-authentication-plugin=mysql_native_password" >> /etc/mysql/my.cnf
