#!/bin/bash

mysqldump -uoptieyesproxi548 -pP6O1L238z9i6wYq optieyesproxi5489ytg85 > /var/www/vhosts/optieyescommande.com/httpdocs_new/backup.sql;
bzip2 /var/www/vhosts/optieyescommande.com/httpdocs_new/backup.sql
echo "MESSAGE TEXT" | mailx -s "Sujet" -a "/var/www/vhosts/optieyescommande.com/httpdocs_new/backup.sql.bz2" yonathan.optieyes@gmail.com
#echo "Finished"
