#!/usr/local/bin/bash

rm -R /home/orfiwww/.acme.sh/agbroker.ru

/home/orfiwww/.acme.sh/acme.sh --issue -d agbroker.ru -d www.agbroker.ru --webroot /home/orfiwww/agbroker.ru/docs/


DIR=/home/orfiwww/.acme.sh
NOW=$(date +"%Y%m%d_%H%M")
logFile=$DIR/task/task_$NOW.log
dirSSL=/home/orenpb/.acme.sh/orenpb.ru

rm -R $DIR/orenpb.ru >> $logFile

/home/orenpb/.acme.sh/acme.sh --issue -d orenpb.ru -d www.orenpb.ru  --webroot /
home/orenpb/orenpb.ru/docs/ >>$logFile
if [ -e $DIR/orenpb.ru/orenpb.ru.cer ]
then
    zip -j -r $DIR/orenpb.ru/orenpb.ru.zip $DIR/orenpb.ru >> $logFile
    php $DIR/task/sendmail.php
else
    php $DIR/task/sendmail_error.php
fi
