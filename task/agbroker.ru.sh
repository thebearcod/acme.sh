#!/usr/local/bin/bash

DIR=/home/orfiwww/.acme.sh
NOW=$(date +"%Y%m%d_%H%M")
logFile=$DIR/task/task_$NOW.log
dirSSL=/home/orfiwww/.acme.sh/agbroker.ru

rm -R $DIR/agbroker.ru >> $logFile

/home/orfiwww/.acme.sh/acme.sh --issue -d agbroker.ru -d www.agbroker.ru  --webroot /home/orfiwww/agbroker.ru/docs/ >>$logFile
if [ -e $DIR/agbroker.ru/agbroker.ru.cer ]
then
    zip -j -r $DIR/agbroker.ru/agbroker.ru.zip $DIR/agbroker.ru >> $logFile
    php $DIR/task/sendmail_agbroker.ru.php
else
    php $DIR/task/sendmail_error_agbroker.ru.php
fi
