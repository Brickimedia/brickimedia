#!/bin/sh

#domains="meta.brickimedia.org en.brickimedia.org customs.brickimedia.org"

cd /var/www/wiki

for i in meta en customs; do
 export FAKE_SERVER_NAME=$i.brickimedia.org
 echo "UPDATE: $FAKE_SERVER_NAME"
 php maintenance/update.php
done

