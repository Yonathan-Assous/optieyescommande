#!/bin/bash

mysqldump -uoptieyesproxi548 -pP6O1L238z9i6wYq optieyesproxi5489ytg85 > backup.sql;
gupload backup.sql
echo "Finished"
# yoni, push