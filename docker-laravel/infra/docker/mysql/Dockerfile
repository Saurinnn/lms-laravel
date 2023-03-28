FROM mysql/mysql-server:8.0

ENV TZ=UTC

COPY ./infra/docker/mysql/my.cnf /etc/my.cnf

# sqlite
RUN yum -y install sqlite sqlite-devel

#
#--------------------------------------------------------------------------
# mysql-client
#--------------------------------------------------------------------------
#

USER root

RUN apt update && \
    apt install -y mysql-client