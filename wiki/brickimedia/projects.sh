#!/bin/bash

#runs the given script on all wikis in our farm

WIKIS=(meta dev en customs lmbw stories cuusoo)

for wiki in $WIKIS
do
echo "performing on " $wiki
`WIKI=$wiki $1`
done
