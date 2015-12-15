#!/bin/bash

find content/ -iname '*.txt' -o -iname '*.csv' | xargs fromdos
sudo chown -R www-data content/ thumbs/ site/accounts/
