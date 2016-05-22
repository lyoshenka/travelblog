#!/bin/bash

find content/ -iname '*.txt' -o -iname '*.csv' | xargs fromdos
sudo chown -R www-data:grin content/ thumbs/ site/accounts/
find content/ -type f -exec chmod 664 {} \;
find content/ -type d -exec chmod 774 {} \;
