#!/usr/local/bin/bash

DIR=/home/orfiwww/.acme.sh
NOW=$(date +"%Y%m%d_%H%M")
logFile=$DIR/task/task_$NOW.log


rm -R $DIR/orfi.ru >> $logFile

$DIR/acme.sh --issue --issue -d orfi.ru -d www.orfi.ru --webroot /home/orfiwww/orfi.ru/docs/  >>$logFile

zip -j -r $DIR/orfi.ru/orfi.ru.zip $DIR/orfi.ru >> $logFile
php $DIR/task/sendmail.php



