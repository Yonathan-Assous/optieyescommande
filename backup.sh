#!/bin/bash

DAYOFWEEK=$(date +%u);
mysqldump -uoptieyesproxi548 -pP6O1L238z9i6wYq optieyesproxi5489ytg85 > /var/www/vhosts/optieyescommande.com/httpdocs_new/backup-$DAYOFWEEK.sql;
rm -r /var/www/vhosts/optieyescommande.com/httpdocs_new/backup-$DAYOFWEEK.sql.bz2
bzip2 /var/www/vhosts/optieyescommande.com/httpdocs_new/backup-$DAYOFWEEK.sql
/root/.google-drive-upload/bin/gupload /var/www/vhosts/optieyescommande.com/httpdocs_new/backup-$DAYOFWEEK.sql.bz2
echo "SQL reçu dans le Drive" | mailx -s "Fichier sql bien reçu dans le drive" yonathan.optieyes@gmail.com

