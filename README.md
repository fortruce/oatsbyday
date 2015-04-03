## Create Backup of DB

```
docker run --volumes-from dbdata -v $(pwd):/backup ubuntu tar cvf /backup/backup.tar \
       /var/lib/mysql

docker-compose stop
docker-compose rm

docker-compose up -d dbdata
docker run --volumes-from dbdata -v $(pwd):/backup busybox tar xvf /backup/backup.tar

docker-compose up --no-recreate -d
```