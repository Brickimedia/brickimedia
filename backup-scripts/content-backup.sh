#!/bin/bash

source /media/backups/pass.sh

databases=(shared meta en customs lmbw stories cuusoo)
locations=("/var/www/wiki/skins" "/var/www/wiki/extensions" "/var/www/brickimedia.org")

echo "backing up dbs"

for db in ${databases[*]}
do
	echo "backing up " $db
	mysqldump -h localhost --user=$dbuser --password=$dbpass $db | gzip > /media/backups/$db.sql.gz --force
done

echo "backing up files"

for path in ${locations[*]}
do
	file=`echo $path | rev | cut -d/ -f1 | rev`
	echo "backing up " $file
	newpath=/media/backups/$file.tar.gz
	tar -zcf $newpath $path --overwrite
done
