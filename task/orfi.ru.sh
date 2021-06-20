#!/usr/local/bin/bash

rm -R /home/orfiwww/.acme.sh/orfi.ru

/home/orfiwww/.acme.sh/acme.sh --issue -d orfi.ru -d www.orfi.ru --webroot /home/orfiwww/orfi.ru/docs/

