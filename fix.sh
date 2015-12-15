#!/bin/bash

find content/ -iname '*.txt' -o -iname '*.csv' | xargs fromdos
sudo chown -R www-data:grin content/ thumbs/ site/accounts/
