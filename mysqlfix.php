#!/bin/bash
PATH=/usr/sbin:/usr/bin:/sbin:/bin
if [[ ! "$(/usr/sbin/service mysql status)" =~ "start/running" ]]
then
    echo "MySQL restarted" | mail -s "Email Subject" 'modassir@mobisy.com,anoop@mobisy.com';
    sudo service mysql start
fi

