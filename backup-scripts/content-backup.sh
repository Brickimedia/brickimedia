#!/bin/bash

source /media/backups/pass.sh

databases=(shared meta en customs lmbw stories cuusoo admin dev globalblocking)

echo "backing up dbs"

for db in ${databases[*]}
do
	echo "backing up " $db
	mysqldump -h localhost --user=$dbuser --password=$dbpass $db | gzip > /media/backups/$db.sql.gz --force
done
